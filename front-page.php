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
        <div class="sns">
         <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="495" data-height="320" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
        </div>
        <div class="twitter">
          <a class="twitter-timeline" data-lang="en" data-height="320" data-dnt="true" href="https://twitter.com/TwitterJP?ref_src=twsrc%5Etfw">Tweets by TwitterJP</a>
        </div>
        </div>
        </div>
      
      <div class="col-3">
        <?php dynamic_sidebar('サイドバー2'); ?>
      </div>
      
    </div>
  </div>

</main>


<?php get_footer(); ?>




  







