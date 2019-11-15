<article id="post-<?php the_ID(); ?>" <?php post_class(['card']); ?>>
  <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false)[0]; ?>" alt="" class="card-image">
  <div class="card-body">
    <h3 class="card-title"><?= get_the_title() ?></h3>
    <p class="card-meta"><?php the_time( get_option( 'date_format' ) ); ?></p>
    <p class="card-subtitle"><?= get_the_excerpt() ?></p>
    <div class="card-action">
      <a class="btn btn-primary" href="<?= get_the_permalink() ?>">Read More</a>
    </div>
  </div>
</article>