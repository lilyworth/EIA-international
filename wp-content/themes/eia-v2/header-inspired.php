<!doctype html>

<html class="no-js <?php if(is_front_page()){ echo "home"; }; ?> <?php the_device(); ?>" <?php language_attributes(); ?>>

<head id="www-eia-international-org" data-template-set="eia-theme">

	<script asynch src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-flex-objectfit.js"></script>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<meta name = "viewport" content = "width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_/img/favicon.png" />
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/inspired/inspired.css" /><!--inspired CSS-->
	<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Pt+Sans:700">
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/_/css/screen.css?dolphin" />
    <link rel="stylesheet" media="print" href="<?php echo get_template_directory_uri(); ?>/_/css/print.css?whale" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','//connect.facebook.net/en_US/fbevents.js');

    fbq('init', '421444488045602');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=421444488045602&ev=PageView&noscript=1"
    /></noscript>


    <!—FB standard events—>
    <script>
    fbq('track', 'ViewContent');
    fbq('track', 'Search');
    fbq('track', 'AddToCart');
    fbq('track', 'InitiateCheckout');
    fbq('track', 'AddPaymentInfo');
    fbq('track', 'Purchase', {value: '1.00', currency: 'USD'});
    fbq('track', 'CompleteRegistration');
    </script>

    <!-- End Facebook Pixel Code -->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php if(!isset($_COOKIE['eia-cookie-agree'])) { ?>

			<div class="cookie-notice" id="cookie-notice">
			<div class="wrapper">

				<div class="cookie-text">
					<p>This website uses cookies, as explained in our <a href="/cookies/">Cookies Policy</a>.
						Press the button to hide this message and agree to our terms.
					</p>
				</div>

				<div class="cookie-button">

					<button id="cookie-agree">That's fine</button>

				</div><!-- cookie-button -->

			</div> <!-- wrapper -->
		</div> <!-- cookie-notice -->

	<?php } ?>



<div class="header-wrapper">
	<header class="header" id="top" role="banner">

		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/_/img/main-logo.png?m76" alt="EIA" /></a>
		</div>


		<div class="header__title">
		<h1>Protecting the environment with&nbsp;intelligence</h1>
		</div>

		<!--	<div class="contact">

					<ul>
						<li>+44 (0)207 3547960</li>
						 <li>62-63 Upper Street, London, <a href="http://goo.gl/bXimzp" title="Find us on Google Maps" target="_blank">N1 0NY</a></li>
						<li><a href="mailto:ukinfo@eia-international.org">ukinfo@eia-international.org</a></li>
					</ul>




		</div> --> <!-- contact -->

		<div class="search">

			<?php get_template_part('searchform'); ?>

		</div>
		<!-- search -->

	</header>
</div> <!-- header-wrapper -->

	<?php if(!is_mobile()){?>
	<?php if (is_front_page()){ ?>
	<?php get_template_part('_slider'); ?>
	<?php // } elseif(is_page('our-work')) { ?>
	<?php // get_template_part('_slider--our-work'); ?>
	<?php } ?>
	<?php } ?>


<nav class="lwnav" role="navigation">

	<span class="nav-border nav-border--top"></span>

	<div class="wrapper">
		<ul id="menu">
			<li><a href="/our-work/">Our work</a></li>
			<li><a href="/get-involved/">Get involved</a></li>
			<li><a href="/media-resources/">Media &amp; Resources</a></li>
			<li><a href="/about-eia/">About</a></li>
			<li><a href="/donate/">Donate</a></li>
			<li><a href="/contact/">Contact</a></li>
		</ul>
	</div> <!-- wrapper -->

	<span class="nav-border nav-border--bottom"></span>

</nav>