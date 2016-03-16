<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


	<footer>
		<section class="row">
			<div class="large-4 small-12 columns foot foot1">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/logo-matrel-blanc.png" class="logo-blanc" alt="matrel-blanc"/>
			</div>
			<div class="large-4 small-12 columns foot foot2">
				<p>
					129, rue des marronniers  BP 50464 </br>
					38304 Bourgoin-Jallieu Cedex Cedex</br>
					Tél : 04 74 93 42 42 - Fax : 04 74 93 44 88
				</p>
			</div>
			<div class="large-4 small-12 columns foot foot3">
				<ul>
					<li><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/home.png" class="icone-foot" alt="home"/><a href="#">Accueil</a></li>
					<li><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/about.png" class="icone-foot" alt="about"/><a href="#">Qui sommes-nous</a></li>
					<li><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/prinnnt.png" class="icone-foot" alt="prinnnt"/><a href="#">Produits</a></li>
					<li><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/message.png" class="icone-foot" alt="message"/><a href="#">Contactez-nous</a></li>
				</ul>
			</div>



		</section>
	</footer>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
