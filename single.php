<!-- INDIVIDUAL PROJECTS PAGE -->


<?php get_header() ?>
<div class="single-mask"></div>

<main class="individual-project">
<button class="close-button"><?php
      $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
      echo "<a href='$url'><span></span>
      <span></span></a>";?>
   </button>
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
   


<?php get_footer() ?>
