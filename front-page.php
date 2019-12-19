<?php get_header() ?>
<div class="big-logo">
  <h2 class="extended-page-title">Home</h2>
</div>
<main>
  <h2 class="page-title">Home</h2>
  <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
      );
    $blogposts = new WP_Query($args);
    while($blogposts ->have_posts()) {
      $blogposts ->the_post();
      ?>
      <div class="card">
        <div class="card-header">
          <a href="<?php echo the_permalink(); ?>">
          <h3 class="card-title" ><?php the_title(); ?></h3>
          </a>
          <h4 class="card-date"><?php the_date(); ?></h4>
        </div>
        <div class="article-container">
          <p class="card-content"><?php echo wp_trim_words(get_the_excerpt(), 100); ?></p>
        </div>
        <a id="read-more" href="<?php the_permalink(); ?>">Read More</a>
      </div>
      <?php
    }
    wp_reset_query();
   ?>
</main>

<?php get_footer() ?>
