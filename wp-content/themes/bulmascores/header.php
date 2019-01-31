<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Bulmascores
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-j8y0ITrvFafF4EkV1mPW0BKm6dp3c+J9Fky22Man50Ofxo2wNe5pT1oZejDH9/Dt" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Navbar Menu -->
	<header id="masthead" class="site-header">
		<nav class="navbar is-transparent">
			<div class="container">
				<div class="navbar-brand">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else { ?>
						<a class="navbar-item" href="<?php echo esc_url_raw( home_url() );?>">
							<h1><?php bloginfo( 'name' ); ?></h1>
						</a>
					<?php } ?>

					<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div><!-- .navbar-brand -->

				<div id="navbarExampleTransparentExample" class="navbar-menu">
					<div class="navbar-start">
						<?php wp_nav_menu(array(
							'theme-location' => 'menu-1', //change it according to your register_nav_menus() function
							'depth' => 2,
							'container' => 'navbar-start',
							'items_wrap' => '%3$s',
							'walker' => new Bulma_Walker(),
						));
						?>
					</div>

					<div class="navbar-end">
						<div class="navbar-item">
							<div id="social-icons" class="field is-grouped">
								<a class="navbar-item" target="_blank" href="//www.facebook.com/Hvaskjeradera/"><i class="fab fa-facebook-f"></i></a>
								<a class="navbar-item" target="_blank" href="//www.linkedin.com/company/aderaas/"><i class="fab fa-linkedin-in"></i></a>
							</div><!-- .field -->
						</div><!-- .navbar-item -->
					</div><!-- .navbar-end -->
				</div>


			</div><!-- .container -->
		</nav>

	</header><!-- #masthead -->
