<?php get_header();  ?>
<div class="container">
	<div class="row">
<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
	</div>
</div>
<?php 
	echo <<<EOM
	<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost/wordpress_sample/thankyou/';
}, false );
</script>
EOM;
		
 ?>

<?php get_footer();  ?>

