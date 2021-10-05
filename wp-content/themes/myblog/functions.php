<?php 
    
    // Including stylesheet and script loader files
    function load_scripts(){
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-css','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    
        
  
}
add_action('wp_enqueue_scripts', 'load_scripts');


// Main configuration function

 function myblog_config(){
  

    // Theme option Menu adding
    add_theme_support('menus');
    // Registering Menus
    register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
    )
    );
     
     // Adding Custom header option panel 
     
     $args = array(
        'height' => 225,
         'width' =>1920
     );
    add_theme_support('custom-header',$args );
     // Adding Featured image in wp panel
    add_theme_support('post-thumbnails' );
     // Adding Post format methods
    add_theme_support('post-formats', array('video','image')  );
 }
add_action('after_setup_theme', 'myblog_config', 0);


// Registering our sidebars
add_action('widgets_init', 'myblog_sidebars', );
function myblog_sidebars(){
    register_sidebar(
    
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Homesidebar, you can add your widgets here !',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
             'before_title' => '<h2 class="widget_title">',
             'after_title' => '</h2>'
        )
    );
    
    register_sidebar(
    
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Blog sidebar, you can add your widgets here !',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
             'before_title' => '<h2 class="widget_title">',
             'after_title' => '</h2>'
        )
    );
     register_sidebar(
    
        array(
            'name' => 'Service 1',
            'id' => 'services-1',
            'description' => 'First Service Area !',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
             'before_title' => '<h2 class="widget_title">',
             'after_title' => '</h2>'
        )
    );
     register_sidebar(
    
        array(
            'name' => 'Service 2',
            'id' => 'services-2',
            'description' => 'Second Service Area  !',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
             'before_title' => '<h2 class="widget_title">',
             'after_title' => '</h2>'
        )
    );
     register_sidebar(
    
        array(
            'name' => 'Service 3',
            'id' => 'services-3',
            'description' => 'Third Service Area !',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
             'before_title' => '<h2 class="widget_title">',
             'after_title' => '</h2>'
        )
    );
}

