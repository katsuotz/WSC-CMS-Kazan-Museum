<?php

function km_login()
{
    ?>
  <style>
    .login h1 a,
    #login h1 a {
      background-image: url("<?= get_stylesheet_directory_uri() ?>/assets/logo.png");
    }
  </style>
    <?php
}

add_action('login_enqueue_scripts', 'km_login');

function km_scripts()
{
    wp_enqueue_style('km-roboto', get_stylesheet_directory_uri() . '/assets/css/wf-roboto-font.1558031354.css');
    wp_enqueue_style('km-fa', get_stylesheet_directory_uri() . '/assets/css/wf-font-awesome.1558031354.css');
    wp_enqueue_script('km-script', get_stylesheet_directory_uri() . '/km-script.js', ['jquery']);
    wp_localize_script('km-script', 'url', [
          'root' => home_url('/'),
          'admin' => home_url('/admin'),
    ]);
}

add_action('wp_enqueue_scripts', 'km_scripts');

function km_init()
{
    register_post_type('gallery', [
        'label' => 'Gallery',
        'public' => true,
        'exclude_from_search' => true,
        'supports' => ['title', 'thumbnail']
    ]);
    register_post_type('social-icon', [
        'label' => 'Social Icon',
        'public' => true,
        'exclude_from_search' => true,
        'supports' => ['title']
    ]);
}

add_action('init', 'km_init');

add_filter('excerpt_length', function () {
  return 10;
});

