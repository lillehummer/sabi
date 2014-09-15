<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrapper">

	<header class="header" role="banner">

		<div class="header-inner clearfix">

			<p class="logo">
				<a href="<?php echo home_url(); ?>" rel="nofollow">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="" height="">
				</a>
			</p>

			<nav role="navigation" class="navigation">
				<?php
				wp_nav_menu(array(
					'container' => false,                           // remove nav container
					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', 'lillehummernl' ),  // nav name
					'menu_class' => 'nav top-nav cf',               // adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0                                   // limit the depth of the nav
				));
				?>
			</nav>

		</div>

	</header>
