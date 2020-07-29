<?php

// --------------------------------------------------------------------------
// DISABLE UPDATES
// https://www.wpoptimus.com/626/7-ways-disable-update-wordpress-notifications/
// --------------------------------------------------------------------------
// add_action('after_setup_theme','remove_core_updates');
// function remove_core_updates() {
// 	if(! current_user_can('update_core')){return;}
// 	// add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
// 	add_filter('pre_option_update_core','__return_null');
// 	add_filter('pre_site_transient_update_core','__return_null');
// 	add_filter( 'auto_update_plugin', '__return_false' );
// 	add_filter( 'auto_update_theme', '__return_false' );
// }
// remove_action('load-update-core.php','wp_update_plugins');
// add_filter('pre_site_transient_update_plugins','__return_null');



// --------------------------------------------------------------------------
// LANGUAGE TOGGLE
// http://wpml.org/forums/topic/language-selector-show-language-code-instead-of-full-name-of-language/
// --------------------------------------------------------------------------

function languageToggle(){
	$languages = icl_get_languages('skip_missing=0&orderby=code');
	if(!empty($languages)){
		echo '<div class="language-selector">';
		foreach($languages as $l){
			if(!$l['active']) {
				echo '<div class="lang"><a ';
				if($l['active']) echo 'class="active-language"';
				echo ' href="'.$l['url'].'">';
				// echo $l['native_name']; // Use this to get the name
				// echo $l['translated_name']; // Use this to get the translated name
				echo $l['language_code']; // Use this to get the language code
				echo '</a></div>';
			}
		}
		echo '</div>';
	}
}


// --------------------------------------------------------------------------
// LOAD MORE BUTTON
// --------------------------------------------------------------------------
function load_more_button() {
	$load_more_string = "en voir plus";
	if (ICL_LANGUAGE_CODE=='en') $load_more_string = "more articles";
	return '<div class="fade-up site-button js-load-more">'.$load_more_string.'</div>';
}



// --------------------------------------------------------------------------
// NAVIGATION
// --------------------------------------------------------------------------

function register_my_menu() {
	register_nav_menus(array(
		'header-menu' => __('Header Menu'),
		'footer-menu' => __('Footer Menu')
	));
}
add_action( 'init', 'register_my_menu' );



// --------------------------------------------------------------------------
// THEME SUPPORT
// --------------------------------------------------------------------------

add_theme_support( 'post-thumbnails' );


add_filter('use_block_editor_for_post', '__return_false', 10);
