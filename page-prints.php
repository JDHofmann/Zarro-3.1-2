<!-- Prints Page -->



<?php get_header() ?>
<?php
while(have_posts()) {
      the_post();
      ?>
      <div class="card">
        <?php the_content(); ?> 
      </div>
      <?php
    }
    ?>

<?php get_footer() ?>
