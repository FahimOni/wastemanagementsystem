<?php 

	/*---------------------------Width -------------------*/

	$recycling_energy_custom_style= "";
	
	$recycling_energy_theme_width = get_theme_mod( 'recycling_energy_width_options','full_width');

    if($recycling_energy_theme_width == 'full_width'){

		$recycling_energy_custom_style .='body{';

			$recycling_energy_custom_style .='max-width: 100%;';

		$recycling_energy_custom_style .='}';

	}else if($recycling_energy_theme_width == 'Container'){

		$recycling_energy_custom_style .='body{';

			$recycling_energy_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$recycling_energy_custom_style .='}';

	}else if($recycling_energy_theme_width == 'container_fluid'){

		$recycling_energy_custom_style .='body{';

			$recycling_energy_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$recycling_energy_custom_style .='}';
	}

	//---------------------------------------------------------------------------------------------

	$recycling_energy_sticky_header = get_theme_mod('recycling_energy_sticky_header');

	if($recycling_energy_sticky_header != true){

		$recycling_energy_custom_style .='.menu_header.fixed{';

			$recycling_energy_custom_style .='position: static;';
			
		$recycling_energy_custom_style .='}';
	}