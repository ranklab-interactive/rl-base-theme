<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/touch.png" rel="apple-touch-icon-precomposed">
		
	<!-- css + javascript -->

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>

<!-- header -->
<div class="row">
<header class="large-12 columns">
	<div class="medium-3 columns">
    <!-- logo -->
	<div class="logo">
		<a href="<?php echo home_url(); ?>" title="">
			<img src="<?php echo get_template_directory_uri(); ?>/style/images/logo.png" alt="Logo" title="">
		</a>
	</div><!-- /logo -->
	</div>
	<div class="medium-9 columns">
	<div id="mobile-header" class="hide-for-medium-up"><a id="responsive-menu-button" href="#sidr-main">Menu</a></div>
	<div id="nav"><nav id="main-nav" class="hide-for-small" role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?></nav></div>
	</div>
</header>
</div><!-- end header-container -->