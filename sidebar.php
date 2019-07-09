
<!-- もしファンクションに'dynamic_sidebar'があれば -->
<div class="sidebar ">
<?php get_template_part('sarchform'); ?>
<?php dynamic_sidebar('サイドバー1'); ?>
<?php echo do_shortcode('[yop_poll id=1]'); ?>
<?php echo do_shortcode('[TheChamp-FB-Comments]'); ?>
<?php echo do_shortcode('[TheChamp-Sharing type="vertical"]'); ?>
</div>