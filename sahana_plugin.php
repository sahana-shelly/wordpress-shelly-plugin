<?php
/*
Plugin Name:Sahana-Plugin
Plugin URI: https://akismet.com/
Description:This plugin is used only for slider.
Version:0.1
Author:Most.Sahana Akter
Author URI:https://sahanashelly.wordpress.com/
License: GPLv2 or later
Text Domain:Sahana_Plugin
*/

defined('ABSPATH') or die("hey waht are you doing here");
include('slider_shortcode.php');

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

add_image_size('slider-img',460,260,true);

class SahanaPlugin
{
    function __construct()
    {
        add_action('init', (array($this, 'create_post_type')));
        add_filter('manage_slider_posts_columns', (array($this, 'manage_slider_posts_columns_function')));
        add_action('manage_slider_posts_custom_column', (array($this, 'manage_slider_posts_custom_column_function')), 10, 2);
    }

    function activate()
    {
        //echo "activate";
        flush_rewrite_rules();
    }

    function deactivate()
    {
        //echo "deactivate";
        flush_rewrite_rules();
    }

    function create_post_type()
    {
        register_post_type('slider',
            array(
                'labels' => array(
                    'name' => __('Sliders'),
                    'singular_name' => __('Slider')
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => array('title', 'editor', 'thumbnail')
            )
        );
    }

    function manage_slider_posts_columns_function($columns)
    {
        $newColumns['cb'] = $columns['cb'];
        $newColumns['title'] = $columns['title'];
        $newColumns['description'] = "Description";
        $newColumns['photo'] = "Photo";
        $newColumns['date'] = $columns['date'];
        return $newColumns;
    }

    function manage_slider_posts_custom_column_function($column, $post_id)
    {
        if ('description' === $column) {
            echo get_the_content($post_id);
        }

        if ('photo' === $column) {
            echo get_the_post_thumbnail($post_id, array(80, 80));
        }
    }

}

$sahanaplugin = new SahanaPlugin();

// This is use for activation
//register_activation_hook(__FILE__, array($sahanaplugin, 'activate'));

// This is use for deactivation
//register_deactivation_hook(__FILE__, array($sahanaplugin, 'deactivate'));



