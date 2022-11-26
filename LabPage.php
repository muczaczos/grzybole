<?php /* Template Name: LabPage */ ?>

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
	
		<section class="page-title-header pt-5 pb-5">
			<div class="container">
			    <h1 class="text-center text-primary">Laboratorium</h1>
                <div class="row pt-5 align-items-center">
                    <div class="col-md-6 col-sm-12 pb-5"><img class="" src="<?php echo get_template_directory_uri();?>/img/slider/lab.svg" alt="Sprzęt do mykologii" loading="lazy"></div>  
                    <div class="col-md-6 col-sm-12"><p class="text-primary align-middle">Laboratorium to moja kuchnia, w której przygotowuje jedzenie dla grzybów. Ta kategoria zawiera produkty, niezbędne w każdym mykologicznym laboratorium.</p></div>
			    </div>
            </div>
		</section>
        <section class="pt-5 pb-5 bg-white">
		    <div class="container">
                <div class="pb-5">
				    <?php echo do_shortcode('[products columns=4 category=laboratorium]'); ?>
                </div>
	         </div>
        </section>
	</main>

<?php

get_footer();