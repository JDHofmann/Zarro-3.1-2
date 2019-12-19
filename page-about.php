<!-- file name is page-[*the slug of your specific page].php -->
<?php get_header() ?>
<?php
/* Start the Loop */
while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/content/content', 'page' );
?>
<div class="big-logo">
  <h2 class="extended-page-title">About</h2>
</div>
<main class="bio">
  <h2 class="page-title">About</h2>

    <div class="card">
      <p class="card-content"><?php the_content(); ?></p>
    </div>
</main>
<?php
/*
  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }
*/
endwhile; // End of the loop.
?>
<?php get_footer() ?>
