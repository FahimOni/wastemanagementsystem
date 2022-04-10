<?php
/**
 * Custom header
 */

function recycling_energy_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'recycling_energy_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 100,
		'wp-head-callback'       => 'recycling_energy_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'recycling_energy_custom_header_setup' );

if ( ! function_exists( 'recycling_energy_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see recycling_energy_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'recycling_energy_header_style' );
function recycling_energy_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .wrap_figure,.page-template-custom-home-page .wrap_figure{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'recycling-energy-style', $custom_css );
	endif;
}
endif;