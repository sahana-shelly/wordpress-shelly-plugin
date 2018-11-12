<?php
function central_style(){
  wp_enqueue_style('bootrap-min-css', get_template_directory_uri().'/css/bootstrap.min.css', NULL,NULL);
  wp_enqueue_style('fancybox-min-css', get_template_directory_uri().'/css/fancybox/jquery.fancybox.css', NULL,NULL);
    wp_enqueue_style('flexslider-css', get_template_directory_uri().'/css/flexslider.css');
    wp_enqueue_style('main-css', get_template_directory_uri().'/style.css');
    
      // lode javascripts
    wp_enqueue_script('bootrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'));
    wp_enqueue_script('jquery.easing-min-js', get_template_directory_uri().'/js/jquery.easing.1.3.js');
    wp_enqueue_script('bootstrap--min-js', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('fancybox-min-js', get_template_directory_uri().'/js/jquery.fancybox.pack.js');
    wp_enqueue_script('fancyboxmedia-min-js', get_template_directory_uri().'/js/jquery.fancybox-media.js');
    wp_enqueue_script('portfolio-min-js', get_template_directory_uri().'/js/portfolio/jquery.quicksand.js');
    wp_enqueue_script('portfolio-sitting-min-js', get_template_directory_uri().'/js/portfolio/setting.js');
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri().'/js/jquery.flexslider.js');
    wp_enqueue_script('animate-min-js', get_template_directory_uri().'/js/animate.js');
    wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js');
   // wp_enqueue_script('html5-shive', '//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js';
   // wp_enqueue_script('respond-shive', '//oss.maxcdn.com/respond/1.4.2/respond.min.js';
}
add_action('wp_enqueue_scripts','central_style');