<?php
	$counter = 0;
	$field_group = "module";
	// if (ICL_LANGUAGE_CODE == "fr") $field_group = "module_fr";

	if (have_rows($field_group)) { // check if the flexible content field has rows of data
		while (have_rows($field_group)) { // loop through the rows of data
			$counter++;
			the_row();
			// BREADCRUMB
			if (get_row_layout() == 'breadcrumb') {
				include('breadcrumb.php');
			}
			// CENTERED INTRO
			else if (get_row_layout() == 'centered_intro') { // check current row layout
				include('centered-intro.php');
			}
			// CONTACT INFORMATION
			else if (get_row_layout() == 'contact_information') { // check current row layout
				include('contact-information.php');
			}
			// EXTERNAL ARTICLES
			else if (get_row_layout() == 'external_articles') {
				include('external-articles.php');
			}
			// IMAGE FULL WIDTH
			// Replaced with image team

			// else if (get_row_layout() == 'image_full_width') { // check current row layout
			// 	echo '<section><h2>image_full_width</h2> ';
			// 		$image = get_sub_field('image');
			// 		$image_label = get_sub_field('image_label');
			// 		$link_url = get_sub_field('link_url');
			// 		if (!empty($link_url)) echo '<a href="'.$link_url.'">';
			// 			if (!empty($image)) echo '<br>Image: <img src="'.$image.'" width="100">';
			// 			if (!empty($image_label)) echo '<br>'.$image_label;
			// 		if (!empty($link_url)) echo '</a>';
			// 	echo '</section>';
			// 	echo '<hr>';
			// }

			// IMAGE GALLERY PATTERN
			else if (get_row_layout() == 'image_gallery_pattern') {
				include('image-gallery-pattern.php');
			}
			// IMAGE TEAM
			else if (get_row_layout() == 'image_team') { // check current row layout
				include('image-team.php');
			}
			// IMAGE TEXT SIDE BY SIDE
			else if (get_row_layout() == 'image_text_side_by_side') { // check current row layout
				include('image-side.php');
			}
			// IMAGE TEXT SHIFT
			else if (get_row_layout() == 'image_text_shift') { // check current row layout
				include('image-shift.php');
			}
			// IMAGES WITH BIG BUMBER
			else if (get_row_layout() == 'images_with_big_number') {
				include('images-big-number.php');
			}
			// IMAGE WITH CAPTION
			else if (get_row_layout() == 'image_with_caption') { // check current row layout
				include('image-with-caption.php');
			}
			// JOB FREELANCE
			else if (get_row_layout() == 'job_freelance') { // check current row layout
				$job_type = 18;
				include('job-listing.php');
			}
			// JOB INTERNSHIP
			else if (get_row_layout() == 'job_internship') { // check current row layout
				$job_type = 20;
				include('job-listing.php');
			}
			// JOB JOB
			else if (get_row_layout() == 'job_job') { // check current row layout
				$job_type = 19;
				include('job-listing.php');
			}
			// LOCATIONS
			else if (get_row_layout() == 'location_card') {
				include('locations.php');
			}
			// MENU - SERVICES
			else if (get_row_layout() == 'menu_services') { // check current row layout
				include('filter-services.php');
			}
			// METADATA AND SHARE
			else if (get_row_layout() == 'metadata_and_share') { // check current row layout
				include('metadata-and-share.php');
			}
			// NAME TICKER
			else if (get_row_layout() == 'name_ticker') {
				include('ticker.php');
			}
			// OTHER ARTICLES
			else if (get_row_layout() == 'other_articles') {
				if (have_rows('articles')) include('listing-cards.php');
			}
			// OTHER PROJECTS
			else if (get_row_layout() == 'other_projects') {
				if (have_rows('projects')) include('listing-projects.php');
			}
			// PAGE HEADING
			else if (get_row_layout() == 'page_heading') { // check current row layout
				include('page-heading.php');
			}
			// PROJECT LISTING
			else if (get_row_layout() == 'project_listing') { // check current row layout
				include('filter-projects.php');
			}
			// POST AUTHOR
			else if (get_row_layout() == 'post_author') { // check current row layout
				include('post-author.php');
			}
			// POST AUTHOR CONTACT
			else if (get_row_layout() == 'post_author_contact') { // check current row layout
				include('post-author-contact.php');
			}
			// PROCHAINE ETAPE
			else if (get_row_layout() == 'prochaine_etape') { // check current row layout
				include('prochaine-etape.php');
			}
			// RECENT ARTICLES
			else if (get_row_layout() == 'recent_articles') { // check current row layout
				include('recent-articles.php');
			}
			// RECENT PROJECTS (case studies)
			else if (get_row_layout() == 'recent_projects') { // check current row layout
				include('recent-projects.php');
			}
			// REGULAR TEXT
			else if (get_row_layout() == 'regular_text') { // check current row layout
				include('regular-text.php');
			}
			// SECTION NAME
			else if (get_row_layout() == 'section_name') { // check current row layout
				include('section-name.php');
			}
			// SMALL TEXT BLOCK
			else if (get_row_layout() == 'small_text_block') { // check current row layout
				include('small-text-block.php');
			}
			// SOCIAL NETWORKS
			else if (get_row_layout() == 'social_media') {
				include('talent-social.php');
			}
			// TALENT LISTING
			else if (get_row_layout() == 'talent_listing') { // check current row layout
				include('filter-talents.php');
			}
			// TALENT POSTS
			else if (get_row_layout() == 'talent_post') {
				include('talent-post.php');
			}
			// TEAM
			else if (get_row_layout() == 'team_block') {
				include('team.php');
			}
			// TWITTER TWEET
			else if (get_row_layout() == 'twitter_tweet') {
				include('twitter-tweet.php');
			}
			// VIDEO (YOUTUBE)
			else if (get_row_layout() == 'video_youtube') { // check current row layout
				include('youtube.php');
			}
		} // while (have_rows($field_group))
	} // if (have_rows($field_group))
?>
