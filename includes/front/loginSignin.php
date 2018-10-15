<?php

function my_register_page( $register_url ) {
    return home_url( '/registration/' );
}


function my_login_url($login_url, $redirect, $force_reauth) {
    return home_url('/login');
}


function verify_username_password( $user, $username, $password ) {  
	if( $username == "" || $password == "" ) {
		wp_redirect(get_permalink( get_page_by_title('login') ) . "?login=empty");
		exit();
	}
}

function login_failed() {  
	wp_redirect(get_permalink( get_page_by_title('login') ) . '?login=failed' );
	exit();
}

function logout() {  
	wp_redirect(get_permalink( get_page_by_title('login') ) . '?logout=success' );
	exit();
}

function ourHeaderUrl() {
	return esc_url(site_url('/'));
}

function loginCSS() {
	wp_enqueue_style('stroke_know_how_main_styles', get_stylesheet_uri());
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Lato:700');
}

function loginTitle() {
	//return get_bloginfo('name');
	return '';
}

function my_login_logo() { ?>
 <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/SKH_Logo-1b.jpg);
			height:65px;
			width:320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
			padding-top: 0px;
        }
    </style> 
<?php }


function add_fields_to_users_register_form() {
  
    $family_name = ( isset( $_POST['household'] ) ) ? $_POST['household'] : '';?>
   
    <p>
      <label for="household">Household<br />
      <input type="text" id="household" name="household" class="input" size="25" value="<?php echo esc_attr($household);?>"></label>
    </p>
  <?php }
  
   
  
  function save_user_fields ($user_id) {
    if ( isset($_POST['household']) ){
      update_user_meta($user_id, 'household', sanitize_text_field($_POST['household']));
    }
  }
  
  
  
  function add_custom_fields_to_users( $user ) {
    $household = esc_attr( get_the_author_meta( 'household', $user->ID ) );?>
   
    <h3>Additional fields</h3>
   
    <table class="form-table">
      <tr>
        <th><label for="household">Household (Family name)</label></th>
        <td><input type="text" name="household" id="household" class="regular-text" value="<?php echo $household;?>" /></td>
      </tr>
    </table>
  <?php }
  