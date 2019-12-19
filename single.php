<?php get_header() ?>
<div class="big-logo">
  <h2 class="extended-page-title">Blog</h2>
</div>
<main>
  <h2 class="page-title">The Blog</h2>
  <?php
    while(have_posts()) {
      the_post();
  ?>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title" ><?php the_title(); ?></h3>
        <h4 class="card-date"><?php the_date(); ?></h4>
      </div>
      <div class="article-container">
        <p class="card-content"><?php the_content();?></p>
      </div>
    </div>
    <?php
    }
   ?>
</main>
<?php get_footer() ?>
