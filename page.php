<?php
/**
 * Template Name: age-firstpage
 */
get_header(); ?>


<div class="container">
	<div class="breadcrumbs">
     <?php breadcrumb(); ?>
	</div>

<?php if(have_posts()): the_post(); ?> 
	<div class="row kaihsa-img">	
		<?php  the_post_thumbnail()?>
	</div>
	<div class="kaisha-title">	
		<h1><?php the_title();  ?></h1>
	</div>
	<div class="kaihsa_content">
		<?php the_content(); ?>
    </div>
<?php else: ?>
	<p>投稿はありません</p>
<?php endif;  ?>	
<div class="list-btn">
     <a href="<?php echo home_url(); ?>">TOPへ</a>
</div>

</div>
