<?php
/*
 * Template Name: Selected Museum
 */
?>

<?php get_header(); ?>
  <main id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false)[0]; ?>" alt=""
       class="full-background">

  <div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(['card card-selected-museum']); ?>>
      <div class="card-body">
        <header class="header">
          <h1 class="card-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
          <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>
      </div>
    </article>

      <?php
      $query = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 3,
          'order' => 'DESC',
          'orderby' => 'date',
          'meta_query' => [
              [
                  'key' => 'museum',
                  'value' => get_the_ID()
              ]
          ]
      ])
      ?>
    <div class="mt-2">

      <h2 class="section-title text-center">Related Posts</h2>

      <div class="row justify-center">
          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col md-4 mb-2">
                <?php get_template_part('card-default'); ?>
            </div>
          <?php endwhile; ?>
          <?php else: ?>
            <div class="col">
              <p class="text-center m-0">No related posts yet</p>
            </div>
          <?php endif ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>