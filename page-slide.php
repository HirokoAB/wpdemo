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


          <?php $meta = get_post_meta( get_the_ID() ); ?>
          <?php var_dump( $meta ); ?>

<?php 
if ( !function_exists( 'get_custum_post_types' ) ):
function get_custum_post_types(){
  $args = array(
    'public' => true,
    '_builtin' => false
  );
  $post_types = get_post_types( $args );
  return $post_types;
}
endif;

?>








