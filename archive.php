<?php 

	/*
	Template Name:Archives
	*/
	get_header();
	?>

<main>

<div class="article_archive">
            <p class="latest_title">お知らせ</p>
              <div class="article_loop">
                <?php query_posts("posts_per_page=3&paged+$paged"); ?>
                <?php get_template_part('loop', 'blog');?>
              </div>
 </div>

</main>








<?php get_footer(); ?>