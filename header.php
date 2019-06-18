<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
　
  <title>アメリカンビレッジ</title>
</head>


<body>


  <header>
    
    <?php wp_nav_menu(); ?>
    <div class="header-container">
       <img src="<?php echo get_template_directory_uri(); ?>/img/maru.png" alt="" class="logo">
      <?php get_template_part( ' PAGE_SLIDE ' ); ?>

      <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,"slider1",true));?>" ></div>
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,"slider2",true));?>"></div>
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,"slider3",true));?>"></div>


    </div> 
  </header>

