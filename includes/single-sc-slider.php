<?php get_header(); 
//Enqueing Scripts and styles
wp_enqueue_script( 'bootstrap' );
wp_enqueue_style( 'bootstrap');
wp_enqueue_style('gt-portfolio');
?>
<!--Wrapper Content Start-->
<div class="gt-wrapper">
   <!-- Inner Banner Start -->
   <section class="gt-inner-banner">
      <div class="container">
         <div class="gt-inner-banner-outer">
            <h2>
			<?php 
				global $post;
				echo get_the_title($post->ID);
			?>
			</h2>
         <!--Breadcrumb Start-->
			<?php gt_custom_breadcrumbs(); ?>
			<!--Breadcrumb Ends -->
         </div>
      </div>
   </section>
   <!-- Inner Banner End -->
   <!-- Blog Detail Section Start -->
   <section class="gt-blog-section">
      <div class="container">
         <div class="row">
         <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
            <div class="col-md-12">
               <!-- Portfolio Item Start -->
               <div class="gt-blog-item gt-blog-detail">
                  <!--Portfolio Thumb Start-->
                  <?php if(has_post_thumbnail()){?>
                  <figure class="gt-thumb">
                     <?php the_post_thumbnail('large');?>
                  </figure>
                  <!--Portfolio Thumb End-->
                  <?php } ?>
                  <div class="gt-text">
                     <h3><?php the_title(); ?> </h3>
                     <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
                        <li><i class="fa fa-clock-o"></i> <?php the_author(); ?></li>
                     </ul>
                     <?php the_content(); ?>
                  </div>
               </div>
               <!-- Slider Item End -->
               <div class="gt-post-navigation">
                  <?php previous_post_link(); ?>    <?php next_post_link(); ?>
               </div>
            </div>
        <?php } } ?>
         </div>
      </div>
   </section>
   <!-- Gallery Detail Section End--> 
</div>
<!--Wrapper Content End-->
<?php get_footer(); ?>