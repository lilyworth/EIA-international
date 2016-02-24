$(document).ready(function(){	
	// Mobile switch
	var mobileView = false;
	
	// Smooth scroll
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
	
	// Detect mobile view
	function detectMobile(){
		if (Modernizr.mq('(max-width: 767px)')) {
			if (!mobileView) {
				mobileView = true;
				// Load first module when entering mobile view
				if ($("#r1").prop("checked")) {
					$('.lwamount').removeClass('lwactive');
					$('.lwamount:nth-child(2)').addClass('lwactive');
					loadModule(1);
				}
				else if ($("#r2").prop("checked")) {
					$('.lwamount').removeClass('lwactive');
					$('.lwamount:first-child').addClass('lwactive');
					loadModule(1);					
				}
			}
		}
		else {
			return false;
		}
	}
	
	// Adjust header heights
	function adjustHeight(cssClass) {
		var maxHeight = 0;
		$(cssClass).each(function(){
		   maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
		});
		$(cssClass).each(function(){
			textPadding = ((maxHeight-$(this).height())/2);
			$(this).css({"padding-top":textPadding,"padding-bottom":textPadding});
		});		
	}
	
	// Load monthly/single/mobile module
	function loadModule(mod){
		switch (mod) {
			// Load monthly module
			case "monthly":
				$("#lwsinglemod").fadeOut(function(){
						$("#lwsinglemod").addClass("lwhide");
						$("#lwmonthmod").removeClass("lwhide");
						$("#lwmonthmod").fadeIn();
						if (mobileView) {
							loadModule(1);
						}
						else {							
							adjustHeight("#lwmonthmod .lwmoduleheader");
						}
					}
				);
				$("#lwsingle").fadeOut(function(){
						$("#lwsingle").addClass("lwhide");
						$("#lwmonthly").removeClass("lwhide");
						$("#lwmonthly").fadeIn();
						$('.lwamount').removeClass('lwactive');
						$('.lwamount:nth-child(2)').addClass('lwactive');
					}
				);
				break;
			// Load single module
			case "single":
				$("#lwmonthmod").fadeOut(function(){
						$("#lwmonthmod").addClass("lwhide");
						$("#lwsinglemod").removeClass("lwhide");
						$("#lwsinglemod").fadeIn();
						if (mobileView) {
							loadModule(1);
						}
						else {
							adjustHeight("#lwsinglemod .lwmoduleheader");
						}
					}
				);
				$("#lwmonthly").fadeOut(function(){
						$("#lwmonthly").addClass("lwhide");
						$("#lwsingle").removeClass("lwhide");
						$("#lwsingle").fadeIn();
						$('.lwamount').removeClass('lwactive');
						$('.lwamount:first-child').addClass('lwactive');
					}
				);
				break;
			// Load individual mobile modules
			default:
				if (mod > 0 && mod < 4) {
					$(".lwmodule").addClass("lw_mob_hide");
					$(".lwmodule:nth-child("+mod+")").removeClass("lw_mob_hide");
				}
				break;
		}
	}
	
	/* START INITIALISATION */
	
	// Initially load monthly
	$("#r1").prop("checked", true);
	
	// Fix first fade transition for single
	$("#lwsinglemod").hide();
	$("#lwsingle").hide();
	
	// Initial mobile check & height adjustment
	if (detectMobile() === false) {
		adjustHeight("#lwmonthmod .lwmoduleheader");
	}
	
	/* END INITIALISATION */
	
	// Price active state
    $('.lwamount').click(function(e) {
		// Set class on clicked price
        e.preventDefault();
        $('.lwamount').removeClass('lwactive');
        $(this).addClass('lwactive');
		// If mobile, load corresponding module
		if (mobileView) {
			if ($("#r1").prop("checked")) {
				loadModule($(this).index());
			}
			else if ($("#r2").prop("checked")) {
				// +1 because nth-child() not zero-based
				loadModule(($(this).index())+1);
			}
		}
    });
	
	// Monthly selected
	$("#r1").change(function(){
		loadModule("monthly");
	});
	
	// Single selected
	$("#r2").change(function(){
		loadModule("single");
	});
	
	// Window resize
	$(window).resize(function() { 
		if (detectMobile() === false) {
			mobileView = false;
			if ($("#r1").prop("checked")) {
				adjustHeight("#lwmonthmod .lwmoduleheader");
			}
			else if ($("#r2").prop("checked")) {
				adjustHeight("#lwsinglemod .lwmoduleheader");
			}
		}
	});
});