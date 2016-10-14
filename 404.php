<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Whoops! You caught our team laying down on the job.', 'superiocity' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Sorry, the page you're looking for doesn't exist.</p>
                    <img src="<?php echo get_template_directory_uri() ?>/images/dog.jpg" width="689" height="433" alt="dog laying down" >
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
