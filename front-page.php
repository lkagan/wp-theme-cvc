<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
		<section class="container-full intro">
			<div class="description">
				Lower bids & less stress are what you can expect from a nationwide turnkey provider of interior / exterior construction, renovation and design.  From chain hotels to premium resorts, our award-winning team surpasses expectations on projects ranging from small redesigns to sustainable construction and renovation.
			</div>
			<div class="servicing">
				<h4>Servicing</h4>
				<ul>
					<li>Boutique Resorts</li>
					<li>Timeshares</li>
					<li>Premium Resorts</li>
					<li>Chain hotels</li>
				</ul>
			</div>
		</section>

		<section class="container-full brands">
			<h3>Working With All Brands</h3>
			<div class="logos">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
				<img src="http://placehold.it/150x75">
			</div>
		</section>

		<section class="container-full services">
			<h3>Services</h3>
			<div class="construction">Construction</div>
			<div class="design">Design</div>
			<div class="ffe-purchasing">FF&amp;E Purchasing</div>
			<div class="arch-interiors">Architectual Interiors</div>
			<div class="renovation">Renovation</div>
		</section>
		
		<section class="container-full awards">
			<h3>An Award Winning Team On Your Side</h3>
			<img src="http://placehold.it/150x75">
			<img src="http://placehold.it/150x75">
			<img src="http://placehold.it/150x75">
			<img src="http://placehold.it/150x75">
		</section>
			
		<section class="container-full testimonials">
			"I am extremely pleased with their work, abilities, and talents "<br>
			- Justin Smith: Prestige Hotels
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
