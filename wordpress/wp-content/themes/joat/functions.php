<?php

// --------------------------------------------------------------------------
// CATEGORIES (display)
// --------------------------------------------------------------------------
function query_categories() {
	$cats = get_the_category();
	$category_class = "";
	$category_id = $cats[0]->cat_ID;

	if (in_array($category_id, array(21,31,71,62))) $category_class = "cat-content";
	else if (in_array($category_id, array(22,32,72,63))) $category_class = "cat-influences";
	else if (in_array($category_id, array(24,34,73,64))) $category_class = "cat-medias";
	else if (in_array($category_id, array(23,33,74,65))) $category_class = "cat-pr";
	else if (in_array($category_id, array(18,19,20,67,68,69))) $category_class = "cat-job";

	return array('name' => $cats[0]->name, 'category' => $category_class);
	// foreach ($cats as $cat) {
	//   echo '<a href="'.get_category_link($cat->cat_ID).'">'.$cat->name.'</a>';
	// }
}



// --------------------------------------------------------------------------
// CATEGORY PARENT ID
// --------------------------------------------------------------------------
function category_parent($catid){
  $category = get_category($catid);
  return $category->category_parent;
  // if ($category->category_parent > 0){ // has parent
  // 	return true;
  // }
  // return false;
}



// --------------------------------------------------------------------------
// DISABLE UPDATES
// https://www.wpoptimus.com/626/7-ways-disable-update-wordpress-notifications/
// --------------------------------------------------------------------------
add_action('after_setup_theme','remove_core_updates');
function remove_core_updates() {
	if(! current_user_can('update_core')){return;}
	// add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
	add_filter('pre_option_update_core','__return_null');
	add_filter('pre_site_transient_update_core','__return_null');
	add_filter( 'auto_update_plugin', '__return_false' );
	add_filter( 'auto_update_theme', '__return_false' );
}
remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');



// --------------------------------------------------------------------------
// DISPLAY ARTICLE CARD
// --------------------------------------------------------------------------

function displayArticleCard() {
	// global $post;
	// $date_post_old = strtotime( "2019-01-01" );
	// $date_post = strtotime( $post->post_date );
	if (get_the_date('Y') > 2018) $category_array = query_categories();

	echo '<a class="card card--article fade-up" href="'.get_the_permalink().'">';
		// Display category name over the card.
		if (get_the_date('Y') > 2018) {
			echo '<span class="card-top '.$category_array['category'].'">';
				echo $category_array['name'];
			echo '</span>';
		}
		else {
			echo '<span class="card-top">';
				echo 'Made in';
			echo '</span>';
		}

		// Display the card.
		echo '<!--'.get_the_post_thumbnail_url(null, 'large').'-->';
		// if (has_post_thumbnail() && get_the_date('Y') >= 2018 && get_the_date('n') >= 7) {
		if (has_post_thumbnail() && get_the_post_thumbnail_url(null, 'medium') != '') {
			echo '<span class="card-image-container has">';
			echo '<span class="card-image" style="background-image: url('.get_the_post_thumbnail_url(null, 'large').')"></span>';
			echo '</span>';
		}
		else {
			echo '<span class="card-image-container else">';
			echo '<span class="card-image" style="background: #f7f7f7 url(/wp-content/themes/madein/images/madein-logo.png) center no-repeat; background-size: 165px auto;"></span>';
			echo '</span>';
		}
		echo '<span class="card-article-title">'.get_the_title().'</span>';
		echo '<span class="card-plus"><span class="card-plus-content">+</span></span>';
	echo '</a>';
}


// --------------------------------------------------------------------------
// DISPLAY PROJECT CARD
// --------------------------------------------------------------------------

function displayProjectCard() {
	echo '<a class="card fade-up" href="'.get_the_permalink().'">';
		if (has_post_thumbnail()) {
			echo '<span class="card-image-container">';
			echo '<span class="card-image" style="background-image: url('.get_the_post_thumbnail_url(null, 'large').')"></span>';
			echo '</span>';
		}
		else {
			echo '<span class="card-image-container">';
			echo '<span class="card-image" style="background-image: url(https://picsum.photos/400/300/?blur)"></span>';
			echo '</span>';
		}
		echo '<span class="card-article-title">'.get_the_title().'</span>';
	echo '</a>';
}


// --------------------------------------------------------------------------
// DISPLAY TALENT CARD
// --------------------------------------------------------------------------

function displayTalentCard() {
	echo '<a class="card fade-up" href="'.get_the_permalink().'">';
		if (has_post_thumbnail()) {
			echo '<span class="card-image-container">';
			echo '<span class="card-image" style="background-image: url('.get_the_post_thumbnail_url(null, 'large').')"></span>';
			echo '</span>';
		}
		else {
			echo '<span class="card-image-container">';
			echo '<span class="card-image" style="background-image: url(https://picsum.photos/400/300/?blur)"></span>';
			echo '</span>';
		}
		echo '<span class="card-article-title">'.get_the_title().'</span>';
	echo '</a>';
}


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
// LOCATIONS
// Used in footer
// --------------------------------------------------------------------------

