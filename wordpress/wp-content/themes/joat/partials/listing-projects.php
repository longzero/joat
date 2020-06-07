<? // List projects at the bottom of pages ?>

<section class="listing-projects">
	<?php
		while (have_rows('projects')) {
			the_row();
			$project = get_sub_field('project');
			if ($project) {
				// override $post
				$post = $project;
				setup_postdata($post);
				displayProjectCard();
				wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
			}
		}
	?>
</section>
