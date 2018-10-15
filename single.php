<?php
// this powered blog post detail page

  get_header();

// <!-- Banner Image   -->
//pageBanner();
?>


<!--  Main Container -->
<div class="container">

  <div class="main-and-sidebar-wrapper">
      <!--  Left Side -->
      <section class="main">
        
      	 <div class="post-item">
   			<?php
      	 		while(have_posts()){
      	 			the_post(); ?>

          <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a></p>
          </div>          
          
          <div class=" headline headline--medium blue-title">
            <span class=""><?php the_title(); ?></span>
          </div>
					
          <div class="headline--small">
						<p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', ')?></p>
					</div>

             <div class="row">
               <div class="col-md-4">
                  <?php the_post_thumbnail(); ?>
               </div>
                 <div class="col-md-8">
                   <?php the_content(); ?> 
                 </div> 
              </div>
				<?php	
      	 		}
      	 	?>	
      	 </div>

  			
      </section>

     <!--  Sidebar -->
     <?php //get_template_part('template-parts/content', 'sidebar'); ?>
  </div>
</div>


<?php
  get_footer();

?>