
<?php 

	/*
	Template Name:Archive-staff
	*/
	get_header();
	?>
<main>

						<div class="breadcrumbs">
		            		<?php custom_breadcrumb(); ?>
		          		</div>

	<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;  ?>
	<?php $loop  = new WP_Query(array(
    "paged" => $paged,
    "post_type" => "staff",
    "posts_per_page" => 4,
    "post_status" => "publish"
  	));

 	?>
<div class="staff-container container">
	<div class="row">

	<?php 
	if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>



	<div class="staff-info col-3">
	<div class="staff-img"><img src="<?php echo wp_get_attachment_url(get_post_meta( $post -> ID,"staff_img",true));?>" ></div>
	<h1 class="staff-name"><?php echo get_post_meta( $post -> ID,"staff_name",true); ?></h1>
	<h2 class="staff-job"><?php echo get_post_meta( $post -> ID,"staff_job",true); ?></h2>
	<div class="staff-more"><a href="<?php the_permalink();?>">
		詳しい情報を見る
	</a>
	</div>
	</div>


<?php endwhile;?>
	 </div>

	<?php echo '<div class="st_nav">'.paginate_links(array(
      'total' => $loop -> max_num_pages
      )); ?>

<?php endif; ?>

	</div>
	           
   
</main>

