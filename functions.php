<?php
 function loadJS() {
wp_enqueue_script('jquery');
wp_enqueue_script('own-carousel-js', plugins_url( '/js/owl.carousel/dist/owl.carousel.js', __FILE__ ), array('jquery'));
wp_enqueue_script('app-js', plugins_url( '/js/app.js', __FILE__ ), array('jquery'));
}
add_action('wp_enqueue_scripts', 'loadJS');

function loadCss() {
wp_enqueue_style('own-carousel-css', plugins_url( '/js/owl.carousel/dist/assets/owl.carousel.css', __FILE__ ));
wp_enqueue_style('shelly-style-css', plugins_url( '/css/style.css', __FILE__ ));
}
add_action('wp_enqueue_scripts', 'loadCss');