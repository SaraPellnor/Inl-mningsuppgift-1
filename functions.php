<?php 


// Lägg till stöd för utvalda bilder
add_theme_support( 'post-thumbnails' );

// Lägg till stöd för menyer
add_theme_support( 'menus' );

// Kör en function i head
    /*add_action("wp_head", "my_function");
    function my_function(){
        echo "Wiiiiii";
    } */


// кöа in
add_action('wp_enqueue_scripts','my_scripts');

function my_scripts(){
    wp_register_style('style', get_template_directory_uri(). '/css/style.css');
    wp_enqueue_style('style');

    wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('fontawesome', get_template_directory_uri(). '/css/font-awesome.css');
    wp_enqueue_style('fontawesome');

    wp_register_script('script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('script');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function my_theme_scripts() {
    // Ladda jQuery från Google CDN
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);

    // Ladda din script.js-fil som beroende på jQuery
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
// add_action('wp_enqueue_scripts', 'my_theme_scripts');

// // function my_theme_scripts() {
//     wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
// }

// ?>