<?php 


// Lägg till stöd för utvalda bilder
add_theme_support( 'post-thumbnails' );

// Lägg till stöd för menyer
add_theme_support( 'menus' );
// Lägg till stöd för widgets
add_theme_support( 'widgets' );

register_sidebar([
    'name' => 'arkiv',
    'description' => 'the first one test',
    'id' => 'arkiv',
    "before_widget" => "<li>"
]);

register_sidebar([
    'name' => 'serch',
    'description' => 'the second one test',
    'id' => 'serch',
    "before_widget" => ""
]);
register_sidebar([
    'name' => 'serchheader',
    'description' => 'the theerd one test',
    'id' => 'serchheader',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'social',
    'description' => 'the fourth one test',
    'id' => 'social',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'contact',
    'description' => 'the fourth one test',
    'id' => 'contact',
    "before_widget" => ""
]);

register_sidebar([
    'name' => 'about',
    'description' => 'the fourth one test',
    'id' => 'about',
    "before_widget" => ""
]);
// Kör en function i head
    /*add_action("wp_head", "my_function");
    function my_function(){
        echo "Wiiiiii";
    } */


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

add_action('wp_enqueue_scripts', 'my_scripts');



?>