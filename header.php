<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is our description for search results">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<?php wp_head();?>
    <title>JD Hofmann</title>
  </head>
  <body>
    <header>
      <h1>JD Hofmann</h1>
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <li><a href="<?php echo site_url('') ?>"
              <?php if(is_front_page()) echo 'class="active"' ?>
              >Home</a></li>
            <li><a href="<?php echo site_url('/blog') ?>"
              <?php if(get_post_type() == 'post') echo 'class="active"' ?>
              >Blog</a></li>
            <li><a href="<?php echo site_url('/projects') ?>"
              <?php if(get_post_type() == 'project') echo 'class="active"' ?>
              >Archive</a></li>
            <li><a href="<?php echo site_url('/music') ?>"
              <?php if(is_page('music')) echo 'class="active"' ?>
              >Music</a></li>
            <li><a href="<?php echo site_url('about') ?>"
              <?php if(is_page('about')) echo 'class="active"' ?>
              >About</a></li>
          </ul>
        </div>
      </nav>

    </header>
