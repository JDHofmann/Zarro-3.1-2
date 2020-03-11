<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"> 
  	<?php wp_head();?>
    <title>MICHAEL LOKENSGAARD</title>
  </head>
  <body>
    <header>
    <input type="checkbox" name="" value=false>
      <div class="menu-btn">
        <span></span>
        <span></span>
      </div>
    <h1>MICHAEL LOKENSGAARD</h1>
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/ml-logo.png" alt="">
    
    
    <nav>
      <ul class="menu">
        <!-- <li><a href="<?php echo site_url('') ?>"
              <?php if(is_front_page()) echo 'class="active"' ?>
              >Home</a></li> -->
        <li><a href="<?php echo site_url('paintings') ?>"
            <?php if(is_page('paintings')) echo 'class="active"' ?>
            >Paintings</a></li>
        <li><a href="<?php echo site_url('prints') ?>"
            <?php if(is_page('prints')) echo 'class="active"' ?>
            >Prints</a></li>
        <li><a href="<?php echo site_url('sculpture') ?>"
            <?php if(is_page('sculpture')) echo 'class="active"' ?>
            >Scultpture</a></li>
        <li><a href="<?php echo site_url('contact') ?>"
            <?php if(is_page('contact')) echo 'class="active"' ?>
            >Contact</a></li>
      </ul>
    </nav>
    </header>

