<?php
/**
 * Template Name:Search Page
 */
get_header(); ?>

<main>
<div class="container">
	<div class="row">	
		<div class="breadcrumbs">
	     <?php breadcrumb(); ?>
		</div>
		<div><?php get_search_form(); ?></div>

		<div class="list-btn">
		     <a href="<?php echo home_url(); ?>">TOPへ</a>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>