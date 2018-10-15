<?php get_header(); 
//this powered home page
?>

    <!-- Page Content -->
    <div class="container">

      <!-- /.row -->
      <div class="row">
        <div class="col-sm-12 text-center mt-5"> 
            <h2 class="blue">Each Day, And Every Night, We’re Here. No Insurance Required.</h2>
            <h2 class="red"><strong>A WORLDWIDE COMMUNITY LEARNING FROM ONE ANOTHER</strong></h2>
        </div>
        <div class="col-sm-9 mt-4">
          <div class="ml-5">      
                <h4 class="blue">An <strong class="red">ELEPHANT</strong> is in the room. Every 40 seconds, someone in the US has a stroke.</h4>
          </div>
          <ul class="ml-3 blue">
            <li><h4>More than 875,000 people in the United States each year have a
                stroke and leave hospitals ‘quicker and sicker’ in less than a week.</h4></li>
            <li><h4>1 in 5 people return within the month, mostly from falls at home.</h4></li>
            <li><h4>Stroke can affect talking, understanding what is said and seen, and
                the ability to move about.</h4></li>       
            <li><h4>Medicare covers less than 3 months of physical and speech therapy.</h4></li>         
          </ul>

        </div>
        <div class="col-sm-3 p-0 m-0">
            <img width="100%" height="auto" src="<?php echo get_theme_file_uri() . '/images/elephant.jpg' ?>"/>
        </div>
      </div>
      <div class="col-sm-12 text-center mt-4"> 
          <h4 class="red">Stroke happens. Each stroke is unique. It hits everyone in a family. How they handle it makes all the difference.</h4>
          <h4 class="blue"><strong>ONLY ONGOING FAMILY-LED REHABILITATION PROVIDES A FAMILY THEIR QUALITY OF LIFE.</strong></h4>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-sm-6 my-4">
          <div class="mt-4">
            <!-- Video -->  
              <div class="video">
                <img src="<?php echo get_theme_file_uri('images/patty-video.png'); ?>" alt="Image">
                <img src="<?php echo get_theme_file_uri('images/boton-video.png'); ?>" class="img-fluid" style="position: absolute; width: 15%; height: auto; top:40px; left: 20px;" alt="Image">
                  <!--<iframe width="420" height="345" src="https://www.youtube.com/embed/ZBMY-Vasbb8?autoplay=1">
                  </iframe>-->
              </div>
          </div>
          <div class="mt-4 mr-5 ml-2">
              <img class="img-fluid" src="<?php echo get_theme_file_uri('images/Wishtree.jpg');?>" alt="Wish Tree">
              <div class="text-center">
                  <?php 
                  if (is_user_logged_in()) { ?>
                      <a class="btn button-red-home" href="<?php echo esc_url(site_url('/wish-tree')) ?>">Click here to add a Wish &raquo;</a>
                  <?php 
                  } else { ?>
                      <a class="btn button-red-home" href="<?php echo wp_login_url(); ?>">Click here to add a Wish &raquo;</a>
                  <?php } ?>       
              </div>
          </div>
        </div>
        <div class="col-sm-6 my-4">
          <div class="row">
            <div class="col-sm-12 text-white div-home-blue pt-3">
                <h4>Learn from families with experiences like yours.
                    Share what you know.</h4>
                <?php 
                if (!is_user_logged_in()) { ?>
                    <p>
                        <a class="btn button-red-home float-right" href="<?php echo wp_registration_url(); ?>">Click here to JOIN IN &raquo;</a>
                    </p>
                <?php } ?>    
            </div>
            <div class="col-sm-8 my-4">
                <h3 class="blue"><u><strong>Get a New eBook</strong></u></h3>
                <p>
                  Men, women and their families tell you what
                  it takes to make life work again after stroke.
                  Doctors, nurses and therapists weigh in.
                </p>
                <p>
                  <a class="btn button-red-home" target="_blank" href="https://www.amazon.com/Stroke-Know-How-Florence-Weiner-ebook/dp/B07GPXR4L2/ref=sr_1_1/142-2431782-1077211?s=books&ie=UTF8&qid=1539110939&sr=1-1&keywords=9781543943696">Click here for English &raquo;</a>
                </p>
                <p>
                  <a class="btn button-red-home" target="_blank" href="https://www.amazon.com/Stroke-Know-How-Hombres-Cerebral-Familiares-ebook/dp/B07J1VP18W/ref=sr_1_1?s=books&ie=UTF8&qid=1539111241&sr=1-1&keywords=9781543949643">Click here for Spanish &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4 my-4">
                <img class="img-fluid" style="width: 80%; height: auto;" src="<?php echo get_theme_file_uri('images/BookCover.jpg');?>" alt="Stroke Know How E-Book">
            </div>
            <div class="col-sm-8 my-4">
                <h3 class="blue"><u><strong>Get the new App</strong></u></h3>
                <p>
                  Home care after a stroke in the palm of your
                  hand. An information station and real time
                  interactive resources for phone or computer.
                </p>
                <p>
                    <a class="btn button-red-home" href="#">Click here to Order &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4 my-4">
                <img class="img-fluid" style="width: 80%; height: auto;" src="<?php echo get_theme_file_uri('images/app.jpg');?>" alt="App">
            </div>
            <div class="col-sm-8 my-4">
                <h3 class="blue"><u><strong>Get 5 Interactive Toolkits</strong></u></h3>
                <p>
                  Create a daily schedule. Keep track of your
                  physical therapy, helpers. Organize your
                  medications. Be ready for any emergency.
                </p>
                <p>
                <?php 
                if (!is_user_logged_in()) { ?>
                    <a class="btn button-red-home" href="<?php echo wp_registration_url(); ?>">Click here to Toolkits &raquo;</a>
                <?php } else {
                    if (!is_page('toolkit-home')) {
                      ?>
                        <a class="btn button-red-home" href="<?php echo esc_url(site_url('/toolkit-home')) ?>">Click here to Toolkits &raquo;</a> 
                    <?php 
                    }
                } ?>  
                </p>
            </div>
            <div class="col-sm-4 my-4">
            <?php 
                if (!is_user_logged_in()) { ?>
                    <a href="<?php echo wp_registration_url(); ?>"> <img class="img-fluid" style="width: 80%; height: auto;" src="<?php echo get_theme_file_uri('images/toolkit-collage.png');?>" alt="Toolkits"></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url(site_url('/toolkit-home')) ?>"> <img class="img-fluid" style="width: 80%; height: auto;" src="<?php echo get_theme_file_uri('images/toolkit-collage.png');?>" alt="Toolkits"></a>
                <?php } ?>
            </div>
          </div>
        </div>

      </div>
      <!-- Social buttons -->
      <div class="col-sm-12 text-center">
            <h3 class="blue"><u><strong>Follow us!</strong></u></h3>
            <!--Facebook-->
            <a href="https://www.facebook.com/strokeknowhowfl" class="fb-ic" target="_blank">
                <img class="mr-3 img-fluid" src="https://winterparkrealestatecbmp.com/application/files/7615/1812/8359/facebook-icon-preview-200x200.png" style="width: 80px;"/>
            </a>
            <!--Twitter-->
            <a href="https://www.twitter.com/strokeknowhow" class="tw-ic" target="_blank">
                <img class="mr-3 img-fluid" src="https://vignette.wikia.nocookie.net/pokemon/images/9/92/Twitter_Icon.png/revision/latest?cb=20170420142741" style="width: 80px;"/>
            </a>
            <!--Google +-->
            <a href="https://plus.google.com/110012819999746705343" class="gplus-ic" target="_blank">
                <img class="mr-3 img-fluid" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/google_circle_color-512.png" style="width: 60px;"/>
            </a>
            <!--you tube-->
            <a href="https://www.youtube.com/channel/UCnVb67KwlNqc0__RCah_B1g" class="li-ic" target="_blank">
                <img class="mr-3 img-fluid" src="https://i.pinimg.com/originals/09/0e/dc/090edc40e93550add3fe74404a9f1113.jpg" style="width: 70px;"/>
            </a>     
            <!--Instagram-->
            <a href="https://www.instagram.com/strokeknowhowfl" class="ins-ic" target="_blank">
                <img class="mr-3 img-fluid" src="https://png.pngtree.com/element_our/md/20180301/md_5a9797d18f418.png" style="width: 80px;"/>
            </a>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <?php
    get_footer();
    ?>

