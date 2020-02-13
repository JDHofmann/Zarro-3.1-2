<!-- INDIVIDUAL PROJECTS PAGE -->

<?php get_header() ?>
<!-- <main class="individual-project"> -->
  <?php
    while(have_posts()) {
      the_post();
  ?>
    <div class="card single">
      <h3 class="card-title" ><?php the_title(); ?></h3>
      <h6 class="watermark">
      MICHAEL LOKENSGAARD
      </h6>
        <?php the_content();?>
        
      
    </div>
    <?php
    }
   ?>
   
<!-- </main> -->
<button class="back-button"><?php
      $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
      echo "<a href='$url'>Back</a>";?>
   </button>
<?php get_footer() ?>
