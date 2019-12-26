<?php

if(!function_exists('arbi_scripts')) {
	function arbi_scripts() {

		// Styles
		wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:300&display=swap', null, '1.0.0', 'all');

		wp_register_style('hamburger', 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css', null, '1.0.0', 'all');

		wp_register_style('sweetbox', get_template_directory_uri() . '/css/sweetbox.min.css', null, '1.0.0', 'all');

		wp_register_style('style', get_stylesheet_uri(), 'fonts', '1.0.0', 'all');

		wp_enqueue_style('fonts');
		wp_enqueue_style('hamburger');
		wp_enqueue_style('sweetbox');
		wp_enqueue_style('style');

		// Scripts
		wp_register_script('fontawesome', 'https://kit.fontawesome.com/3bd84f9f96.js', null, '1.0.0', true);

		wp_register_script('sweetbox', get_template_directory_uri() . '/js/sweetbox.min.js', null, '1.0.0', true);

		wp_register_script('animatescroll', get_template_directory_uri() . '/js/animatescroll.min.js', array('jquery'), '1.0.0', true);

		wp_register_script('app', get_template_directory_uri() . '/js/app.min.js', array('jquery', 'sweetbox'), '1.0.0', true);

		wp_enqueue_script('jquery');
		wp_enqueue_script('fontawesome');
		wp_enqueue_script('animatescroll');
		wp_enqueue_script('sweetbox');
		wp_enqueue_script('app');
	}
}

add_action('init', 'arbi_scripts');


// Obtener imágenes estáticas

function getImage($name) {
	return get_template_directory_uri() . '/images/' . $name;
}

// Obtener íconos de servicios

function getIcon($campos_adicionales) {
	return $campos_adicionales['icono'][0];
}

?>