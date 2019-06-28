
<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;  ?>
<?php var_dump($paged); ?>


<?php 
	$args  = array(
		"paged" => $paged,
		"post_type" => "post",
		"posts_per_page" => 2,
		 "post_status" => "publish"
	)

	?>


<!-- ここから記事取得のループ -->

	<?php $loop = new WP_Query($args);
	if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>

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
    	<?php //the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
    <?php endif; ?>





	   <?php $pagination = get_the_posts_pagination(); ?>
       <?php  
      if (is_null($pagination)){
        echo 'null';
      }else{
        echo(var_dump ($pagination)).'これが中身' ;
      }
 ?>      

	

