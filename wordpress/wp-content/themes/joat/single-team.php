<?php get_header(); ?>
<?php languageToggle(); ?>

<section>
	<?php
		$name = get_field('name');
		$title = get_field('title');
		$short_biography = get_field('short_biography');
		if (!empty($name)) echo '<br>'.$name;
		if (!empty($title)) echo '<br>'.$title;
		if (!empty($short_biography)) echo '<br>'.$short_biography;
		if (have_rows('social_networks')) { // check if the flexible content field has rows of data
			while (have_rows('social_networks')) { // loop through the rows of data
				the_row();
				$social_url = get_sub_field('social_url');
				if (!empty($social_url)) echo '<br>'.$social_url;
			}
		}
	?>
</section>

<?php get_footer(); ?>
