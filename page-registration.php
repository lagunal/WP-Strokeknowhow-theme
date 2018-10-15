
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
    /*form styles*/
    #msform {
      width: 450px;
      margin: 50px auto;
      text-align: center;
      position: relative;
    }
    #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 3px;
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      padding: 20px 30px;
      box-sizing: border-box;
      width: 80%;
      margin: 0 10%;
      
      /*stacking fieldsets above each other*/
      position: relative;
    }
    /*inputs*/
    #msform input, #msform textarea {
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
    #msform input::placeholder {
      color: black;
      font-size: 18px;
      font-weight: bold;
    }
    /*buttons*/
    #msform .action-button {
      width: 80%;
      background: red;
      color: white;
      border: 0 none;
      border-radius: 1px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px;
    }
    #msform .action-button:hover, #msform .action-button:focus {
      box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
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
      font-size: 12px;
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
      </div> 

      <div class="container-form">
          <!-- form -->
          <form id="msform" method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']);  ?>">

            <!-- fieldset -->
            <fieldset>
              <h2 class="fs-title">JOIN IN</h2>
              <input type="text" name="username" placeholder="User Name" />
              <input type="text" name="household" placeholder="Family name" />
              <input type="email" name="email" placeholder="Email" required />
              <input type="password" name="pass" placeholder="Shared Password" />
              <!--<input type="password" name="cpass" placeholder="Confirm Shared Password" />-->
              <h5 class="fs-subtitle">By clicking Create Account, I agree to the terms and conditions and privacy policy. I also agree that I am the legal guardian of any user under age 13 that I add to my family account and consent to their use of Strokeknowhow.org &#169</h5>
              <h5 class="fs-subtitle" style="font-size: 18px;">Have an account already? <a href="<?php echo wp_login_url(); ?>">Login</a></h5>
              <input type="submit" name="submit" class="next action-button" value="Create Account" />
            </fieldset>
            
          </form>
    </div>
</div>

<?php 
if (isset( $_POST['submit'] )) { //El formulario ha sido enviado
  global $reg_errors;
  $reg_errors = new WP_Error;
 
  $user = sanitize_text_field($_POST['username']);
  $household= sanitize_text_field($_POST['household']);
  $email = sanitize_email($_POST['email']);
  $pass = sanitize_text_field($_POST['pass']);
  
 
  //Comprobamos que los campos obligatorios no están vacios
  if ( empty( $user ) ) {
    $reg_errors->add("empty-user", "Name is mandatory");
  }
  if ( empty( $email ) ) {
    $reg_errors->add("empty-email", "e-mail is mandatory");
  }
  if ( empty( $pass) ) {
    $reg_errors->add("empty-pass", "Password is mandatory");
  }
  //Comprobamos que el email tenga un formato de email válido
  if ( !is_email( $email ) ) {
    $reg_errors->add( "invalid-email", "Email is not valid format" );
  }
  
  if (username_exists($user)) {
    $reg_errors->add("user-exists", "User already exists.");
  }

  if ( is_wp_error( $reg_errors ) ) {
    if (count($reg_errors->get_error_messages()) > 0) {
      foreach ( $reg_errors->get_error_messages() as $error ) {
        echo "<h3>" . $error . "</h3><br />";
      }
    }
  }
 
  if (count($reg_errors->get_error_messages()) == 0) {
    //$password = wp_generate_password();
 
    $userdata = array(
      'user_login' => $user,
      'user_email' => $email,
      'user_pass' => $pass
    );
 
    $user_id = wp_insert_user( $userdata );
 
    // redirect to toolkit home page and add additional field
    if ( ! is_wp_error( $user_id ) ) {
      wp_redirect(esc_url(site_url('/toolkit-home')));
      update_user_meta( $user_id, 'household', $household );
 
      //wp_new_user_notification( $user_id, 'both' );
    }
  }
}
?>

</body>
</html>

