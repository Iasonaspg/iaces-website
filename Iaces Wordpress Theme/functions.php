<?php

function mytheme_enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('Animate', get_template_directory_uri() . '/css/Animate.css'); 
    wp_enqueue_style('fontawesome-all.min', get_template_directory_uri() . '/Fontawesome/css/fontawesome-all.min.css');
    wp_enqueue_style('Team', get_template_directory_uri() . '/css/Team.css');
    wp_enqueue_style('Event', get_template_directory_uri() . '/css/Event.css');
    wp_enqueue_style('Contact', get_template_directory_uri() . '/css/Contact.css');
    
    // wp_enqueue_style('w3', get_template_directory_uri() . '/css/w3.css');
    wp_enqueue_script('ResponsiveMenu', get_template_directory_uri() . '/js/ResponsiveMenu.js',array(),'1.0',true);
    if (is_page("Home")){
        wp_enqueue_script('Slide', get_template_directory_uri() . '/js/Slide.js',array(),'1.0',true);
        wp_enqueue_style('aos', get_template_directory_uri() . '/AOS.js/dist/aos.css');
        wp_enqueue_script('aosjs', get_template_directory_uri() . '/AOS.js/dist/aos.js',array(),'1.0',true);
    }
    if (is_page("Team")){
        
        wp_enqueue_script('Team', get_template_directory_uri() . '/js/Team.js',array(),'1.0',true);
    }
    if (is_page("Events")){
        
        wp_enqueue_script('Event', get_template_directory_uri() . '/js/Events.js',array(),'1.0',true);
    }
    if (is_page("Contact")){
        
        wp_enqueue_script('Contact', get_template_directory_uri() . '/js/Contact.js',array(),'1.0',true);
    }   
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_style');

function menu_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	
	
}
add_action('init', 'menu_theme_setup');
