<?php
	$position = get_sub_field('small_or_large');
	if (have_rows('locations')) {
		echo '<section class="listing-cards location-cards '.$position.'">';
			while (have_rows('locations')) {
				the_row();
				$location = get_sub_field('location');
				if ($location) {
					// override $post
					$post = $location;
					setup_postdata($post);
					$photo = get_field('photo');
					$icon = get_field('icon');
					$number = get_field('number');
					$email = get_field('email');
					$address = get_field('address');
					if ($position == "small") {
						echo '<div class="fade-up location-card">';
							if (!empty($icon)) {
								echo '<div class="location-icon"><img class="location-icon-image" loading="lazy" src="'.$icon.'"></div>';
							}
							echo '<div class="location-content">';
								echo '<div class="location-title">'.get_the_title().'</div>';
								if (!empty($number)) {
									echo '<div class="location-info-line">'.$number.'</div>';
								}
								if (!empty($email)) {
									echo '<a target="_blank" class="location-info-line" href="mailto:'.$email.'">'.$email.'</a>';
								}
							echo '</div>';
						echo '</div>';
					}
					else {
						echo '<div class="card fade-up">';
							echo '<div class="card-top location-title">'.get_the_title().'</div>';
							if (!empty($photo))
								// echo '<img class="location-image" src="'.$photo.'">';
								echo '<span class="location-image card-image" style="background-image: url('.$photo.')"></span>';
							if (!empty($icon)) {
								echo '<div class="location-icon"><img class="location-icon-image" loading="lazy" src="'.$icon.'"></div>';
							}
							if (!empty($number)) {
								echo '<div class="location-info-line">'.$number.'</div>';
							}
							if (!empty($email)) {
								echo '<a target="_blank" class="location-info-line email" href="mailto:'.$email.'">'.$email.'</a>';
							}
							if (!empty($address)) {
								echo '<br>';
								echo '<a target="_blank" class="location-address-link" href="https://www.google.com/maps/search/?api=1&query='.urlencode(str_replace("<br />", " ", $address)).'">';
								echo $address;
								echo '</a>';
							}
						echo '</div>';
					}
					wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				}
			}
		echo '</section>';
	}
?>
