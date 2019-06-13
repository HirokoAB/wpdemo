<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-7">
      <?php if(have_posts()): the_post(); ?>
        <article>
          <div class="article">
          <div class="breadcrumbs">
            <?php breadcrumb(); ?>
          </div> 
              <div class="article_img">
                <?php the_post_thumbnail('large'); ?>
              </div>

          <div class= "article_title">    
                          <!--タイトルを取得-->
                          <h1><?php the_title(); ?></h1> 
                          <!--投稿日を取得-->
                           <span class="article_date">
                            <i class="fas fa-pencil-alt"></i>
                            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                              <?php echo get_the_date(); ?>
                            </time>
                          </span>
                        </div> 
                        <!--本文取得-->
                        <div class="article_content">
                          <?php the_content(); ?>
                        </div>

                      <?php else: ?>
                
                        <p>投稿はありません</p>

        <?php endif; ?>
          

          <div class="nav-below">
              <span class="pre_text">
                <?php previous_post_link('%link','< 前へ'); ?>
              </span>
              <span class="next_text">  
                    <?php next_post_link('%link','次へ >'); ?>
              </span>
          </div>
          <div class="related">
                <?php get_template_part('form', 'related');?>
              </div>
          <div class="article_archive">
            <p class="latest_title">お知らせ</p>
              <div class="article_loop">
                <?php query_posts("posts_per_page=3&paged+$paged"); ?>
                <?php get_template_part('loop', 'blog');?>
              </div>
          
          <div class="list-btn">
            <a href="<?php echo home_url(); ?>">TOPへ</a>
          </div>

      </div>
      </div>
      </div>


      <div class="col-sm-2">
                  <?php get_template_part('sidebar'); ?>
      </div>

</div>
</article>













