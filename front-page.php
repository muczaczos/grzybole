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

		<section class="container pb-5 pt-4">
			<div id="carouselExampleDark" class="carousel carousel-white slide overflow-hidden rounded" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<a href="https://www.google.pl"><img src="<?php echo get_template_directory_uri();?>/img/slider/slider-1.jpg" class="d-block w-100" alt="..."></a>
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Some representative placeholder content for the first slide.</p>
						</div>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slider-2.jpg" class="d-block w-100" alt="..."></a>
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Some representative placeholder content for the second slide.</p>
						</div>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" class="d-block w-100" alt="..."></a>
						<div class="carousel-caption d-none d-md-block">
							<h5>Third slide label</h5>
							<p>Some representative placeholder content for the third slide.</p>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container popular-products">
			<h1 class="text-center pt-5">Popularne Produkty</h1>
			<p class="text-center">Oferuje produkty, które pomogą w utrzymaniu zarówno Twojego<br> zdrowia, jak i zdrowia Twoich grzybków.</p>

			<div class="pb-5 pt-5">
				<?php echo do_shortcode('[products columns=4 limit=4]'); ?>
			</div>
		</section>
	
		<section class="page-title-header pt-5 pb-5">
			<div class="container">
				
				<h1 class="text-center pt-5">Kategorie</h1>
				<p class="text-center">Produkty posegregowałem w kategorie.<br>Ułatwią Ci one odnaleźć się w labiryncie grzybni.</p>
			

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
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/suplementy" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-1.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-fourth bg-opacity-75 text-white">Suplementy</h2>
						</a>
					</div>
				</div>

				<div class="row">

					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/filtry" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-fifth bg-opacity-75 text-white">Filtry</h2>
						</a>
					</div>

					<div class="categories__col col-md-8 col-sm-12 mb-3">
						<a href="<?php echo get_permalink( wc_get_page_id( 'home' ) );?>/grzybnia" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<div class="bg-primary bg-opacity-75 position-absolute top-0 bottom-0 end-0 start-0" style="z-index: 1;"></div>
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" alt="..." loading="lazy">
							<h2 class="position-absolute top-50 start-50 translate-middle text-white" style="z-index: 2;">---- Grzybnia ---- <br>Promocja -20%!!!</h2>
						</a>
					</div>

				</div>
			</div>
		</section>

		<section class="container pt-5 special-offer">
			<h1 class="text-center pt-5">Oferta Specjalna</h1>
			<p class="text-center">W specjalnej ofercie wysokiej jajkości grzybnia<br> - minus 20 % ceny.</p>

			<div class="pb-5 pt-5">
				<?php echo do_shortcode('[sale_products columns=4 limit=4]'); ?>
			</div>
		</section>
















	</main>

<?php

get_footer();