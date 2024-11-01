<?php 
	//Showing slider Carousels
?>
	<!--Wrapper Content Start-->
	<div class="gt-wrapper">
		<!--Slider Section Start-->
		<section class="gt_slider-section gt-carousel-outer">
			<div class="container-fluid">
				<?php 				
					$args = array(
						'post_type' => 'sc-slider',
						'posts_per_page' => 6,
						'post_status' => 'publish'
					);
				?>
				<!--Merge Slider Start-->
				<div class="owl-carousel gt-merge-slider-v1" id="gt-merge_slider">
					<?php 
					global $post;
					$gt_slider_posts = new WP_Query($args);
					if($gt_slider_posts->have_posts()){
					while($gt_slider_posts->have_posts()){ 
					$gt_slider_posts->the_post(); 
					?>				
					<!--Slider Item Start-->
					<div class="gt-slider-item">
						<img src="<?php $post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); echo $post_image; ?>"/>
												
					</div><!--Slider Item End-->
					<?php 
					} wp_reset_postdata(); } else {
						echo __('No Slide Found, check documentation to create one', 'gt-portfolio');
					}
					?>
				</div>
				<!-- Merge Slider Ends -->
			</div>
			<!--Container Ends-->
		</section>
		<!--Slider Section End-->
	</div>
	<!--Wrapper Content End-->