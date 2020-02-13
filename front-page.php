<!-- HOME PAGE -->

<?php get_header() ?>
<!-- <h2> Front-page.php</h2> -->
<?php

    while(have_posts()) {
      the_post();
      ?>
      <div class="card front">
        <?php the_content(); ?> 
      </div>
      <?php
    }
    wp_reset_query();
   ?>
<?php get_footer() ?>





