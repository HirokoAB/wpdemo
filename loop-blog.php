

<!-- 表示件数を指定するための配列 -->
	<?php $args =  array('posts_per_page' => 2);?>
	<!-- postsの中に表示件数で指定した数の投稿を代入 -->	　　
	<?php $posts = get_posts($args);?>
	<?php if (have_posts()): ?>
		<?php foreach ( $posts as $post ): ?>
        <?php setup_postdata($post);?>
        
    <div class="container">  
    <div class="row">
    <div class="col-8 archive-container">
        	<div class="post-thumbnail">
	            <a href="<?php the_permalink() ?>">  
					<?php if (has_post_thumbnail()): ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					<?php else: ?>
						<img src="https://placehold.jp/150x150.png" alt="" height="150", width="150">
					<?php endif; ?>
				</a>
			</div>

		<div class="post-detail">
			<div class="post-upper">
				<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            	<div class="post-meta">
	                <p>
	                    <?php the_time("Y-m-d"); ?>
	                </p>
            	</div>
       		</div>
       		<hr> 
           <div class="post-lower">
           <div class="post-entry">
                <p>
                <?php the_excerpt() ?>
                </p>
          </div>
          <br>
          <div class="post-more">
            <a class="more-link" href="<?php the_permalink() ?>">続きを読む</a>
  		  </div>
  		  </div>
  		 </div>
	</div>
	</div>
	</div>

	<?php endforeach; ?>
		
    <?php endif; ?>

                  <?php 
  the_posts_pagination(); 
?>




	

