<?php 

/**
 * Enqueue scripts and styles
 */
function my_theme_scripts() {

    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700;800;900', false );    

    wp_enqueue_style( 'faicon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );

    wp_enqueue_style( 'bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    
    wp_enqueue_style( 'swiperjscss', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    
    wp_enqueue_style( 'saljscss', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/lib/sal.css'));

    wp_enqueue_style( 'mainstyle', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), null, true);

    wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

    wp_enqueue_script( 'swiperjs', 'https://unpkg.com/swiper/swiper-bundle.min.js', '1.0.0', true );

    wp_enqueue_script( 'rellaxjs', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', '1.0.0', true );

    wp_enqueue_script( 'typedjs', get_template_directory_uri() . '/js/typed.js', array("jquery"), '1.0.0', true );

    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/script.js', array("jquery"), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
