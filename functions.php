<?php 

class childtheme{

	public function constant(){

		add_action('wp_enqueue_scripts', [$this,'astra_child_enqueue_styles'] );

	}

	public function astra_child_enqueue_styles() {
	    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
	    wp_enqueue_style('astra-child-style', get_stylesheet_uri(), array('astra-parent-style'));
	}
	


}

new childtheme();