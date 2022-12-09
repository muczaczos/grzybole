<?php /* Template Name: KontaktPage */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grzybole
 */

get_header();
?>

	<main id="primary" class="site-main">
	
		<section class="pt-5 pb-5">
			<div class="container">
        <h1 class="text-center text-primary pb-5">Kontakt</h1>
        <div class="row">
          <div class="col col-md-8 col-sm-12 pb-5">
            <img src="<?php echo get_template_directory_uri();?>/img/slider/kontakty.svg" alt="Substraty dla grzybów" loading="lazy">
          </div>
          <div class="col col-md-4 col-sm-12 ml-5">
            <?php echo do_shortcode('[contact-form-7 id="210" title="Formularz 1"]') ?>
          </div>
        </div>
			</div>
		</section>


	</main>

<?php

get_footer();