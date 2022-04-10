<?php
/**
 * The template for displaying 404 pages (not found)
 * @subpackage Recycling Energy
 * @since 1.0
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area mb-5">
		<main id="content" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'recycling-energy' ); ?></h1>
				</header>
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'recycling-energy' ); ?></p>
					<?php get_search_form(); ?>
				</div>
				<div class="home-btn my-4">
					<a href="<?php echo esc_url( home_url() ); ?>" class="py-3 px-4"><?php esc_html_e( 'GO BACK', 'recycling-energy' ); ?></a>
				</div>
			</section>
		</main>
	</div>
</div>

<?php get_footer();