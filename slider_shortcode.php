<?php

class SliderShortcode
{
    function __construct()
    {
        add_shortcode('slider', (array($this, 'slider_function')));
    }

    function slider_function() {
        $html = '<h5>Shelly Slider</h5>';
        $html.='<div class="owl-carousel owl-theme">';

        $posts = get_posts(['post_type'=>'slider']);
        foreach($posts as $k=>$v) {
            $html.= '<div>' . get_the_post_thumbnail($v->ID, 'full','slider-img') . '</div>';
        }

        $html.= '</div>';
        return $html;
    }
}

new SliderShortcode();