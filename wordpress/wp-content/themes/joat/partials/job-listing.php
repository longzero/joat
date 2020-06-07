<section class="container listing-band-container">
	<?php
		// WP_Query arguments
		$args = array (
			'cat'                    => $job_type,
			'nopaging'               => true,
			'order'                  => 'DESC',
			'orderby'                => 'date',
			'post_type'              => array( 'jobs' ),
			'post_status'            => array( 'publish' )
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				// Set variables
				$job_title = get_the_title();
				$job_time = human_time_diff( get_the_time('U'), current_time('timestamp') );
				$job_link = get_the_permalink();
				if (have_rows('module')) { // check if the flexible content field has rows of data
					while (have_rows('module')) { // loop through the rows of data
						the_row();
						if (get_row_layout() == 'job_location') {
							$job_location = get_sub_field('location');
						}
					}
				}

				// Display job
	?>

	<a class="fade-up listing-band listing-band--job" href="<?= $job_link ?>">
		<span class="listing-info">
			<strong><?php if (!empty($job_location)) echo $job_location; ?></strong>
			<?php /*<time><?php if (!empty($job_time)) echo $job_time; ?></time>*/ ?>
		</span>
		<span class="listing-line"></span>
		<span class="listing-info">
			<?php if (!empty($job_title)) echo $job_title; ?>
		</span>
	</a>

	<?php
			}
		} else {
			// If there are no jobs
			echo '<div class="fade-up listing-band--job listing-band--message typography">';
				if ($job_type == 20) {
					if (ICL_LANGUAGE_CODE=='en') echo "There are no internships currently available, but you can still apply at <a href='mailto:stage@madein.co'>stage@madein.co</a>";
					else echo "Aucun stage n’est à pourvoir actuellement, cependant vous pouvez toujours postuler à <a href='mailto:stage@madein.co'>stage@madein.co</a>";
				}
				else if ($job_type == 18) {
					if (ICL_LANGUAGE_CODE=='en') echo "We invite you to send you CV and portfolio to <a href='mailto:carriere@madein.co'>carriere@madein.co</a>";
					else echo "Nous vous invitons à envoyer votre cv et votre portfolio à <a href='mailto:carriere@madein.co'>carriere@madein.co</a>";
				}
				else {
					if (ICL_LANGUAGE_CODE=='en') echo "There are no position currently available, but we invite you to send your CV and cover letter to <a href='mailto:carriere@madein.co'>carriere@madein.co</a>";
					else echo "Aucun poste n'est à pourvoir actuellement mais nous vous invitons à nous transmettre votre cv et votre lettre de présentation à <a href='mailto:carriere@madein.co'>carriere@madein.co</a>";
				}
			echo '</div>';
		}

		// Restore original Post Data
		wp_reset_postdata();
	?>

</section>
