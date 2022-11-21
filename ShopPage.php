<?php /* Template Name: ShopPage */ ?>

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
			  <h1 class="text-center text-primary">Nasz sklep</h1>
				<p class="text-center text-primary">Zapraszam Cię do naszego Myko Marketu</p>
				<div class="text-center pt-5">
					<img class="" src="<?php echo get_template_directory_uri();?>/img/slider/sklep.svg" alt="sklep z grzybami" loading="lazy">
				</div>
				
				<div class="row pt-5">

					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/substraty" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-secondary bg-opacity-75 text-white">Substraty</h2>
						</a>
					</div>

					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/laboratorium" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-2.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-third bg-opacity-75 text-white">Laboratorium</h2>
						</a>
					</div>

					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/grzybowe/suplementy" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-1.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-fourth bg-opacity-75 text-white">Suplementy</h2>
						</a>
					</div>
				</div>

				<div class="row">

					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/grzybowe/filtry" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-fifth bg-opacity-75 text-white">Filtry</h2>
						</a>
					</div>

					<div class="categories__col col-md-8 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/grzybowe/kultury" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<div class="bg-primary bg-opacity-75 position-absolute top-0 bottom-0 end-0 start-0" style="z-index: 1;"></div>
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute top-50 start-50 translate-middle text-white" style="z-index: 2;">---- Grzybnia ---- <br>Promocja -20%!!!</h2>
						</a>
					</div>

				</div>
			</div>
		</section>
	</main>

<?php

get_footer();