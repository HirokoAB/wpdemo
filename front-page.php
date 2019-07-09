<?php get_header(); ?>


<main>

<!-- もしヘッダー画像が表示されていなければ -->
 <?php if ( empty( get_header_image() ) ) :?> 
    <?php get_template_part( 'single' , 'slider' ); ?>
  <?php else :?>
    <div class=header-img>
    <img src="<?php header_image(); ?>">
    </div>
  <?endif;?>


  <div class="container">
    <div class="row">
      <div class="col-9">
        <?php get_template_part( 'taxonomy' , 'info' ); ?>
      </div>
      <div class="col-3">
        <?php dynamic_sidebar('サイドバー2'); ?>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>




  







