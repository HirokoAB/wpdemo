<?php get_header(); ?>


<main>

<!-- もしヘッダー画像が表示されていなければ -->
 <?php if ( empty( get_header_image() ) ) :?> 
  <?php get_template_part( 'single' , 'slider' ); ?>
<?php else :?>
  <img src="<?php header_image(); ?>">
<?endif;?>

  <div class="articles">
  <div id="blog_archive">
    <h1>最近の記事一覧</h1>
    <!-- 表示件数を指定するための配列 -->
    <?php $args =  array('posts_per_page' => 3 );?>
    <!-- postsの中に表示件数で指定した数の投稿を代入 --> 　　
    <?php $posts = get_posts($args);?>
    <?php if (have_posts()): ?>
    <ul class="content-box">
      <?php foreach ( $posts as $post ): ?>
          <?php setup_postdata($post);?>
            <li>
              <?php if (has_post_thumbnail()): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="">
              <?php endif; ?>
              
              <p class="date"><?php the_time('Y-m-d');?></p>
              <p class="article"><?php the_title();?></p>
              <div class="read">
                <a href="<?php the_permalink(); ?>" class="next">READ MORE</a>
              </div>
            </li>
        <?php endforeach; ?>
    </ul>
      <?php endif; ?>
    </div>
  </div>

<?php get_footer(); ?>












