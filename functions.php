<?php
/**
 * 
 * Theme Functions
 * 
 * @package CoffeeShops
 */

	register_nav_menus(
		array('primary-menu' => 'Top Menu')
	);

	function coffee_shop_enqueue_scripts(){
		wp_enqueue_style('stylesheet', get_stylesheet_uri());
		wp_register_style('external-fonts',"https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap");
		wp_enqueue_style('external-fonts');
		wp_enqueue_script('custom-script', get_template_directory_uri() . '/script.js');

	}


	add_action('wp_enqueue_scripts','coffee_shop_enqueue_scripts');

