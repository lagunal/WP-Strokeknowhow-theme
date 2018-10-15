<?php

//Force wish posts to be private
function makeWishPrivate($data, $postarr) {
	if ($data['post_type'] == 'wish') {
		if (count_user_posts(get_current_user_id(), 'wish') > 2 && !$postarr['ID']){
			die("You have reached your wish limit.");
		}

		$data['post_content'] = sanitize_textarea_field($data['post_content']);
		$data['post_title'] = sanitize_text_field($data['post_title']);
	}

	if ($data['post_type'] == 'wish' && $data['post_status'] != 'trash') {
		$data['post_status'] = 'private';
	}
	return $data;
}


// add custom field to wp rest API
function stroke_custom_rest() {
    register_rest_field('wish', 'userWishCount', array(
      'get_callback' => function() {return count_user_posts(get_current_user_id(), 'wish');}
    ));
  }