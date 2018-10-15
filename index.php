<?php
// this powered blog page

get_header();

// <!-- Banner Image   -->
//pageBanner();
?>

<!--  Main Container -->
<div class="container">

  <div class="main-and-sidebar-wrapper">
      <!--  Left Side -->
      <section class="main">
         <div class="headline--medium blue-title"><p>Blog home</p></div>
      	 <div class="post-item">
      	 	<?php 
      	 		while(have_posts()){
      	 			the_post(); ?>
					<h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php  the_title();  ?></a></h2>
          <div>
             <?php the_post_thumbnail(); ?>
          </div>
					<div class="headline--small">
						<p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('M.d.Y'); ?> in <?php echo get_the_category_list(', ')?></p>
					</div>

					<?php the_excerpt(); ?>
					<p><a class="btn button-blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
					<hr>
				<?php	
      	 		}
      	 	echo paginate_links();
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