</div>

<div class="container py-3">

  <div class="my-3">
    <div class="">
      <div class=" ">
        <h2 class="section-title">Contact Us</h2>

        <div class="card">
          <div class="card-body">
            <form action="https://formspree.io/admin@example.com" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputContent">Message</label>
                <textarea name="content" id="inputContent" class="form-control"></textarea>
              </div>
              <div class="form-action">
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer id="footer" class="my-3">
    <div class="row">
      <div class="col md-6" id="copyright">
        Copyright © 2019 - All rights reserved
      </div>


        <?php
        $query = new WP_Query([
            'post_type' => 'social-icon',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'title'
        ])
        ?>

        <?php if ($query->have_posts()): ?>
          <div class="col md-6">
            <div class="footer-social">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                  <a href="<?= get_field('url') ?>" class="social-link"><i class="<?= get_field('icon') ?>"></i></a>
                <?php endwhile ?>
            </div>
          </div>
        <?php endif ?>
    </div>
  </footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>