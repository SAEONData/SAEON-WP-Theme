<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22143310-12"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-22143310-12');
		</script>

    </head>

<body <?php body_class(); ?>>
	<header class="edu-header" role="banner">
		<div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png " /></a></div>
		<a href="<?php echo get_home_url(); ?>" id="edu-title"><strong><span class="display-desktop">SAEON </span>Education Outreach</strong>
		<?php bloginfo( 'description' ); ?></a>

		<nav id="cssmenu" role="navigation">
		
	
		<div id="head-mobile"></div>
		<div class="button"></div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'depth'           => 3,
					'container'           => false
				)
			);
			?>
		</nav><!-- #site-navigation -->
        

	</header><!-- #masthead -->


