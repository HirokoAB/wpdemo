<?php
/**
 * Template Name: test
 */
get_header(); ?>

<main>
	<?php get_template_part('sarchform'); ?>
</main>

<?php get_footer(); ?>

<?php echo do_shortcode('[wpdm_package id="504"]'); ?>

<a class="wpdm-download-link btn btn-default " rel="nofollow" href="#" onclick="location.href='http://localhost/wordpress_sample/download/%e3%83%80%e3%82%a6%e3%83%b3%e3%83%ad%e3%83%bc%e3%83%89%e3%82%b5%e3%83%b3%e3%83%97%e3%83%ab/?wpdmdl=504&amp;refresh=5d240d51cea321562643793';return false;">資料のダウンロードはこちら</a>

<a href="#" onclick="location.href='http://localhost/wordpress_sample/download/%e3%83%80%e3%82%a6%e3%83%b3%e3%83%ad%e3%83%bc%e3%83%89%e3%82%b5%e3%83%b3%e3%83%97%e3%83%ab/?wpdmdl=504&amp;refresh=5d240d51cea321562643793';return false;">テスト</a>

<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>



<?php get_template_part('form','sns'); ?>
