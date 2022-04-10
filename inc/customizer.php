<?php
/**
 * Recycling Energy: Customizer
 *
 * @subpackage Recycling Energy
 * @since 1.0
 */

function recycling_energy_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customizer.css');

	// Add custom control.
  	require get_parent_theme_file_path( 'inc/customize/customize_toggle.php' );

	// Register the custom control type.
	$wp_customize->register_control_type( 'Recycling_Energy_Toggle_Control' );

	$wp_customize->add_section( 'recycling_energy_typography_settings', array(
		'title'       => __( 'Typography', 'recycling-energy' ),
		'priority'       => 24,
	) );

	$font_choices = array(
			'' => 'Select',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
			'Droid Sans:400,700' => 'Droid Sans',
			'Lato:400,700,400italic,700italic' => 'Lato',
			'Arvo:400,700,400italic,700italic' => 'Arvo',
			'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif',
			'PT Sans:400,700,400italic,700italic' => 'PT Sans',
			'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
			'Arimo:400,700,400italic,700italic' => 'Arimo',
			'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
			'Bitter:400,700,400italic' => 'Bitter',
			'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Roboto:400,400italic,700,700italic' => 'Roboto',
			'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
			'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
			'Roboto Slab:400,700' => 'Roboto Slab',
			'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
			'Rokkitt:400' => 'Rokkitt',
		);


	$wp_customize->add_setting( 'recycling_energy_headings_text', array(
		'sanitize_callback' => 'recycling_energy_sanitize_fonts',
	));

	$wp_customize->add_control( 'recycling_energy_headings_text', array(
		'type' => 'select',
		'description' => __('Select your suitable font for the headings.', 'recycling-energy'),
		'section' => 'recycling_energy_typography_settings',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'recycling_energy_body_text', array(
		'sanitize_callback' => 'recycling_energy_sanitize_fonts'
	));

	$wp_customize->add_control( 'recycling_energy_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your suitable font for the body.', 'recycling-energy' ),
		'section' => 'recycling_energy_typography_settings',
		'choices' => $font_choices
	) );

 	$wp_customize->add_section('recycling_energy_pro', array(
        'title'    => __('UPGRADE RECYCLING ENERGY PREMIUM', 'recycling-energy'),
        'priority' => 1,
    ));

    $wp_customize->add_setting('recycling_energy_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Recycling_Energy_Pro_Control($wp_customize, 'recycling_energy_pro', array(
        'label'    => __('Recycling Energy PREMIUM', 'recycling-energy'),
        'section'  => 'recycling_energy_pro',
        'settings' => 'recycling_energy_pro',
        'priority' => 1,
    )));

    // Theme General Settings
    $wp_customize->add_section('recycling_energy_theme_settings',array(
        'title' => __('Theme General Settings', 'recycling-energy'),
        'priority' => 1
    ) );

    $wp_customize->add_setting( 'recycling_energy_sticky_header', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_sticky_header', array(
		'label'       => esc_html__( 'Show Sticky Header', 'recycling-energy' ),
		'section'     => 'recycling_energy_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_sticky_header',
	) ) );

    //theme width
	$wp_customize->add_section('recycling_energy_theme_width_settings',array(
        'title' => __('Theme Width Option', 'recycling-energy'),
    ) );

	$wp_customize->add_setting('recycling_energy_width_options',array(
        'default' => 'full_width',
        'sanitize_callback' => 'recycling_energy_sanitize_choices'
	));
	$wp_customize->add_control('recycling_energy_width_options',array(
        'type' => 'select',
        'label' => __('Theme Width Option','recycling-energy'),
        'section' => 'recycling_energy_theme_width_settings',
        'choices' => array(
            'full_width' => __('Fullwidth','recycling-energy'),
            'Container' => __('Container','recycling-energy'),
            'container_fluid' => __('Container Fluid','recycling-energy'),
        ),
	) );

	// Post Layouts
    $wp_customize->add_section('recycling_energy_layout',array(
        'title' => __('Post Layout', 'recycling-energy'),
        'description' => __( 'Change the post layout from below options', 'recycling-energy' ),
        'priority' => 1
    ) );

	$wp_customize->add_setting( 'recycling_energy_post_sidebar', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_post_sidebar', array(
		'label'       => esc_html__( 'Show Fullwidth', 'recycling-energy' ),
		'section'     => 'recycling_energy_layout',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_post_sidebar',
	) ) );

	$wp_customize->add_setting( 'recycling_energy_single_post_sidebar', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_single_post_sidebar', array(
		'label'       => esc_html__( 'Show Single Post Fullwidth', 'recycling-energy' ),
		'section'     => 'recycling_energy_layout',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_single_post_sidebar',
	) ) );

    $wp_customize->add_setting('recycling_energy_post_option',array(
		'default' => 'simple_post',
		'sanitize_callback' => 'recycling_energy_sanitize_select'
	));
	$wp_customize->add_control('recycling_energy_post_option',array(
		'label' => esc_html__('Select Layout','recycling-energy'),
		'section' => 'recycling_energy_layout',
		'setting' => 'recycling_energy_post_option',
		'type' => 'radio',
        'choices' => array(
            'simple_post' => __('Simple Post','recycling-energy'),
            'grid_post' => __('Grid Post','recycling-energy'),
        ),
	));

    $wp_customize->add_setting('recycling_energy_grid_column',array(
		'default' => '3_column',
		'sanitize_callback' => 'recycling_energy_sanitize_select'
	));
	$wp_customize->add_control('recycling_energy_grid_column',array(
		'label' => esc_html__('Grid Post Per Row','recycling-energy'),
		'section' => 'recycling_energy_layout',
		'setting' => 'recycling_energy_grid_column',
		'type' => 'radio',
        'choices' => array(
            '1_column' => __('1','recycling-energy'),
            '2_column' => __('2','recycling-energy'),
            '3_column' => __('3','recycling-energy'),
            '4_column' => __('4','recycling-energy'),
            '5_column' => __('6','recycling-energy'),
        ),
	));

	$wp_customize->add_setting( 'recycling_energy_date', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_date', array(
		'label'       => esc_html__( 'Hide Date', 'recycling-energy' ),
		'section'     => 'recycling_energy_layout',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_date',
	) ) );

	$wp_customize->add_setting( 'recycling_energy_admin', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_admin', array(
		'label'       => esc_html__( 'Hide Author/Admin', 'recycling-energy' ),
		'section'     => 'recycling_energy_layout',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_admin',
	) ) );

	$wp_customize->add_setting( 'recycling_energy_comment', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_comment', array(
		'label'       => esc_html__( 'Hide Comment', 'recycling-energy' ),
		'section'     => 'recycling_energy_layout',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_comment',
	) ) );

	// Top Header
    $wp_customize->add_section('recycling_energy_top',array(
        'title' => __('Top Header', 'recycling-energy'),
        'priority' => 1
    ) );

    $wp_customize->add_setting('recycling_energy_top_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_top_text',array(
		'label' => esc_html__('Add Topbar Text','recycling-energy'),
		'section' => 'recycling_energy_top',
		'setting' => 'recycling_energy_top_text',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_top_text_btn1',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_top_text_btn1',array(
		'label' => esc_html__('Add Button Text','recycling-energy'),
		'section' => 'recycling_energy_top',
		'setting' => 'recycling_energy_top_text_btn1',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_top_link_btn1',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_top_link_btn1',array(
		'label' => esc_html__('Add Button URL','recycling-energy'),
		'section' => 'recycling_energy_top',
		'setting' => 'recycling_energy_top_link_btn1',
		'type'    => 'url'
	));

    $wp_customize->add_setting('recycling_energy_top_text_btn2',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_top_text_btn2',array(
		'label' => esc_html__('Add Button Text','recycling-energy'),
		'section' => 'recycling_energy_top',
		'setting' => 'recycling_energy_top_text_btn2',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_top_link_btn2',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_top_link_btn2',array(
		'label' => esc_html__('Add Button URL','recycling-energy'),
		'section' => 'recycling_energy_top',
		'setting' => 'recycling_energy_top_link_btn2',
		'type'    => 'url'
	));

	// Header
    $wp_customize->add_section('recycling_energy_header',array(
        'title' => __('Header', 'recycling-energy'),
        'priority' => 1
    ) );

    $wp_customize->add_setting('recycling_energy_email_address_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_email_address_text',array(
		'label' => esc_html__('Add Email Address Text','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_email_address_text',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email'
	)); 
	$wp_customize->add_control('recycling_energy_email_address',array(
		'label' => esc_html__('Add Email Address','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_email_address',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_call_number_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_call_number_text',array(
		'label' => esc_html__('Add Phone Number Text','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_call_number_text',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_call_number',array(
		'default' => '',
		'sanitize_callback' => 'recycling_energy_sanitize_phone_number'
	)); 
	$wp_customize->add_control('recycling_energy_call_number',array(
		'label' => esc_html__('Add Phone Number','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_call_number',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_location_address_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_location_address_text',array(
		'label' => esc_html__('Add Location Text','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_location_address_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('recycling_energy_location_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_location_address',array(
		'label' => esc_html__('Add Location','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_location_address',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_talk_btn_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('recycling_energy_talk_btn_text',array(
		'label' => esc_html__('Add Button Text','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_talk_btn_text',
		'type'    => 'text'
	));

    $wp_customize->add_setting('recycling_energy_talk_btn_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_talk_btn_link',array(
		'label' => esc_html__('Add Button URL','recycling-energy'),
		'section' => 'recycling_energy_header',
		'setting' => 'recycling_energy_talk_btn_link',
		'type'    => 'url'
	));

	// Social Media
    $wp_customize->add_section('recycling_energy_urls',array(
        'title' => __('Social Media', 'recycling-energy'),
        'description' => __( 'Add social media links in the below feilds', 'recycling-energy' ),
        'priority' => 3
    ) );
    
	$wp_customize->add_setting('recycling_energy_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_facebook',array(
		'label' => esc_html__('Facebook URL','recycling-energy'),
		'section' => 'recycling_energy_urls',
		'setting' => 'recycling_energy_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('recycling_energy_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_twitter',array(
		'label' => esc_html__('Twitter URL','recycling-energy'),
		'section' => 'recycling_energy_urls',
		'setting' => 'recycling_energy_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('recycling_energy_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_youtube',array(
		'label' => esc_html__('Youtube URL','recycling-energy'),
		'section' => 'recycling_energy_urls',
		'setting' => 'recycling_energy_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('recycling_energy_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('recycling_energy_instagram',array(
		'label' => esc_html__('Instagram URL','recycling-energy'),
		'section' => 'recycling_energy_urls',
		'setting' => 'recycling_energy_instagram',
		'type'    => 'url'
	));

    //Slider
	$wp_customize->add_section( 'recycling_energy_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'recycling-energy' ),
    	'description' => __('Slider Image Dimension ( 1600px x 650px )','recycling-energy'),
		'priority'   => 3,
	) );

	$wp_customize->add_setting( 'recycling_energy_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'recycling_energy_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Recycling_Energy_Toggle_Control( $wp_customize, 'recycling_energy_slider_arrows', array(
		'label'       => esc_html__( 'Check to show slider', 'recycling-energy' ),
		'section'     => 'recycling_energy_slider_section',
		'type'        => 'toggle',
		'settings'    => 'recycling_energy_slider_arrows',
	) ) );

	$args = array('numberposts' => -1); 
	$post_list = get_posts($args);
	$i = 0;	
	$pst_sls[]= __('Select','recycling-energy');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('recycling_energy_post_setting'.$i,array(
			'sanitize_callback' => 'recycling_energy_sanitize_select',
		));
		$wp_customize->add_control('recycling_energy_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','recycling-energy'),
			'section' => 'recycling_energy_slider_section',
		));
	}
	wp_reset_postdata();

	// Mission Section
	$wp_customize->add_section( 'recycling_energy_mission_section' , array(
    	'title'      => __( 'Mission Section Settings', 'recycling-energy' ),
		'priority'   => 4,
	) );

	$wp_customize->add_setting('recycling_energy_mission_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('recycling_energy_mission_main_title',array(
		'label'	=> esc_html__('Section Main Title','recycling-energy'),
		'section'	=> 'recycling_energy_mission_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('recycling_energy_mission_short_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('recycling_energy_mission_short_title',array(
		'label'	=> esc_html__('Section Short Title ','recycling-energy'),
		'section'	=> 'recycling_energy_mission_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('recycling_energy_mission_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'recycling_energy_sanitize_select',
	));
	$wp_customize->add_control('recycling_energy_mission_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display mission','recycling-energy'),
		'section' => 'recycling_energy_mission_section',
	));

	//Footer
    $wp_customize->add_section( 'recycling_energy_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'recycling-energy' ),
    	'priority' => 6
	) );

    $wp_customize->add_setting('recycling_energy_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('recycling_energy_footer_text',array(
		'label'	=> esc_html__('Copyright Text','recycling-energy'),
		'section'	=> 'recycling_energy_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'recycling_energy_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'recycling_energy_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'recycling_energy_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'recycling_energy_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'recycling-energy' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'recycling-energy' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'recycling_energy_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'recycling_energy_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'recycling_energy_customize_register' );

function recycling_energy_customize_partial_blogname() {
	bloginfo( 'name' );
}
function recycling_energy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function recycling_energy_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
function recycling_energy_is_view_with_layout_option() {
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

define('RECYCLING_ENERGY_PRO_LINK',__('https://www.ovationthemes.com/wordpress/recycling-energy-wordpress-theme/','recycling-energy'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Recycling_Energy_Pro_Control')):
    class Recycling_Energy_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( RECYCLING_ENERGY_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE RECYCLING ENERGY PREMIUM','recycling-energy');?> </a>
	        </div>
            <div class="col-md">
                <img class="recycling_energy_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('Recycling Energy PREMIUM - Features', 'recycling-energy'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'recycling-energy');?> </li>
                </ul>
        	</div>
		    <div class="col-md upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( RECYCLING_ENERGY_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE RECYCLING ENERGY PREMIUM','recycling-energy');?> </a>
		    </div>
        </label>
    <?php } }
endif;

function recycling_energy_custom_number() {
    add_meta_box( 'bn_meta', __( 'Our Mission Section', 'recycling-energy' ), 'recycling_energy_add_meta_number', 'post', 'normal', 'high' );
}

if (is_admin()){
  add_action('admin_menu', 'recycling_energy_custom_number');
}

function recycling_energy_add_meta_number( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'recycling_energy_number_mission_meta' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $mission_meta = get_post_meta( $post->ID, 'recycling_energy_mission_number', true );
    ?>
    <table id="list">
        <tbody id="the-list" data-wp-lists="list:meta">
            <tr id="meta-8">
                <td class="left">
                    <?php esc_html_e( 'Mission Percentage Field', 'recycling-energy' )?>
                </td>
                <td class="left">
                    <input type="text" name="recycling_energy_mission_number" id="recycling_energy_mission_number" value="<?php echo esc_html($mission_meta); ?>" />
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}

function recycling_energy_number_save( $post_id ) {
    if (!isset($_POST['recycling_energy_number_mission_meta']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['recycling_energy_number_mission_meta']) ), basename(__FILE__))) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if( isset( $_POST[ 'recycling_energy_mission_number' ] ) ) {
        update_post_meta( $post_id, 'recycling_energy_mission_number', strip_tags( wp_unslash( $_POST[ 'recycling_energy_mission_number' ]) ) );
    }
}
add_action( 'save_post', 'recycling_energy_number_save' );