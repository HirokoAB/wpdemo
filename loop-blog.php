
<!-- 表示件数を指定するための配列 -->
      <?php $args =  array( 
      	'posts_per_page' => 3,
      	'post_type' => 'infomation' );?>

<!-- postsの中に表示件数で指定した数の投稿を代入 --> 　　
      <?php $posts = get_posts($args);?>
	
<!-- ここから記事取得のループ -->
	<?php if( have_posts('')): ?>
		<?php foreach ( $posts as $post ):?> 
			<div class="archive_block">
					<span class="archive_cat">
						<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>
					</span>		

					<span class="archive_date">
						<time><?php echo get_the_date( 'Y/m/d' ); ?></time>
					</span>

					<?php the_title( '<h1><a href="'.esc_url( get_permalink() ).'">','</a><h1>' ); ?>
					</div>
				<?php endforeach; ?>
		
			<?php else: ?>
			
			<p>まだ投稿はありません</p>
		
		<?php endif; ?>



