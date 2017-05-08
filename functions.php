<?php
	//Theme Resources
	function brandscape_theme_resources() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('brandscape', get_template_directory_uri().'/css/brandscape.css');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		wp_enqueue_script('script', get_template_directory_uri().'/js/theme.js', array('jquery'));
		wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/ed693e67dd.js');
	}

	add_action('wp_enqueue_scripts', 'brandscape_theme_resources');
	
	//Theme setup
	function brandscape_theme_setup() {
		//Navigation Menus
		register_nav_menus(array(
			'primary' => __( 'Primary Menu')
		));
		//Featured Image
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'brandscape_theme_setup');	
?>
