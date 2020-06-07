<!-- <?= basename(__FILE__); ?> -->

<?php get_header(); ?>

<?php /*if (get_post_type() == 'post') { ?>
	<h2 class="container fade-up magazine-title">Magazine</h2>
<?php } else*/ if (get_post_type() == 'jobs') { ?>
	<?php
		$category_array = query_categories();
		$cats = get_the_category();
		foreach ($cats as $cat) {
			$category_link = get_category_link($cat->cat_ID);
			$category_name = $cat->name;
		}

		if (have_rows('module')) { // check if the flexible content field has rows of data
			while (have_rows('module')) { // loop through the rows of data
				the_row();
				if (get_row_layout() == 'job_location') {
					$job_location = get_sub_field('location');
				}
			}
		}
	?>
	<h1 class="fade-up page-heading"><?= get_the_title() ?></h1>
	<div class="fade-up metadata-and-share metadata-and-share--job">
		<span class="meta-category-link <?= $category_array['category'] ?>"><?= $category_name ?></span>
		<?= $job_location ?>
	</div>
<?php } else if (get_post_type() != 'post' && !is_page(array(116,122,350,393))) { ?>
	<h1 class="fade-up page-heading"><?= get_the_title() ?></h1>
<?php } ?>

<?php
	// echo get_post_type();
	if (in_array(get_the_ID(), ['14241','14323','14331','14345','14349'])) {
		echo "<!-- rewritten 2020 -->";
		include('partials/modules.php');
	}
	else if (get_the_date('Y') < 2019 && get_post_type() == 'post') {
		if (get_the_date('Y') == 2018 && get_the_date('n') >= 7) {
			echo "<!-- modules 2018 -->";
			include('partials/modules.php');
		}
		else {
			echo "<!-- post before 2019 -->";
			include('partials/old-post.php');
		}
	}
	else {
		echo "<!-- 2019 and later -->";
		include('partials/modules.php');
	}
?>

<?php get_footer(); ?>
