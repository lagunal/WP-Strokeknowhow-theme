<?php

/* ***********
// Includes
 ************/
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/front/loginSignin.php');
include(get_template_directory() . '/includes/theme.php');
include(get_template_directory() . '/includes/backend/customPosts.php');
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/* *************
//  Hooks
***************/
add_action('wp_enqueue_scripts','skh_enqueue'); // js scripts
add_action('after_setup_theme', 'stroke_features'); // theme features
add_filter('wp_insert_post_data','makeWishPrivate',10,2); //Force wish posts to be private
add_action('rest_api_init', 'stroke_custom_rest'); // add custom field to wp rest API
add_filter( 'register_url', 'my_register_page' ); // filter to add registration page
add_filter('login_url', 'my_login_url', 10, 3); // filters to add login page
add_filter( 'authenticate', 'verify_username_password', 1, 3);
add_action( 'wp_login_failed', 'login_failed');
add_action( 'wp_logout','logout');
add_filter('login_headerurl','ourHeaderUrl');//Customize Login screen
add_filter('login_headertitle','loginTitle');//Customize Login screen
add_action( 'login_enqueue_scripts', 'my_login_logo' );//Customize Login screen
add_action('login_enqueue_scripts','loginCSS');//Customize Login screen
add_action('register_form', 'add_fields_to_users_register_form' ); // add aditional filed to register form
add_action('user_register', 'save_user_fields'); // save aditional field to data base
add_action( 'show_user_profile', 'add_custom_fields_to_users' );// add additional field to edit user profile in dashboard
add_action( 'edit_user_profile', 'add_custom_fields_to_users' ); // add additional field to edit user profile in dashboard
add_action( 'personal_options_update', 'save_user_fields' );
add_action( 'edit_user_profile_update', 'save_user_fields' );

//function to dynamic banner image
function pageBanner(){

	if (get_field('page_banner_background_image')) {
		$image = get_field('page_banner_background_image')['sizes']['pageBanner'];
	} else {
		$image = get_theme_file_uri('images/BannerFW.jpg');
	}
?>
	<div class="bg_interior_page" style="background-image: url(<?php echo $image; ?>);">
	</div>

<?php }

//redirect suscriber users out of admin and onto homepage
function redirectSubsToFrontend() {
	$currentUser = wp_get_current_user();

	if (count($currentUser->roles)  == 1 && $currentUser->roles[0] == 'subscriber')  {
		wp_redirect(site_url('/'));
		exit;
	}
}
add_action('admin_init', 'redirectSubsToFrontend');

//redirect user after registration
/*add_filter( 'registration_redirect', 'my_redirect_home' );
function my_redirect_home( $registration_redirect ) {
	return home_url();
}*/



//Shows no admin bar to subscriber user
function noAdminBar() {
	$currentUser = wp_get_current_user();

	if (count($currentUser->roles)  == 1 && $currentUser->roles[0] == 'subscriber')  {
		show_admin_bar(false);
	}
}
add_action('wp_loaded', 'noAdminBar');

//auto login after registration
function auto_login_new_user( $user_id ) {
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);
        //wp_redirect( home_url() );
        //exit;
}
 add_action( 'user_register', 'auto_login_new_user' );










