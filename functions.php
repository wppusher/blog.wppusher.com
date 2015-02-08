<?php

function wppusher_blog_scripts()
{
    wp_enqueue_style('style.css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wppusher_blog_scripts');
