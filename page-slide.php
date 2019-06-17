<?php get_header(); ?>
  

  <main class="articles">
  <div id="blog_archive">
    <h1>最近の記事一覧</h1>
    <?php if (have_posts()): ?>
      <?php foreach ( $posts as $post ): ?>
          <?php the_meta( 'slider1' ); ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
<?php get_footer(); ?>



<?php 
$value = get_post_meta( get_the_ID(), 'slider1' , true );
if ( $value ){
  echo $value;
} ?>








