<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

  <div class="loader active">
    <div class="loader-icon"></div>
    <span>Loading</span>
  </div>

  <div class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= home_url('/') ?>">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/logo.png" alt="">
        <span class="navbar-text">Kazan Museum Tour</span>
      </a>
      <div class="navbar-nav">
        <div class="nav-item">
          <a href="<?= home_url('/') ?>" class="nav-link">Home</a>
        </div>

          <?php
          $query = new WP_Query([
              'post_type' => 'page',
              'order' => 'ASC',
              'orderby' => 'title',
              'meta_query' => [
                  [
                      'key' => '_wp_page_template',
                      'value' => 'page-selected-museum.php'
                  ]
              ]
          ])
          ?>

          <?php if ($query->have_posts()): ?>
            <div class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Museum
              </a>
              <div class="nav-child">
                <?php while ($query->have_posts()): $query->the_post()?>
                  <a href="<?= get_the_permalink() ?>" class="nav-link"><?= get_the_title() ?></a>
                <?php endwhile;?>
              </div>
            </div>
          <?php endif ?>
        <div class="nav-item">
          <a href="<?= home_url('/seasonal-events') ?>" class="nav-link">Seasonal Events</a>
        </div>
      </div>
    </div>
  </div>

  <header id="header">
    <!--<div id="branding">-->
    <!--<div id="site-title">-->
      <?php //if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
    <!--<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" title="-->
      <?php //echo esc_html( get_bloginfo( 'name' ) ); ?><!--" rel="home">-->
      <?php //echo esc_html( get_bloginfo( 'name' ) ); ?><!--</a>-->
      <?php //if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
    <!--</div>-->
    <!--<div id="site-description">--><?php //bloginfo( 'description' ); ?><!--</div>-->
    <!--</div>-->
    <!--<nav id="menu">-->
    <!--<div id="search">--><?php //get_search_form(); ?><!--</div>-->
      <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    <!--</nav>-->
  </header>
  <div id="container">