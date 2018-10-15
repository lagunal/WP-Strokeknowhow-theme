<?php 

get_header(); 

//this powered interior page template - wish tree

  //if user is not logged in redirect to home page
  if (!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
    exit;
  }

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

         <!--  navigation links -->
         <?php get_template_part('template-parts/content', 'nav-links'); ?>
         
      	 <div class="container">
            <div class="text-center">
              <img class="img-fluid" id="img-tree" style="width: 90%; height: auto;" src="<?php echo get_theme_file_uri('images/Wishtree.jpg');?>" alt="Wish Tree">
            </div>        

            <div class="create-note">
              <h2 class="headline headline--medium">Add your wish</h2>
              <h2 class="headline headline--small">You can add 3 wishes</h2>
              <input class="new-note-title" placeholder="Title" required="required">
              <textarea class="new-note-body" placeholder="Your wish here..." required></textarea>
              <span class="submit-note">Add your wish</span>
              <span class="note-limit-message">You have reached the Wish limit.</span>
            </div>

            <ul class="min-list link-list" id="my-wish">
            <?php
              $userWish = new WP_Query(array(
                 'post_type' => 'wish',
                 'post_per_page' => -1,
                 'author' => get_current_user_id() 
              ));

              while ($userWish->have_posts()) {
                $userWish->the_post(); ?>
                  <li data-id="<?php the_ID(); ?>">
                    <input readonly class="note-title-field" value="<?php echo str_replace('Private: ', '', esc_attr(get_the_title())); ?>">
                    <textarea readonly class="note-body-field"><?php echo esc_textarea(get_the_content()); ?></textarea>
                  </li>
              <?php }
            ?>        
            </ul>

      	 	
      	 </div>

      </section>
<?php } ?>
     <!--  Sidebar -->
     <?php get_template_part('template-parts/content', 'sidebar'); ?>
  </div>
</div>

<?php 
get_footer();
?>
