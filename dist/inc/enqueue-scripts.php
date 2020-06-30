<?php
function college_everywhere_scripts() {
wp_enqueue_style( 'college-everywhere-theme-styles' , get_template_directory_uri() . '/dist/assets/css/main.min.css', array(), '20191119', 'all');

wp_enqueue_style( 'college-everywhere-font-awesome',  '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css?ver=5.13.0', array(), '20200623', 'all');

wp_deregister_script( 'jquery' );

wp_deregister_script( 'jquery-migrate' );

wp_enqueue_script( 'college-everywhere-jquery', '/dist/assets/js/main.min.js', array(), '0.0.0', true);

wp_enqueue_script( 'college-everywhere-js' , get_template_directory_uri() . '/dist/assets/js/main.min.js', array(), '0.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'college_everywhere_scripts' );
?>