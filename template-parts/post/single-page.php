<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Recycling Energy
 * @since 1.0
 */
?>

<div id="single-post-section" class="single-post-page entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage">
	        <div class="padd-box">
	        	<h2><?php the_title();?></h2>
            	<?php the_post_thumbnail(); ?>
        		<div class="date-box my-3">
        			<?php if( get_theme_mod('recycling_energy_date',true) != ''){ ?>
        				<span class="mr-2"><i class="far fa-calendar-alt mr-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
        			<?php } ?>
        			<?php if( get_theme_mod('recycling_energy_admin',true) != ''){ ?>
        				<span class="entry-author mr-2"><i class="far fa-user mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
        			<?php }?>
        			<?php if( get_theme_mod('recycling_energy_comment',true) != ''){ ?>
      					<span class="entry-comments"><i class="fas fa-comments mr-2"></i> <?php comments_number( __('0 Comments','recycling-energy'), __('0 Comments','recycling-energy'), __('% Comments','recycling-energy')); ?></span>
      				<?php }?>
    			</div>
            	<p><?php the_content(); ?></p>
	        </div>
	      	<div class="clearfix"></div> 
	  	</div>
	</div>
</div>