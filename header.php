<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:800,600,700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<section id="header-top" class="row">
			<div class="large-6 small-12 columns logo-block">
				<a href="#" class="logo"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/logo-matrel1.png" class="the-logo" alt="logo-matrels"/></a></li>
				<h1>
					Équipements et systèmes pour la finition et la présentation des documents
				</h1>
			</div>

			<div class="large-6 small-12 columns cata">
				<a href="#" class="catalogue-dell"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/dell.png" alt="icone-dell" />Télécharger notre catalogue</a>
			</div>
		</section>
		<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  			<button class="menu-icon" type="button" data-toggle></button>
  			<div class="title-bar-title">Menu</div>
		</div>
		<div class="top-bar" id="example-menu">
			<nav class="row">
			  <div class="top-bar-left">
			    <ul class="dropdown menu" data-dropdown-menu>
				  <li><a href="#">Accueil</a></li>
				  <li><a href="#">Qui sommes-nous</a></li>
			      <li>
			        <a href="#">Nos produits</a>
			        <ul class="menu vertical">
			          <li><a href="#">One</a></li>
			          <li><a href="#">Two</a></li>
			          <li><a href="#">Three</a></li>
			        </ul>
			      </li>
				  <li><a href="#">contact</a></li>
				  <li><a href="#">documentation</a></li>
				  <li><a href="#">catalogue général</a></li>
			    </ul>
		  	</div>
		  </nav>
		</div>
	</header>


		<?php do_action( 'foundationpress_after_header' );
