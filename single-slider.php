
  <div class="owl-carousel owl-theme">
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta( 340,"slider1",true));?>" ></div>
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta( 340,"slider2",true));?>"></div>
    <div><img class="item"src="<?php echo wp_get_attachment_url(get_post_meta( 340,"slider3",true));?>"></div>
  </div>
　　　　    


<!-- owl用のJavaScript -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/jquery.min.js"></script><!--  jQuery 1.7以上  -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/app.js"></script>






  