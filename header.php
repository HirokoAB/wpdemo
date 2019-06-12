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
        <?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
        <span class="pc">最近見かけた街の風景です</span>
    </div> 
  </header>

