<?php
function load_my_scripts() {
    wp_enqueue_style( 'bootstrap_css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
  wp_enqueue_script( 'boot1','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js', array('jquery'));
  wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', array('jquery'));
  wp_enqueue_script( 'boot3','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'));

  wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js', array(), false, true );
  wp_enqueue_script( 'gsap-js-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js', array(), false, true );
  wp_enqueue_script( 'gsap-js-custom', get_stylesheet_directory_uri() . '/script1.js', array(), false, true );
 
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );
 
}
add_action( 'wp_enqueue_scripts', 'load_my_scripts');
?>
<?php
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>
<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'top-menu' ),
) );
?>
<?php
add_theme_support('post-thumbnails'); 
?>
<?php
function footer_left() {

  register_sidebar( array(
    'name'          => 'footer-left',
    'id'            => 'footer-l',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  
  ) );

}
add_action( 'widgets_init', 'footer_left' );
?>
<?php
function footer_right() {

  register_sidebar( array(
    'name'          => 'footer-right',
    'id'            => 'footer-r',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  
  ) );

}
add_action( 'widgets_init', 'footer_right' );
?>
