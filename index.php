<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


	<article class="x">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<section id="movie">
			<article class="movie-container row">
				<h3><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/youtube.png" class="ic-youtube" alt="youtube"/>Consulter une présentation :</h3>
				<iframe width="100%" height="auto" src="https://www.youtube.com/embed/pPLc8RMYmRg" frameborder="0" allowfullscreen></iframe>
			</article>
		</section>
		<section id="produit-similaire">
			<article class="row products">
				<h3><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/ic-print-black.png" class="printeuse-noir" alt="printeuz"/>CES PRODUITS PEUVENT VOUS INTÉRESSER !</h3>
				<div class="large-4 small-12 columns les-produits product1">
					<a href="#">
						<div class="block-visuel">
							<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/1.jpg" class="img-printer1" alt="printer-1"/>
						</div>
					</a>
					<h4>Massicot Mohr BC 330</h4>
				</div>
				<div class="large-4 small-12 columns les-produits product2">
					<a href="#">
						<div class="block-visuel">
							<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/2.jpg"  class="img-printer2" alt="printer-2"/>
						</div>
					</a>
					<h4>Raineuse Touchline C 375</h4>
				</div>
				<div class="large-4 small-12 columns les-produits product3">
					<a href="#">
						<div class="block-visuel">
							<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/3.jpg" class="img-printer3" alt="printer-3"/>
						</div>
					</a>
					<h4>Touchline CPC 375 Duo</h4>
				</div>
			</article>
		</section>

<?php get_footer();
