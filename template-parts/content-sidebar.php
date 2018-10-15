      <aside class="sidebar">
        
          <div class="container">
            <?php 
              if (!is_user_logged_in()) { ?>
                  <a href="<?php echo wp_registration_url(); ?>">
                  <!--<a href="<?php //echo esc_url(site_url('/registration'));  ?>">-->
                  <img class="img-fluid" src="<?php echo get_theme_file_uri('images/JoinIn-Blue.png');?>" alt="Join in">
                    <!--<button type="button" class="btn button-dark-blue btn-block">Join in - Get free Toolkits!</button>-->
                      
                    </a>
              <?php } else { 
                        if (!is_page('toolkit-home')) {
                            ?>
                            <a href="<?php echo esc_url(site_url('/toolkit-home')) ?>">
                            <button type="button" class="btn button-blue btn-block">Click Here for Toolkits</button>
                            </a>
                        <?php 
                        }
                    }
                    ?>
          </div>

          <br>

 

          <!--  Sidebar home-->
          <?php get_template_part('template-parts/content', 'sidebar-home'); ?>

    

      </aside>
