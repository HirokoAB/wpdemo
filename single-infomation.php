<?php get_header(); ?>

<article style="padding-top: 100px">
	<div class="container">
		<div class="row">
			<div class="col-8 main-con">
				<?php if(have_posts()): the_post(); ?>
					<!-- Articlee upper -->
					<div class="article-upper" style="height: auto;">
						<div class="breadcrumbs">
		            		<?php custom_breadcrumb(); ?>
		          		</div>
						<div class="article_img">
		              	</div>
		              	<div class="info-cate">
				          <?php $term = wp_get_post_terms( $post -> ID ,'info',array("fields" => "names")); ?>
				          <span class="info-cate"><?php echo $term [0]?></span>
				        </div>
				      	<div class= "article_title">
		              		<!--タイトルを取得-->
		                    <h1><?php the_title(); ?></h1>
		                    <!--投稿日を取得-->
		                    <span class="article_date">
		                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
		                    </span>
		              	</div>
						<!-- 本文取得 -->
		              	<div class="article_content"><?php the_content(); ?></div>
		         	<?php endif;?>
		              	<div class="nav-below">
			              <span class="pre_text" >
			                <?php previous_post_link('%link','< 前へ'); ?>
			              </span>
			              <span class="next_text">  
			                    <?php next_post_link('%link','次へ >'); ?>
			              </span>
			          	</div>
					</div>					

	                 <!-- Article lower-->
	                <aside>
	                	<div class="article-lower">
			          	<div class="related relate-container">
			                <?php wp_related_posts();?> 
			         	</div>
			         	 <!-- コメント欄の表示 -->
			          	<div class="coment-container">
			            	<?php comments_template(); ?>
			         	</div>
			         	<div class="article_archive">
			            	<p class="latest_title">お知らせ</p>
			              	<div class="article_loop">

			                	<?php get_template_part('loop','blog');?>

			             	</div>
						</div>
						<div class="list-btn">
			            	<a href="<?php echo home_url(); ?>">TOPへ</a>
			          	</div>
			   			</div>
					</div>

			</div>
			<article class="col-4">
				<?php get_template_part('sidebar'); ?>
			</article>	
		</aside>
	</div>
</article>

<?php get_footer(); ?>






