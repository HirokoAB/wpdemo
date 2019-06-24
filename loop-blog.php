<!-- <?php query_posts("posts_per_page=2&paged+$paged"); ?> -->
<!-- <?php
query_posts($query_string . "&orderby=title&posts_per_page=3"); ?> -->
<?php $args = array('post_type'=>'post');
$q = new WP_Query( $args );
 ?>


<!-- ここから記事取得のループ -->
	<?php if ( $q->have_posts() ) : ?>
    <?php while($q->have_posts()) : $q->the_post(); ?>
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
	        	


	    </div>
	    </div>
	    </div>
    
    <?php endwhile; ?>
    <?php endif; ?>



	

