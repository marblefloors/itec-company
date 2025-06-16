<?php

function itec_assets()
{
    wp_enqueue_style('maincss', get_template_directory_uri() . '/style/style.css');
}

function theme_image($image)
{
    $image_url = get_template_directory_uri() . '/images/' . $image;
    echo $image_url;
}

add_action("wp_enqueue_scripts", "itec_assets");

show_admin_bar(false);