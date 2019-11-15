<?php get_header(); ?>
  <main id="content">
    <div class="container py-3 my-3">
      <article id="post-<?php the_ID(); ?>" <?php post_class(['card']); ?>>
        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false)[0]; ?>" alt="" class="card-image card-image-large">
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
      <footer class="footer">
          <?php get_template_part('nav', 'below-single'); ?>
      </footer>
    </div>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>