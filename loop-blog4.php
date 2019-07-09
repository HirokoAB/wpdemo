
<!-- ここから記事取得のループ -->
	<?php if ( have_posts() ) : ?>
    <?php while(have_posts()) : the_post(); ?>
    	<div class="container">
    	<div class= "row">
        <div class="col-8 archive-container">
	        <div class="post-thumbnail">
	            <a href="<?php the_permalink() ?>">
	            <?php if (has_post_thumbnail()): ?>
	                <?php the_post_thumbnail('medium'); ?>
	            <?php else: ?>
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dori-.jpg" alt="">
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
	                <a class="more-link" href="<?php the_permalink() ?>">続きを読む
	                </a>
		          </div>
		          </div>
	        	</div>

					<span class="archive_date">
						<time><?php echo get_the_date( 'Y/m/d' ); ?></time>
					</span>
	    </div>
	    </div>
	    </div>
    
    <?php endwhile; ?>
                  <?php the_posts_pagination( array(
                    'mid_size' => 5,
              ));  ?>
 </div>
    <?php endif; ?>



