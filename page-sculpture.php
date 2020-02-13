<!-- Sculpture Page -->
<?php get_header() ?>


<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        // 'showposts' => '4',
        'posts_per_page' => 4,
        
        'category_name' => 'sculpture',
        'paged' => $paged

      );
    $the_query = new WP_Query($args);
?>
<div class="card gallery">

<?php

    while($the_query ->have_posts()) {
      $the_query ->the_post();
      ?>
          <a href="<?php echo the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          <h5 class="hover-title"><?php echo the_permalink(); ?></h5>
          </a>
      
      <?php
    }
    wp_reset_query();
   ?>
</div>
<?php
if (function_exists("pagination")) {
      pagination($the_query->max_num_pages);
    }
?>
<?php get_footer() ?>
