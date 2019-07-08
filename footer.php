 <footer id="footer">

 	<div class="container">
		<div class="row"> 

			<div class="col-sm-6 footer-menu d-flex" > 	

					<?php wp_nav_menu( array( 
						'theme_location'  => 'footer-menu',
						' menu_class ' => ' menu33333 '
				)); ?>

					<div class="footer_img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/sponsor.png" alt="sponcor_img1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/sponsor.png" alt="sponcor_img2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/sponsor.png" alt="sponcor_img3">
					</div>
			
			</div>
				
			<adress class="footer-add col-sm-6">
					<h2 class="footer-text">サンプルサンプル会社</h2>
					<div class="corp-data">
						<ul class="corp-data-left">
							<li>住&emsp;所：◯◯◯◯◯◯◯◯1-2-3</li>
							<li>E-mail：sample@sent.com</li>
						</ul>
						<ul class="corp-data-right">
							<li>電&emsp;&emsp;話：123-456-789</li>
							<li>営業時間：00:00 〜 00:00</li>
						</ul>
					</div>
			</adress>
		
		</div>
	</div>
</footer>

		
		<?php wp_footer(); ?>	
        <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous">
        </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/app.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/jquery.min.js"></script><!--  jQuery 1.7以上  -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/owl.carousel.js"></script>


</body>
</html>
