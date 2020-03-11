<!-- Paintings Page -->
<?php get_header() ?>

<?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'posts_per_page' => 30,
        
        'category_name' => 'paintings',
         'paged' => $paged
      );
    $the_query = new WP_Query($args);
?>
<div class="page-buttons">
    <button class="prev">&#8249</button>
    <button class="next">&#8250;</button>
</div>
  <div id="slide-gallery" class="slide-gallery">
   
<?php
  if($the_query->have_posts()) : while($the_query ->have_posts()) {

    $the_query ->the_post();
?>    
      <div class="slide" id="<?php the_ID()?>">
        
        <?php the_post_thumbnail(); ?>
        <h5 class="slide-title"><?php the_title()?></h5>
        <a href="<?php the_permalink() ?>"><?php the_permalink() ?></a>
      </div>
      
<?php
    }
    wp_reset_query(); 
?>
<?php else : ?>
  <div class="card">
        <h4 class="coming-soon">Coming Soon...</h4>
        </div>
    <?php endif; ?>
    
   
</div>
<?php
if (function_exists("pagination")) {
      pagination($the_query->max_num_pages);
    }
?>
<?php get_footer() ?>
