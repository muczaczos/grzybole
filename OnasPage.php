<?php /* Template Name: OnasPage */ ?>

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
        <h1 class="text-center text-primary pb-5">Kim Jesteśmy?</h1>
        <div class="text-center pb-5"><img class="" src="<?php echo get_template_directory_uri();?>/img/slider/grzybyonas.jpg" alt="Substraty dla grzybów" loading="lazy"></div>  
			</div>
		</section>
		<section class="pb-5 bg-white">
      <div class="container">

        <h2 class="text-center text-primary pb-2">
          Niewiadomo kiedy i niewaidomo skąd, zarodnik niesiony przez zachodni wiatr zaszczepił w nas miłość do 
          grzybow. Miłość, która zaczeła kiełkować w grzybnie ciekawości o magicznym świecie i istotach, bez 
          których nie było by lasu, świata i nie było by nas. 
        </h2>
              <p class="onas text-center">
                
                Żyjemy w czasach informacji, gdzie wiedza i informacja to dobro najbardziej wartościowe. 
                Przez ostatnie lata rozwijaliśmy pasję do świata grzybów, co bardzo pogłębiło naszą wiedzę na temat
                mykologii i uprawy grzybów w domu. 
                Teraz chcemy podzielić się tymi inspirującymi informacjami, poradami i wskazówkami krok po kroku, 
                które pomogą wam wejść w ten fascynujący świat. Nie po to, aby poprawić naszą markę, ale po to, 
                by poprawić życie ludzi. To nas napędza. I to właśnie skłoniło nas do przekształcenia naszej pasji 
                w tą stronę. Wieerzymy, że serwis grzybole.pl, będzie wkrótce pierwszym linkiem na Twojej liście 
                zakładek. 
              </p>
       
      </div>
    </section>
	</main>

<?php

get_footer();