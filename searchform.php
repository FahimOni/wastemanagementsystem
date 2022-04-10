<?php
/**
 * Template for displaying search forms in Recycling Energy
 *
 * @subpackage Recycling Energy
 * @since 1.0
 */
?>

<?php $recycling_energy_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'recycling-energy' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'recycling-energy' ); ?></button>
</form>