function query_locations() {
	// WP_Query arguments
	$args = array (
		'nopaging'               => false, // Must be false for posts_per_page to apply
		'order'                  => 'ASC',
		'orderby'                => 'date',
		'post_type'              => array( 'locations' ),
		'post_status'            => array( 'publish' ),
		'posts_per_page' => 2
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$address = get_field('address');
			$email = get_field('email');
			echo '<address class="footer-location">';
				echo '<h4 class="footer-heading">'.get_the_title().'</h4>';
				echo '<a target="_blank" class="footer-location-link" href="https://www.google.com/maps/search/?api=1&query='.urlencode(str_replace("<br />", " ", $address)).'">';
					echo $address.'<br>';
				echo '</a>';
				echo '<a target="_blank" class="footer-location-link" href="mailto:'.$email.'">'.$email.'</a><br>';
				echo get_field('number');
			echo '</address>';
		}
	} else {
	}

	// Restore original Post Data
	wp_reset_postdata();
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
// RECENT ARTICLES
// --------------------------------------------------------------------------

function query_articles($amount) {
	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'post' ),
		'post_status'            => array( 'publish' ),
		'nopaging'               => false,
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'         => $amount
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			displayArticleCard();
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
}


// --------------------------------------------------------------------------
// RECENT PROJECTS (case studies)
// --------------------------------------------------------------------------

function query_projects($amount, $categories) {
	$paging = true;
	if (is_front_page()) echo $paging = false;

	// WP_Query arguments
	$args = array (
		'cat'                    => $categories,
		'nopaging'               => $paging,
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'         => $amount,
		'post_status'            => array( 'publish' ),
		'post_type'              => array( 'case_studies' )
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			displayProjectCard();
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
}



// --------------------------------------------------------------------------
// SEARCH RESULTS PER PAGE
// https://www.wpexplorer.com/limit-wordpress-search/
// --------------------------------------------------------------------------
function myprefix_search_posts_per_page($query) {
    if ( $query->is_search ) {
        $query->set( 'posts_per_page', '100' );
    }
    return $query;
}
add_filter( 'pre_get_posts','myprefix_search_posts_per_page' );



// --------------------------------------------------------------------------
// SVG SUPPORT
// --------------------------------------------------------------------------

add_filter('upload_mimes', function($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
});


// --------------------------------------------------------------------------
// TALENTS
// --------------------------------------------------------------------------

function query_talents($amount, $categories) {
	// WP_Query arguments
	$args = array (
		'cat'                    => $categories,
		'nopaging'               => false,
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'         => $amount,
		'post_status'            => array( 'publish' ),
		'post_type'              => array( 'talents' )
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			displayTalentCard();
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
}


// --------------------------------------------------------------------------
// THEME SUPPORT
// --------------------------------------------------------------------------

add_theme_support( 'post-thumbnails' );


// --------------------------------------------------------------------------
// USER PROFILE - CONTACT INFO
// https://thomasgriffin.io/how-to-add-custom-user-contact-info-in-wordpress/
// --------------------------------------------------------------------------

add_filter( 'user_contactmethods', 'tgm_io_custom_contact_info' );
/**
 * Removes legacy contact fields and adds support for new ones.
 *
 * @param array $fields  Array of default contact fields.
 * @return array $fields Amended array of contact fields.
 */
function tgm_io_custom_contact_info( $fields ) {

	// Remove the old, unused fields.
	unset( $fields['googleplus'] );
	// unset( $fields['yim'] );
	// unset( $fields['jabber'] );

	// Add fields.
	$fields['linkedin'] = __('LinkedIn URL');
	$fields['instagram'] = __('Instagram URL');
	$fields['phone'] = __('Phone');

	// Return the amended contact fields.
	return $fields;
}


// --------------------------------------------------------------------------
// USER PROFILE - EXTRA FIELDS
// https://wordpress.stackexchange.com/questions/214719/how-do-i-add-a-field-on-the-users-profile-for-example-country-age-etc
// --------------------------------------------------------------------------





// --------------------------------------------------------------------------
// LOAD MORE ARTICLES
// --------------------------------------------------------------------------
function load_posts_by_ajax_callback() {
		check_ajax_referer('load_more_posts', 'security');
		$paged = $_POST['page'];
		$posts_per_page = 3;
		$args = array(
			'post_type'              => array( 'post' ),
			'post_status'            => array( 'publish' ),
			// 'nopaging'               => false,
			'offset'                 => 4 + $posts_per_page * $paged,
			// 'order'                  => 'DESC',
			// 'orderby'                => 'date',
			'posts_per_page'         => $posts_per_page,
			'paged' => $paged
		);
		$my_posts = new WP_Query( $args );
		if ($my_posts->have_posts()) {
			while ($my_posts->have_posts()) {
				$my_posts->the_post();
				displayArticleCard();
			}
		}
		wp_die();
}
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');




// --------------------------------------------------------------------------
// LOAD MORE PROJECTS
// --------------------------------------------------------------------------
function load_projects_by_ajax_callback() {
		check_ajax_referer('load_more_posts', 'security');
		$paged = $_POST['page'];
		$posts_per_page = 4;
		$args = array(
			'post_type'              => array( 'case_studies' ),
			'post_status'            => array( 'publish' ),
			'offset'                 => -2 + $posts_per_page * $paged,
			'posts_per_page'         => $posts_per_page,
			'paged' => $paged
		);
		$my_posts = new WP_Query( $args );
		if ($my_posts->have_posts()) {
			while ($my_posts->have_posts()) {
				$my_posts->the_post();
				displayProjectCard();
			}
		}
		wp_die();
}
add_action('wp_ajax_load_projects_by_ajax', 'load_projects_by_ajax_callback');
add_action('wp_ajax_nopriv_load_projects_by_ajax', 'load_projects_by_ajax_callback');


?>
