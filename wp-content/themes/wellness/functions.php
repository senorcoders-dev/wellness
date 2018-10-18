<?php 

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu',      'mytheme' ),
    ) );

add_action( 'wp_enqueue_scripts', 'add_style' );
  function add_style(){
   
    // CSS
    wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri(). '/css/bootstrap.css' );
    wp_enqueue_style( 'gymThemeCss', get_template_directory_uri(). '/css/styles.css' );
    
    // Fonts
    wp_enqueue_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' ); 
    wp_enqueue_style( 'fontawesome2', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' ); 
    wp_enqueue_style( 'animate', 'http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css' ); 
    wp_enqueue_style( 'animate2', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css' ); 

    wp_enqueue_style( 'styleDev2', get_template_directory_uri(). '/css/customDev2.css.css' );
    wp_enqueue_style( 'styleTheme', get_template_directory_uri(). '/style.css' );      
  }

  add_action( 'wp_enqueue_scripts', 'add_script' );
  function add_script(){
    
        
    // #JAVASCRIPTS
       
        wp_enqueue_script( 'bootstrapJS',get_template_directory_uri(). '/js/bootstrap.js' , array( 'jquery' ) );
       // wp_enqueue_script( 'gallery',get_template_directory_uri(). '/js/gallery.js' , array( 'jquery' ) );
        wp_enqueue_script( 'returnTop',get_template_directory_uri(). '/js/return-top.js' , array( 'jquery' ) );
        wp_enqueue_script( 'carousel',get_template_directory_uri(). '/js/carousel.js' , array( 'jquery' ) );
        wp_enqueue_script( 'counter',get_template_directory_uri(). '/js/counter.js' , array( 'jquery' ) );
        wp_enqueue_script( 'waypoint', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'counterup',get_template_directory_uri(). '/js/jquery.counterup.js' , array( 'jquery' ) );
        wp_enqueue_script( 'mixitup',get_template_directory_uri(). '/js/jquery.mixitup.min.js' , array( 'jquery' ) );
        wp_enqueue_script( 'filter',get_template_directory_uri(). '/js/filter.js' , array( 'jquery' ) );
        wp_enqueue_script( 'flickity', 'http://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'customer',get_template_directory_uri(). '/js/customers.js' , array( 'jquery' ) );
        wp_enqueue_script( 'loader',get_template_directory_uri(). '/js/loader.js' , array( 'jquery' ) );


  }

  require get_template_directory() . '/inc/cpt.php';

  require get_template_directory() . '/inc/roles.php';

function the_breadcrumb() {
 if (!is_home()) {
 echo '<span class="removed_link" title="';
 echo get_option('home');
         echo '">';
 bloginfo('name');
 echo "</span> / ";
 if (is_category() || is_single()) {
 the_category('title_li=');
 if (is_single()) {
 echo " / ";
 the_title();
 }
 } elseif (is_page()) {
 echo the_title();
 }
 }
} 
  