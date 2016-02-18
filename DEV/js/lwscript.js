$(document).ready(function(){
	// Set header heights equal & vertically align header text on cssClass
	function resetHeight(cssClass) {
		var maxHeight = 0;
		$(cssClass).each(function(){
		   maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
		});
		$(cssClass).each(function(){
			textPadding = ((maxHeight-$(this).height())/2);
			$(this).css({"padding-top":textPadding,"padding-bottom":textPadding});
		});
	}
	
	// Load monthly & hide single content & prices and reset header heights
	function loadMonthly() {
		$("#lwsinglemod").fadeOut(function(){
				$("#lwsinglemod").addClass("lwhide");
                $("#lw_amount2").addClass("lwactive");
				$("#lwmonthmod").removeClass("lwhide");
				$("#lwmonthmod").fadeIn(function(){
					resetHeight("#lwmonthmod .lwmoduleheader");	
				});
			}
		);
		$("#lwsingle").fadeOut(function(){
				$("#lwsingle").addClass("lwhide");
				$("#lwmonthly").removeClass("lwhide");
				$("#lwmonthly").fadeIn();
			}
		);	
	}
	
	// Load single & hide monthly content & prices and reset header heights
	function loadSingle() {
		$("#lwmonthmod").fadeOut(function(){
				$("#lwmonthmod").addClass("lwhide");
                $(".lwamount").removeClass("lwactive");
                $("#lw_amount5").addClass("lwactive");
				$("#lwsinglemod").removeClass("lwhide");
				$("#lwsinglemod").fadeIn();
			}
		);
		$("#lwmonthly").fadeOut(function(){
				$("#lwmonthly").addClass("lwhide");
				$("#lwsingle").removeClass("lwhide");
				$("#lwsingle").fadeIn(function(){
					resetHeight("#lwsinglemod .lwmoduleheader");	
				});
			}
		);	
	}
    
    //Smooth scroll
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

	// Reset header heights on window resize
	$(window).resize(function() { 
		resetHeight();
	});
	
	resetHeight("#lwmonthmod .lwmoduleheader");	
	
	// Initial monthly/single loading
	/*if ($("#r1").prop("checked", true)) {
		loadMonthly();
		
		// Allows correct first fade in
		$("#lwsinglemod").hide();
		$("#lwsingle").hide();
	}
	else if ($("#r2").prop("checked", true)) {
		loadSingle();
		
		// Allows correct first fade in
		$("#lwmonthlymod").hide();
		$("#lwmonthly").hide();
	}*/
    
    // Active state
    $('.lwamount').click(function(e) {
        e.preventDefault();
        $('.lwamount').removeClass('lwactive');
        $(this).addClass('lwactive');
    });
	
	// Monthly selected
	$("#r1").change(function(){
		loadMonthly();
	});
	
	// Single selected
	$("#r2").change(function(){
		loadSingle();
	});
    
});