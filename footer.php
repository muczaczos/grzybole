<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grzybole
 */

?>

	<footer id="colophon" class="site-footer">

	<div class="bg-dark text-white pt-5 pb-5">
		<div class="container">
			<div class="row">

				<div class="col-lg-2 col-sm-6">
					<?php dynamic_sidebar('footer-widget-col-one'); ?>
				</div>

				<div class="col-lg-2 col-sm-6">
				<?php dynamic_sidebar('footer-widget-col-two'); ?>
				</div>

				<div class="col-lg-2 col-sm-6">
					<?php dynamic_sidebar('footer-widget-col-four'); ?>
				</div>

				<div class="col-md-4 col-sm-12  ms-auto">
				<?php dynamic_sidebar('footer-widget-col-three'); ?>
				</div>

			</div>
		</div>
	</div>


	<div class="container pt-2 pb-2">
		<div class="row d-flex align-items-center">
			<div class="col">
				<p>&copy; <?php bloginfo('name');?> <?php echo date('Y');?> / Created by <a href="http://www.google.pl" target="_blank">Wąż Łeb Studio</a> </p>
			</div>
			<div class="col h-50 d-inline-block text-end">
				<img src="<?php echo get_template_directory_uri();?>/img/slider/visa.svg" alt="..." class="img-fluid" loading="lazy">
				<img src="<?php echo get_template_directory_uri();?>/img/slider/mastercard.svg" alt="..." class="img-fluid" loading="lazy">
			</div>
		</div>
	</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
