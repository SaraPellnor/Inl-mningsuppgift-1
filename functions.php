<?php 


// Lägg till stöd för utvalda bilder
add_theme_support( 'post-thumbnails' );

// Lägg till stöd för menyer
add_theme_support( 'menus' );

// Lägg till stöd för widgets
add_theme_support( 'widgets' );

// Lägger till alla widgets
register_sidebar([
    'name' => 'arkiv',
    'description' => 'arkiv',
    'id' => 'arkiv',
    "before_widget" => "<li>"
]);

register_sidebar([
    'name' => 'serch',
    'description' => 'search',
    'id' => 'serch',
    "before_widget" => ""
]);
register_sidebar([
    'name' => 'serchheader',
    'description' => 'serchheader',
    'id' => 'serchheader',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'social',
    'description' => 'social',
    'id' => 'social',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'contact',
    'description' => 'contact',
    'id' => 'contact',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'about',
    'description' => 'about',
    'id' => 'about',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'copywrite',
    'description' => 'copywrite',
    'id' => 'copywrite',
    "before_widget" => ""
]);

// кöа in
function my_scripts() {
    
    // Registrera och lägg till stilmallar
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style');
    
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('fontawesome');
    
    // Registrera och lägg till JavaScript-filer
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('jquery');
    
    wp_register_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom-script');
    
    wp_register_script('script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('script');
}
// Laddar in stilmallar och JavaScript-filer 
add_action('wp_enqueue_scripts', 'my_scripts');



?>
