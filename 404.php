<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grzybole
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title pt-5 text-center text-primary"><?php esc_html_e( 'Uups! Chyba zgubiłeś się w naszym grzybowym lesie :)', 'grzybole' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="text-center"><?php esc_html_e( 'To nic takiego. Po prostu użyj wyszukiwarki na górze srony lub naciśnij na grzyb, żeby wrócić do grzybolowego domu :)', 'grzybole' ); ?></p>
			</div><!-- .page-content -->
			<div class="text-center pb-5">
				<a href="<?php echo esc_url( home_url( '/' ) );?>">
					<img class="center" src="<?php echo get_template_directory_uri();?>/img/slider/404.svg" alt="..." loading="lazy">
				</a>
		  </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
