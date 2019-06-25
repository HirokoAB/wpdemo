
<?php 

	/*
	Template Name:Archive-staff
	*/
	get_header();
	?>
<main>
<div class="staff-container container">
	<div class="row">

	<?php  //get_query_var=$wp_quryオブジェクト内の　WP_Queryクラス内のpublic query variabe(今表示しているページ)を取得する　get_query_var($var,$default) $var=取得する変数キー?>


	<?php  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;?>

	<?php 
	$args  = array(
			'paged' => $paged,	
			"post_type" => "staff",
			"posts_per_page" =>4,
			"post_status" => "publish",

	)

	?>

<!-- 	<?php var_dump($args); ?> -->

	<?php $loop = new WP_Query($args);
	if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>
	<?php //if(have_posts()) : //?>
	<?php //while(have_posts()) : the_post(); ?>
	<?php //var_dump($loop); ?>


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
<?php endif; ?>
	</div>
	</div>

              <?php the_posts_pagination(); ?>





</main>

