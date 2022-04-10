<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_theme_mod('recycling_energy_slider_arrows') != ''){ ?>
    <section id="slider">
      <span class="design-right"></span>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'recycling_energy_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $recycling_energy_slide_post[] = $mod;
            }
          }
           if( !empty($recycling_energy_slide_post) ) :
          $args = array(
            'post_type' =>array('post'),
            'post__in' => $recycling_energy_slide_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
            <div class="carousel-caption text-center text-md-left">
              <h2 class="slider-title"><?php the_title();?></h2>
              <p class="mb-0"><?php echo esc_html(wp_trim_words(get_the_content(),'20') );?></p>
              <div class="home-btn text-center text-md-left my-4">
                <a class="py-3 px-4" href="<?php the_permalink(); ?>"><?php echo esc_html('Get Involved','recycling-energy'); ?></a>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <section id="home-mission" class="py-5">
    <div class="container">
      <?php if( get_theme_mod('recycling_energy_mission_main_title') != '' ){ ?>
        <h3 class="text-center"><?php echo esc_html(get_theme_mod('recycling_energy_mission_main_title','')); ?></h3>
        <hr>
      <?php }?>
      <?php if( get_theme_mod('recycling_energy_mission_short_title') != '' ){ ?>
        <p class="text-center"><?php echo esc_html(get_theme_mod('recycling_energy_mission_short_title','')); ?></p>
      <?php }?>
      
      <div class="owl-carousel pt-4">
        <?php
          $project_category=  get_theme_mod('recycling_energy_mission_category_setting');if($project_category){
          $page_query = new WP_Query(array( 'category_name' => esc_html($project_category ,'recycling-energy')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="box">
                <div class="row">
                  <div class="col-lg-6 col-md-6 align-self-center">
                    <div class="img-box">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 align-self-center">
                    <div class="box-content p-3">
                      <a href="<?php the_permalink(); ?>"><h4 class="mt-3"><?php the_title();?></h4></a>
                      <p><?php echo esc_html(wp_trim_words(get_the_content(),'50') );?></p>
                      <div class="box-button">
                        <a class="py-2 px-3" href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','recycling-energy');?></a>
                      </div>
                      <?php if( get_post_meta($post->ID, 'recycling_energy_mission_number', true) ) {?>
                        <div class="progress pink">
                          <div class="progress-bar" style="width:<?php echo esc_html(get_post_meta($post->ID,'recycling_energy_mission_number',true)); ?>; background:#7fb93d;">
                            <div class="progress-value"><?php echo esc_html(get_post_meta($post->ID,'recycling_energy_mission_number',true)); ?></div>
                          </div>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
          wp_reset_postdata();
        }?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>