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

	<div class="bg-primary text-white pt-5 pb-5">
		<div class="container">
			<div class="row">

				<div class="col-2">
					About
				</div>

				<div class="col-2">
					Company
				</div>

				<div class="col-md-4 ms-auto">
					Keep in Touch
				</div>

			</div>
		</div>
	</div>


	<div class="container pt-2 pb-2">
		<div class="row d-flex align-items-center">
			<div class="col">
				<p>&copy; <?php bloginfo('name');?> <?php echo date('Y');?> / Created by <a href="http://www.google.pl" target="_blank">Google</a> </p>
			</div>
			<div class="col h-25 d-inline-block text-end">
				<img src="<?php echo get_template_directory_uri();?>/img/slider/slider-3.jpg" alt="..." class="img-fluid" loading="lazy">
			</div>
		</div>
	</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
