<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset ="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php //wp_head(); ?>
  <style>
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

    /*basic reset*/
    * {margin: 0; padding: 0;}

    html {
      height: 100%;
      /*Image only BG fallback*/
      
      /*background = gradient + image pattern combo*/
      /*background: 
        linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));  */
    }

    body {
      font-family: helvetica, arial, verdana;
    }
    a {
        text-decoration: none;
    }
    /*form styles*/
    #msform {
      width: 450px;
      margin: 50px auto;
      text-align: center;
      position: relative;
    }
    #msform {
      background: white;
      border: 0 none;
      border-radius: 3px;
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      padding: 20px 30px;
      box-sizing: border-box;
      width: 100%;
      margin: 10% 10%;
      
      /*stacking fieldsets above each other*/
      position: relative;
    }
    /*inputs*/
    #msform input {
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
      width: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: black;
      font-size: 18px;
    }
    p label {
      color: black;
      font-size: 22px;
      font-weight: bold;
    }

    /*buttons*/
    .button {
        width: 100px;
        background: red;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }
    #login-submit {
        color: white !important;
    }

    /*headings*/
    .fs-title {
      font-size: 24px;
      text-transform: uppercase;
      /*color: #fa836b;*/
      color: red;
      margin-bottom: 10px;
    }
    .fs-subtitle {
      font-weight: 'bold';
      font-size: 16px;
      color: black;
      margin-bottom: 20px;
    }

    .flexcontainer {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .containter-logo {
      display: flex;
    }
    .container-form {
      display: flex;

    }
    .title {
        color: red;
        margin-top: 20px;
        font-size: 22px;
        text-align: center;
        font-family: helvetica;
        font-weight: bold;
    }
  </style>

</head>


<body>
<div class="flexcontainer">

      <div class="containter-logo">
                    <a href="<?php echo esc_url(site_url('/')) ?>"><img width="90%" src="../wp-content/plugins/custom-toolkit/assets/images/SKH_Logo-1b.jpg" ></a>                 
      </div>

      <div>
         <p class="title">We are a worldwide community learning from one another</p>
         <p><?php 
               if (isset( $_GET['login'] ) && $_GET['login'] == 'failed') { ?>
                <div class="title">
                    <p><?php _e( 'FAILED: Invalid credentials, Try again!', 'AA' ); ?></p>
                </div>
               <?php } ?></p>
      </div> 

      <div class="container-form">
            <!-- form -->
            <?php
                if ( ! is_user_logged_in() ) { // Display WordPress login form:
                    $args = array(
                        'redirect' => admin_url(), 
                        'form_id' => 'msform',
                        'label_username' => __( 'Username' ),
                        'label_password' => __( 'Shared Password' ),
                        'label_log_in' => __( 'Log In' ),
                        'id_submit' => 'login-submit',
                        'remember' => false
                    );
                    wp_login_form( $args );
                } else { // If logged in:
                    wp_loginout( home_url() ); // Display "Log Out" link.
                    echo " | ";
                    wp_register('', ''); // Display "Site Admin" link.
                }
            ?>
           
    </div>
        
        <h5 class="fs-subtitle">Don't have an account yet? <a href="<?php echo wp_registration_url(); ?>">Register</a></h5>
        <a href="<?php echo esc_url(site_url('/wp-login.php?action=lostpassword')) ?>"><h5 class="fs-subtitle">Lost your password ?</h5></a>
        <a href="<?php echo esc_url(site_url('/')); ?>"><h5 class="fs-subtitle">&larr; Back to StrokeKnowHow.org</h5></a>
</div>




</body>
</html>
