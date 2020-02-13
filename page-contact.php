<!-- Contact Page -->
<?php get_header() ?>
<?php

while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/content/content', 'page' );
?>
<main>
  <!-- <h2 class="page-title">Contact</h2> -->

    <div class="card">
      <?php the_content(); ?>
    </div>
</main>
<?php
endwhile; // End of the loop.
?>
<?php get_footer() ?>
