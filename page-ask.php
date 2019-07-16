<?php get_header();  ?>


<main>

<div class="container">
	<div class="breadcrumbs">
     <?php custom_breadcrumb(); ?>
</div> 

						
<?php 
	echo <<<EOM
	<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://hiroko.razonalab.com/wordpress_sample/thankyou';
}, false );
</script>
EOM;

 echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>

</main>

<?php get_footer();  ?>

