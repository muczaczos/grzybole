<?php /* Template Name: GrzybniaPage */ ?>

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
	
		<section class="categories pt-5 pb-5">
			<div class="container">
			  <h1 class="text-center text-primary">Grzybnia</h1>
			  <div class="row pt-5 align-items-center">
        		<div class="col-md-6 col-sm-12 pb-5"><img class="" src="<?php echo get_template_directory_uri();?>/img/slider/grzybnia.svg" alt="sklep z grzybami" loading="lazy"></div>  
        		<div class="col-md-6 col-sm-12 cat-text"><p class="text-primary cat-text">Czy wiesz, że sposób odżywiania grzybów jest bardziej zbliżony do sposobu odżywiania zwierząt niż roślin? Grzybki nie mają zdolności fotosyntezy jak rośliny. Grzyby wydzielają na zewnątrz enzymy trawienne i wchłaniają rozłożone związki organiczne. W tym dziale znajdziesz jedzenie dla Twoich grzybów, żeby nigdy nie były już głodne. </p></div>
			</div>
			</div>
		</section>
	</main>

<?php

get_footer();