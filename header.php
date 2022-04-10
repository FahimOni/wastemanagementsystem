<?php
/**
 * The header for our theme
 *
 * @subpackage Recycling Energy
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'recycling-energy' ); ?></a>
	
	<div id="page" class="site">
		<div id="header">
			<div class="top_bar py-2 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
							<?php if( get_theme_mod('recycling_energy_top_text') != '' ){ ?>
								<p class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_top_text','')); ?></p>
							<?php }?>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
							<?php if( get_theme_mod('recycling_energy_top_text_btn1') != '' || get_theme_mod('recycling_energy_top_link_btn1') != '' ){ ?>
								<a href="<?php echo esc_url(get_theme_mod('recycling_energy_top_link_btn1','')); ?>"><?php echo esc_html(get_theme_mod('recycling_energy_top_text_btn1','')); ?></a>
							<?php }?>
							<?php if( get_theme_mod('recycling_energy_top_text_btn2') != '' || get_theme_mod('recycling_energy_top_link_btn2') != '' ){ ?><span>|</span>
								<a href="<?php echo esc_url(get_theme_mod('recycling_energy_top_link_btn2','')); ?>"><?php echo esc_html(get_theme_mod('recycling_energy_top_text_btn2','')); ?></a>
							<?php }?>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
							<div class="links text-center text-md-right">
								<?php if( get_theme_mod('recycling_energy_facebook') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('recycling_energy_facebook','')); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('recycling_energy_twitter') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('recycling_energy_twitter','')); ?>"><i class="fab fa-twitter mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('recycling_energy_youtube') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('recycling_energy_youtube','')); ?>"><i class="fab fa-youtube mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('recycling_energy_instagram') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('recycling_energy_instagram','')); ?>"><i class="fab fa-instagram mr-3"></i></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contact-header py-3 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-12 col-sm-12 align-self-center mb-2 mb-md-0">
							<div class="logo py-3 py-lg-0 text-md-center text-lg-left">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $blog_info = get_bloginfo( 'name' ); ?>
					                <?php if ( ! empty( $blog_info ) ) : ?>
					                  	<?php if ( is_front_page() && is_home() ) : ?>
					                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					                  	<?php else : ?>
				                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				                  		<?php endif; ?>
					                <?php endif; ?>
					                <?php
				                  		$description = get_bloginfo( 'description', 'display' );
					                  	if ( $description || is_customize_preview() ) :
					                ?>
				                  	<p class="site-description">
				                    	<?php echo esc_html($description); ?>
				                  	</p>
				              	<?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 align-self-center mb-2 mb-md-0">
							<div class="row">
								<?php if( get_theme_mod('recycling_energy_email_address') != '' || get_theme_mod('recycling_energy_email_address_text') != '' ){ ?>
									<div class="col-lg-2 col-md-2 col-sm-3 align-self-center">
										<i class="fas fa-envelope-open"></i>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-9 align-self-center">
										<h6 class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_email_address_text','')); ?></h6>
										<p class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_email_address','')); ?></p>
									</div>
								<?php }?>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 align-self-center mb-2 mb-md-0">
							<div class="row">
								<?php if( get_theme_mod('recycling_energy_call_number') != '' || get_theme_mod('recycling_energy_call_number_text') != '' ){ ?>
									<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
										<i class="fas fa-phone-volume"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
										<h6 class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_call_number_text','')); ?></h6>
										<p class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_call_number','')); ?></p>
									</div>
								<?php }?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
							<div class="row">
								<?php if( get_theme_mod('recycling_energy_location_address') != '' || get_theme_mod('recycling_energy_location_address_text') != '' ){ ?>
									<div class="col-lg-2 col-md-2 col-sm-3 align-self-center">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-9 align-self-center">
										<h6 class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_location_address_text','')); ?></h6>
										<p class="mb-0"><?php echo esc_html(get_theme_mod('recycling_energy_location_address','')); ?></p>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap_figure">
				<div class="menu_header py-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9 col-sm-6 align-self-center">
								<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu text-md-right">
										<button onclick="recycling_energy_gb_Menu_open()" class="gb_toggle p-2"><i class="fas fa-ellipsis-h"></i><p class="mb-0"><?php esc_html_e('Menu','recycling-energy'); ?></p></button>
									</div>
								<?php }?>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 align-self-center">
								<?php if( get_theme_mod('recycling_energy_talk_btn_link') != '' || get_theme_mod('recycling_energy_talk_btn_text') != ''){ ?>
									<p class="chat_btn mb-0 text-center text-md-right"><a href="<?php echo esc_url(get_theme_mod('recycling_energy_talk_btn_link','')); ?>"><?php echo esc_html(get_theme_mod('recycling_energy_talk_btn_text','')); ?></i></a></p>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>