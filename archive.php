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
                <?php get_template_part('loop', 'blog');?>
              </div>

              <?php the_posts_pagination(); ?>
 </div>

</main>


