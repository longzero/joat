<?php
	$social_class = "";
	$social_host_facebook = array("fb.com", "facebook.com", "www.fb.com", "www.facebook.com");
	$social_host_instagram = array("instagram.com", "www.instagram.com");
	$social_host_linkedin = array("linkedin.com", "www.linkedin.com");
	$social_host_pinterest = array("pinterest.com", "www.pinterest.com", "pinterest.ca", "www.pinterest.ca", "pinterest.fr", "www.pinterest.fr", "pinterest.co", "www.pinterest.co.uk");
	$social_host_spotify = array("spotify.com", "www.spotify.com", "open.spotify.com");
	$social_host_twitter = array("twitter.com", "www.twitter.com");
	$social_host_youtube = array("youtu.be", "youtube.com", "www.youtube.com");
	$social_icon_facebook = '<svg class="team-social-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>';
	$social_icon_instagram = '<svg class="team-social-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';
	$social_icon_linkedin = '<svg class="team-social-icon" xmlns="http://www.w3.org/2000/svg" width="2500" height="2389" viewBox="0 5 1036 990"><path d="M0 120c0-33.334 11.667-60.834 35-82.5C58.333 15.833 88.667 5 126 5c36.667 0 66.333 10.666 89 32 23.333 22 35 50.666 35 86 0 32-11.333 58.666-34 80-23.333 22-54 33-92 33h-1c-36.667 0-66.333-11-89-33S0 153.333 0 120zm13 875V327h222v668H13zm345 0h222V622c0-23.334 2.667-41.334 8-54 9.333-22.667 23.5-41.834 42.5-57.5 19-15.667 42.833-23.5 71.5-23.5 74.667 0 112 50.333 112 151v357h222V612c0-98.667-23.333-173.5-70-224.5S857.667 311 781 311c-86 0-153 37-201 111v2h-1l1-2v-95H358c1.333 21.333 2 87.666 2 199 0 111.333-.667 267.666-2 469z"/></svg>';
	$social_icon_pinterest = '<svg class="team-social-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"/></svg>';
	$social_icon_spotify = '<svg class="team-social-icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M19.098 10.638c-3.868-2.297-10.248-2.508-13.941-1.387-.593.18-1.22-.155-1.399-.748-.18-.593.154-1.22.748-1.4 4.239-1.287 11.285-1.038 15.738 1.605.533.317.708 1.005.392 1.538-.316.533-1.005.709-1.538.392zm-.126 3.403c-.272.44-.847.578-1.287.308-3.225-1.982-8.142-2.557-11.958-1.399-.494.15-1.017-.129-1.167-.623-.149-.495.13-1.016.624-1.167 4.358-1.322 9.776-.682 13.48 1.595.44.27.578.847.308 1.286zm-1.469 3.267c-.215.354-.676.465-1.028.249-2.818-1.722-6.365-2.111-10.542-1.157-.402.092-.803-.16-.895-.562-.092-.403.159-.804.562-.896 4.571-1.045 8.492-.595 11.655 1.338.353.215.464.676.248 1.028zm-5.503-17.308c-6.627 0-12 5.373-12 12 0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12z"/></svg>';
	$social_icon_twitter = '<svg class="team-social-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>';
	$social_icon_youtube = '<svg class="team-social-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>';
?>

<section class="container listing-team">
<?php
	if (have_rows('team_member')) {
		while (have_rows('team_member')) {
			the_row();
			$teammate = get_sub_field('teammate');
			if ($teammate) {
				echo '<div class="fade-up team-member">';
					// override $post
					$post = $teammate;
					setup_postdata($post);
					$photo = get_field('photo');
					$title = get_field('title');
					$short_biography = get_field('short_biography');
					$social_networks = get_field('social_networks');
					echo '<div class="team-member-card">';
						if (!empty($photo)) echo '<img class="team-member-image" loading="lazy" src="'.$photo.'">';
						echo '<div class="team-member-content">';
							if (have_rows('social_networks')) {
								echo '<div class="team-social">';
									while (have_rows('social_networks')) {
										the_row();
										$social_url = get_sub_field('social_url');

										// Figure out social network and set social icon
										if ($social_url) {
											$social_host = parse_url($social_url)['host'];
											$social_icon = "";
											if (in_array($social_host, $social_host_facebook)) {
												$social_class = "facebook";
												$social_icon = $social_icon_facebook;
											}
											else if (in_array($social_host, $social_host_instagram)) {
												$social_class = "instagram";
												$social_icon = $social_icon_instagram;
											}
											else if (in_array($social_host, $social_host_linkedin)) {
												$social_class = "linkedin";
												$social_icon = $social_icon_linkedin;
											}
											else if (in_array($social_host, $social_host_pinterest)) {
												$social_class = "pinterest";
												$social_icon = $social_icon_pinterest;
											}
											else if (in_array($social_host, $social_host_spotify)) {
												$social_class = "spotify";
												$social_icon = $social_icon_spotify;
											}
											else if (in_array($social_host, $social_host_twitter)) {
												$social_class = "twitter";
												$social_icon = $social_icon_twitter;
											}
											else if (in_array($social_host, $social_host_youtube)) {
												$social_class = "youtube";
												$social_icon = $social_icon_youtube;
											}
											echo '<a class="team-social-link '.$social_class.'" target="_blank" href="'.$social_url.'">'.$social_icon.'</a>';
										}
									}
								echo '</div>';
							}
							if (!empty($short_biography)) echo '<br>'.$short_biography;
						echo '</div>';
					echo '</div>';
					echo '<div class="team-member-caption">';
						echo '<div class="team-member-name">'.get_the_title().'</div>';
						if (!empty($title)) echo '<div class="team-member-title">'.$title.'</div>';
					echo '</div>';
					wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				echo '</div>';
			}
		}
		// Hack for justify-content space-between
		// for left alignment
		echo '<div class="team-member"></div>';
		echo '<div class="team-member"></div>';
	}
?>
</section>
