<article id="post-<?php the_ID(); ?>" <?php post_class(['card', 'card-background']); ?>>
  <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false)[0]; ?>" alt="" class="card-image">
  <div class="card-body">
    <h3 class="card-title"><?= get_the_title() ?></h3>
  </div>
</article>