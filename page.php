<?php get_header(); 

//this powered interior page template

	while(have_posts()) {
		the_post(); 
		
  // <!-- Banner Image   -->
  pageBanner();

?>
<br>
<!--  Main Container -->
<div class="container">

  <div class="main-and-sidebar-wrapper">
      <!--  Left Side -->
      <section class="main">
         <div class="headline--medium blue-title"><p><?php the_field('page_banner_subtitle'); ?></p></div>
         <!--  navigation links -->
         <?php get_template_part('template-parts/content', 'nav-links'); ?>
         
      	 <div class="row">
           <div class="col-md-4">
      	 	    <?php the_post_thumbnail(); ?>
           </div>
             <div class="col-md-8">
               <?php the_content(); ?> 
             </div> 
          </div>
           
          
      	 

      </section>
<?php } ?>
     <!--  Sidebar -->
     <?php //get_template_part('template-parts/content', 'sidebar'); ?>
  </div>
</div>

<?php 
get_footer();
?>
