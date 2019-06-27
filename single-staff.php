
<?php get_header(); ?>
<main>
<div class="container">
<div class="row">
<div class="single-staff">

<div class="staff-imges">	
<img src="<?php echo wp_get_attachment_url(get_post_meta( $post -> ID,"staff_img",true));?>" >
</div>
<div class="staff-detail-contaner">
<h1 class="staff-name-s"><?php echo get_post_meta( $post -> ID,"staff_name",true); ?></h1>
<h2 class="staff-job-s"><?php echo get_post_meta( $post -> ID,"staff_job",true); ?></h2>
<h2 class="staff-career-s"><?php echo get_post_meta( $post -> ID,"staff_career",true); ?></h2>
<div class="staff-pr"><?php echo get_post_meta( $post -> ID,"staff_pr",true); ?>
	
</div>
</div>



</div>
</div>

<div class="nav-below-staff">
              <span class="pre_text" >
                <?php previous_post_link('%link','< 前へ'); ?>
              </span>
              <span class="next_text">  
                    <?php next_post_link('%link','次へ >'); ?>
              </span>
          </div>
<div class="staff-archive-btn">
            <a href="<?php echo get_post_type_archive_link( 'staff'); ?>">TOP</a>
          </div>          





</div>
</main>
<?php get_footer(); ?> 

<?php  get_footer();?>