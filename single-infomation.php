<?php get_header(); ?>

<div class="container-fluid single-container">

  <div class="row single-row">
    <div class="col-sm-2"></div>
    <div class="col-sm-7 article-container">
      <?php if(have_posts()): the_post(); ?>
        <article>
          <div class="article">
          <div class="breadcrumbs">
            <?php breadcrumb(); ?>
          </div> 
              <div class="article_img">
                <?php the_post_thumbnail('large'); ?>
              </div>

          <div class="info-cate">
          <?php $term = wp_get_post_terms( $post -> ID ,'info',array("fields" => "names")); ?>
            <span class="info-cate"><?php echo $term [0]?></span>
          </div>
          <div class= "info_article_title">  
                          <!--タイトルを取得-->
                          <h1><?php the_title(); ?></h1>

                          <!--投稿日を取得-->
                           <span class="article_date">
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
              <span class="pre_text" >
                <?php previous_post_link('%link','< 前へ'); ?>
              </span>
              <span class="next_text">  
                    <?php next_post_link('%link','次へ >'); ?>
              </span>
          </div>
          <!-- <div class="related relate-container">
                <?php get_template_part('form', 'related');?>
          </div> -->
          <div class="article_archive">
          
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











