<!-- Design Main Page
<?php get_header() ?>
<!-- <main class="design">
  <h2 class="page-title">Home</h2>
  <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
      );
    $blogposts = new WP_Query($args);
    while($blogposts ->have_posts()) {
      $blogposts ->the_post();
      ?>
      <div class="card">
          <a href="<?php echo the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          </a>
      </div>
      <?php
    }
    wp_reset_query();
   ?>
</main>

<?php get_footer() ?> --> -->





<!-- Projects  Main Page -->
<!-- <?php get_header() ?>
<main>
  <?php

    $args = array(
      'post_type' => 'project',
    );
    $blogposts = new WP_Query($args);

    while($blogposts->have_posts()) {
      $blogposts->the_post();
      ?>
      <div class="card">
        <a href="<?php echo the_permalink(); ?>">
          <div class="card-thumbnail">
          <?php the_post_thumbnail(); ?>
          </div>
        
          <h3 class="card-title" ><?php the_title(); ?></h3>
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
<?php get_footer() ?> -->
