<?php get_header() ?>
<main class="design">
   <h2 class="page-title">Blog</h2>
  <?php

    while(have_posts()) {
      the_post();
      ?>
      <div class="card">
          <a href="<?php echo the_permalink(); ?>">
            <?php the_content(); ?>
          </a>
      </div>
      <?php
    }
    wp_reset_query();
   ?>
	 <div class="pagination">
	 	<?php echo paginate_links(); ?>
	 </div>
</main>
<?php get_footer() ?>
