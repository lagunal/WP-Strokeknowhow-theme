<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stroke Know How</title>
    <?php wp_head() ?>
  </head>

  <body <?php body_class(); ?>>
  
<!--*************** custom menu ***************************-->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <?php
       /*   wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav text-danger',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );*/
      ?>
        <?php 
          //  if (is_user_logged_in()) { ?>
              <a class="button-login-home" href="<?php // echo wp_logout_url(); ?>">Log Out</a>
            <?php 
            //} else { ?>
              <a class="button-login-home" href="<?php //echo wp_login_url(); ?>">Sign In</a>
        <?php //} ?>  
    </div>
  </nav> -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
              <li class="nav-item mx-3">
                <a class="nav-link text-danger" href="<?php echo esc_url(site_url('/')); ?>">Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link text-danger" href="<?php echo esc_url(site_url('/about-us')); ?>">About Us</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link text-danger" href="<?php echo esc_url(site_url('/toolkit-home')); ?>">Wish Tree</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link text-danger" href="<?php echo esc_url(site_url('/wish-tree')); ?>">Interactive Toolkits</a>
              </li>
              <!-- <li class="nav-item mx-3">
                <a class="nav-link text-danger" href="<?php echo esc_url(site_url('/home-care')); ?>">Care at Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link text-danger" href="<?php echo esc_url(site_url('/emergency')); ?>">Emergency</a>
              </li>  -->
              <li class="nav-item mx-3 dropdown">
                <a class="nav-link text-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose your language
                </a>
                <div class="dropdown-menu ml-5" aria-labelledby="navbarDropdown">
                  <a target="_blank" class="dropdown-item" href="http://es.strokeknowhow.org">Spanish</a>
                  <a target="_blank" class="dropdown-item" href="http://fr.strokeknowhow.org">French</a>
                  <div class="dropdown-divider"></div>
                  <a target="_blank" class="dropdown-item" href="http://de.strokeknowhow.org">German</a>
                  <a target="_blank" class="dropdown-item" href="http://hi.strokeknowhow.org">Hindi</a>
                  <a target="_blank" class="dropdown-item" href="http://zh-CN.strokeknowhow.org">Chinese</a>
                </div>
              </li>
          </ul>
              <?php 
              if (is_user_logged_in()) { ?>
                <a class="button-login-home" href="<?php echo wp_logout_url(); ?>">Log Out</a>
              <?php 
              } else { ?>
                <a class="button-login-home" href="<?php echo wp_login_url(); ?>">Sign In</a>
              <?php } ?>   
      </div>
    </nav>

    <!-- Header with Background Image -->
    <div class="container">
      <div class="d-flex">
          <div class="col-sm-3">
              <img class="w-100 h-100" src="<?php echo get_theme_file_uri('images/banner-sun.jpg'); ?>" alt="Banner">
          </div>

          <div class="col-sm-6 d-block">
              <img class="w-100 h-100" src="<?php echo get_theme_file_uri('images/banner-hands.jpg'); ?>" alt="Banner">
          </div>

          <div class="col-sm-3">
              <img class="w-100 h-100" src="<?php echo get_theme_file_uri('images/banner-moon.jpg'); ?>" alt="Banner">
          </div>

      </div>
    </div>

