<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<section id="fille-dariane" class="row">
	<ul class="breadcrumbs">
	  <li class"standard sire"><a href="#">Accueil</a></li>
	  <li class"standard sire"><a href="#">Nos produits</a></li>
	  <li class="unavailable"><a href="#">Raineuse-plieuse touchline cf 375</a></li>
  </ul>
</section>
<section id="produit" class="row">
	<article class="large-4 small-12 columns visu-produit">
		<?php the_content(); ?>
	</article>
	<article class="large-8 small-12 columns texte-produit">
		<div class="titre-produit">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/ic-print-black.png" class="ic-print" alt="printer icone"/>
			<h2><?php the_title(); ?></h2>
			<?php echo $value = get_field("description");?>
		</div>
		<div class="bouton2">
			<a href="<?php echo $value = get_field("telecharger");?>" class="contact ic"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/fleche.png" class="ic-bouton" alt="fleche"/>Télécharger la fiche produit</a>
			<a href="<?php echo $value = get_field("contact");?>" class="fiche ic"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/mail.png" class="ic-bouton" alt="email"/>Nous contacter</a>
		</div>
	</article>
</section>
<section class="block-titre-caracteristique">
	<article class="block-titre-classique row">
		<h3><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/img/syteme.png" class="ic-systeme" alt="systeme"/>Caractéristiques :</h3>
	</article>
</section>
<section class="caracteristique-liste row">
	<article class="large-4 small-12 columns caracteristique caracteristique1 ">
		<?php echo $value = get_field("caracteristique_1");?>
	</article>
	<article class="large-4 small-12 columns caractéristique caracteristique2 ">
		<?php echo $value = get_field("caracteristique_2");?>
	</article>
	<article class="large-4 small-12 columns caractéristique caracteristique3 ">
		<?php echo $value = get_field("caracteristique_3");?>
	</article>
</section>

</div>
