<?php
/**
 * The template for displaying all pages
 * 
 * @subpackage Recycling Energy
 * @since 1.0
 */

get_header(); ?>

<div class="container">
	<div class="content-area my-5">
		<main id="content" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. ?>
			<div class="clearfix"></div> 
		</main>
	</div>
</div>

<?php get_footer();
