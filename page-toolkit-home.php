<?php 

  if (!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
    exit;
  }

get_header(); 

//this powered interior page template

	while(have_posts()) {
		the_post(); 
		
  // <!-- Banner Image   -->
  //pageBanner();
?>
<br>
<!--  Main Container -->
<div class="container">

  <div class="main-and-sidebar-wrapper">
      <!--  Left Side -->
      <section class="main">

         <!--  navigation links -->
         <?php //get_template_part('template-parts/content', 'nav-links'); ?>
                 
      	 <div class="container">
      	 	<?php the_content(); ?>	
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
