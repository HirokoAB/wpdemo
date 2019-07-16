<?php get_header();  ?>
						
<?php 
	echo <<<EOM
	<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://hiroko.razonalab.com/wordpress_sample/thankyou';
}, false );
</script>
EOM;

 echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>


<?php get_footer();  ?>

