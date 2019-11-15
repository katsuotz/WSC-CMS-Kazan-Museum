<?php get_header(); ?>
  <main id="content">
    <div class="container">

      <div class="banner">
        <div class="banner-content">
          <h1 class="banner-title">Kazan Museum Tour</h1>
          <h5 class="banner-subtitle">Explore. Learn. Fun.</h5>
        </div>
        <img class="banner-image" src="<?= get_stylesheet_directory_uri() ?>/assets/hermitage-1.png" alt="">
      </div>
      <div class="row my-3">
        <div class="col md-6">
          <h2 class="section-title">News</h2>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="mb-2">
                  <?php get_template_part('card-default'); ?>
              </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="col md-6">
            <?php
            $query = new WP_Query([
                'post_type' => 'gallery',
                'posts_per_page' => 5,
                'order' => 'DESC',
                'orderby' => 'date'
            ])
            ?>

          <h2 class="section-title">Our Gallery Collection</h2>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <div class="mb-2">
                  <?php get_template_part('card-background'); ?>
              </div>
            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>