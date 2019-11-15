<?php
/*
 * Template Name: Seasonal Events
 */
?>

<?php get_header(); ?>
  <main id="content">

    <div class="container py-3 my-3">

        <?php
        $paged = get_query_var('paged') ?? 1;
        $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 6,
            'category_name' => 'seasonal-events',
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged
        ])
        ?>
      <h2 class="section-title text-center">Seasonal Events</h2>

      <div class="row justify-center">
          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col md-4 mb-2">
                <?php get_template_part('card-default'); ?>
            </div>
          <?php endwhile; endif; ?>
      </div>

      <div class="pagination">
          <?= paginate_links([
              'current' => max($paged, 1),
              'total' => $query->max_num_pages
        ]) ?>
      </div>
    </div>

  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>