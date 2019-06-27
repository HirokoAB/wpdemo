 <footer>

 	<div class="footer-container">
	<div class="row ft-conent">
 		<div class="ft-container1 col-8"> 	

			<?php wp_nav_menu( array( 
				'theme_location'  => 'footer-menu',
				' container_id ' => ' menu3-container ',
				'  menu_id' => ' 3 ',
				' menu_class ' => ' menu33333 '
		)); ?>

		
		<ul class="sponsor-container col-5">
		<?php dynamic_sidebar('フッターバ-1'); ?>
		</ul>

		</div>
		
			<div class="footer-corp col-4">
			<h2 class="footer-text">サンプルサンプル会社</h2>
			<div class="corp-data">
			<ul class="corp-data-left">
				<li><span>住</span>所：◯◯◯◯◯◯◯◯1-2-3</li>
				<li><span>E-mail :</span>sample@sent.com</li>
			</ul>
			<ul class="corp-data-right">
				<li><span>電</span>話 ：</span>123-456-789</li>
				<li><span>営業時間：</span>00:00 〜　00:00</li>
			</ul>
			</div>

    </div>
	</div>


    </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/app.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/jquery.min.js"></script><!--  jQuery 1.7以上  -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/assets/js/owl.carousel.js"></script>
		 <?php  wp_footer();?>
  
  </body>
</html>
