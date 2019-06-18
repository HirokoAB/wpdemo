
<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/owl/assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/owl/assets/css/style.css">

<meta charset="UTF-8">

<title>Document</title>

</head>
<body>

  <div class="owl-carousel owl-theme">
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta( 298,"slider1",true));?>" ></div>
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta( 298,"slider2",true));?>"></div>
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta( 298,"slider3",true));?>"></div>
  </div>
　　　　    



<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/jquery.min.js"></script><!--  jQuery 1.7以上  -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/app.js"></script>
  
</body>
</html>





  