<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is our description for search results">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Sarina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:300,400|Open+Sans:300,400|Roboto:300,400|Source+Sans+Pro:300,400&display=swap" rel="stylesheet"> 
  	<?php wp_head();?>
    <title>Tara Teschke</title>
  </head>
  <body>
    <header>
      <img class="header logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Tara Teschke">
      <nav role="navigation">
        <div id="menuToggle">
          <!--
          A fake / hidden checkbox is used as click reciever,
          so you can use the :checked selector on it.
          -->
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <li><a href="<?php echo site_url('') ?>">Home</a></li>
            <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
            <li><a href="<?php echo site_url('/projects') ?>">Archive</a></li>
            <li><a href="<?php echo site_url('/music') ?>">Music</a></li>
            <li><a href="<?php echo site_url('about') ?>">About</a></li>
          </ul>
        </div>
      </nav>

    </header>
