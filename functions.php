<?php 

class ChildTheme {

    // Constructor method to add the action hook
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'astra_child_enqueue_styles']);
    }

    // Enqueue parent and child styles
    public function astra_child_enqueue_styles() {
        // Enqueue the parent theme stylesheet
        wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
        
        // Enqueue the child theme's stylesheet
        wp_enqueue_style('astra-child-style', get_stylesheet_uri(), array('astra-parent-style'));
        
        // Enqueue additional custom child theme stylesheet
        wp_enqueue_style('childtheme', get_stylesheet_directory_uri() . '/assets/css/style.css', array('astra-child-style'), '1.0.0', 'all');

        wp_enqueue_style('childtheme-boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', array('astra-child-style'), '1.0.0', 'all');

        wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.0.0', true);

        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array('jquery'), '1.0.0', true);

         // Enqueue custom JavaScript file
        wp_enqueue_script('workaround', get_stylesheet_directory_uri() . '/assets/js/workaround.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('childtheme', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    }
}


new ChildTheme();
