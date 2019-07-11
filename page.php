<?php
/**
 * Template Name: 固定ページ
 */
get_header(); ?>

<main>
<div class="container">
	<div class="row">	
		<div class="breadcrumbs">
	     <?php custom_breadcrumb(); ?>
		</div>

		<?php if(have_posts()): the_post(); ?> 
			<div class="">	
				<?php  the_post_thumbnail()?>
			</div>
			<div class="title">	
				<h1><?php the_title(); ?></h1>
			</div>
			<div>	
				<time datetime=""><?php echo get_the_date( 'Y-m-d' ); ?></time>
			</div>
			<div class="">
				<?php the_content(); ?>
		    </div>

		<?php else: ?>
			<p>投稿はありません</p>
		<?php endif;  ?>

		<div class="list-btn">
		     <a href="<?php echo home_url(); ?>">TOPへ</a>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>