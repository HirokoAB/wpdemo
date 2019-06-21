<?php 

	/*
	Template Name:Archives
	*/
	get_header();
	?>

<main>

<div class="article_archive">
            <p class="latest_title"></p>
           <p><?php echo single_term_title(); ?></p>
              <div class="article_loop">
                <?php query_posts("posts_per_page=3&paged+$paged"); ?>
                <?php get_template_part('loop', 'blog');?>
              </div>
 </div>

</main>


