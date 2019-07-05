<?php
/**
 * Template Name: 固定ページ
 */
get_header(); ?>

<main>
<div class="container">
	<div class="row">	
		<div class="breadcrumbs">
	     <?php breadcrumb(); ?>
		</div>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = $query_split[1];
} // foreach

$search = new WP_Query($search_query);
?>

<?php //echo get_search_query(); ?>


<h1><?php the_search_query(); ?> の検索結果</h1>
 
        <?php
        if (have_posts() && get_search_query()) : 
            while (have_posts()) :
            the_post();
            get_template_part( 'template-parts/post/content', 'excerpt' );
        endwhile;
        ?>
 
        <?php else : ?>
            <div class="col-full">
                <div class="wrap-col">
                    <p>検索キーワードに該当する記事がありませんでした。</p>
                </div>
            </div>
        <?php endif; ?>




































<?php if(have_posts() ):?>
<?php while(have_posts()): the_post(); ?> 
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
		<?php endwhile; ?>
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