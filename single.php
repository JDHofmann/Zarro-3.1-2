<?php get_header() ?>
<div class="big-logo">
  <a href="<?php echo site_url('/blog') ?>">
    <h2 class="extended-page-title">Blog</h2>
  </a>
</div>
<main>
  <a href="<?php echo site_url('/blog') ?>">
    <h2 class="page-title">The Blog</h2>
  </a>
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
