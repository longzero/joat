<h2 class="fade-up page-heading"><?= get_the_title() ?></h2>
<section class="content-width typography" style="margin-bottom: 200px;">
	<?php the_content(); ?>
</section>

<?php /*
<section class="post-author">
	<?php $author_id = get_the_author_meta('ID'); ?>
	<a class="author-avatar fade-up"
		style="background-image: url(<?= get_wp_user_avatar_src($author_id) ?>)"
		href="<?= get_author_posts_url($author_id) ?>">
	</a>
	<div class="author-content fade-up">
		<h4 class="author-name">
			<a class="author-name-link" href="<?= get_author_posts_url($author_id) ?>">
				<?php echo get_the_author_meta('nickname'); ?>
				<?= get_the_author_meta('first_name') ?> <?= get_the_author_meta('last_name') ?>
			</a>
		</h4>
		<div class="author-description"><?= get_the_author_meta('description') ?></div>
	</div>
</section>
*/ ?>

<?php
	$query_locations = new WP_Query(array(
		'nopaging'               => true,
		'order'                  => 'ASC',
		'orderby'                => 'date',
		'post_type'              => array( 'locations' ),
		'post_status'            => array( 'publish' )
	));

	// The Loop
	if ( $query_locations->have_posts() ) {
		echo '<h2 class="fade-up page-heading">';
		  if (ICL_LANGUAGE_CODE=='en') echo "Get in touch with us for more insights";
		  else echo "Contactez-nous pour plus d’infos!";
		echo '</h2>';
		echo '<section class="listing-cards location-cards small">';
			while ( $query_locations->have_posts() ) {
				$query_locations->the_post();
				$photo = get_field('photo');
				$icon = get_field('icon');
				$number = get_field('number');
				$email = get_field('email');
				$address = get_field('address');
				?>

				<div class="fade-up location-card">
					<?php if (!empty($icon)) { ?>
						<div class="location-icon"><img class="location-icon-image" loading="lazy" src="<?= $icon ?>"></div>
					<?php } ?>
					<div class="location-content">
						<div class="location-title"><?= get_the_title() ?></div>
						<?php if (!empty($number)) { ?>
							<div class="location-info-line"><?= $number ?></div>
						<?php } ?>
						<?php if (!empty($email)) { ?>
							<div class="location-info-line"><?= $email ?></div>
						<?php } ?>
					</div>
				</div>

				<?php
			} // while
		echo '</section>';
	} // if

	// Restore original Post Data
	wp_reset_postdata();
?>
