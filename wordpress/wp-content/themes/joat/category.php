<!-- <?= basename(__FILE__); ?> -->

<?php get_header(); ?>
<?php
	$current_category = single_cat_title('', false);
?>

<?php
	// Get the current category
	$category = get_queried_object();

	// Check if parent category is Études de cas
	$parent_category = category_parent($category->term_id);
	if ($parent_category == 16 || $category->term_id == 16 || $parent_category == 70 || $category->term_id == 70) {
?>

	<?php
		$category_id = (ICL_LANGUAGE_CODE=='en') ? 70 : 16;
		$categories = get_categories(array(
			'parent' => array($category_id),
			'hide_empty' => true
		));
	?>

	<section class="[projects] container--listing">
		<nav class="fade-up filter-navigation">
			<?php /*<a href="<?= (ICL_LANGUAGE_CODE=='en') ? get_permalink(116) : get_permalink(393) ?>" class="filter-nav-link">*/ ?>
			<a href="<?= get_category_link($category_id) ?>" class="filter-nav-link">
				<?= (ICL_LANGUAGE_CODE=='en') ? "all" : "tout" ?>
			</a>
			<?php
				foreach ($categories as $category_navigation) {
					$category_navigation_active = ($category_navigation->term_id == $category->term_id) ? 'active':'';
					echo '<a href="'.get_category_link($category_navigation->term_id)
						.'" class="filter-nav-link '.$category_navigation->slug.' '
						.$category_navigation_active.'">'
						.$category_navigation->name.'</a>';
				}
			?>
		</nav>

		<div class="">
			<!-- TOUT -->
			<?php /*
			<div class="listing-projects filtered-tab-content active">
				<?php query_projects("", ""); ?>
			</div>
			*/ ?>

			<div class="listing-projects">
				<?php query_projects("",$category->term_id); ?>
			</div>
		</div>
	</section>



<?php } else { ?>

	<nav class="container magazine-navigation">
		<?php
			// $magazine_categories = get_categories(array('child_of' => array(29,60)));
			// foreach ($magazine_categories as $cat) {
			// 	echo '<a class="magazine-navigation-link" href="'.get_category_link($cat->cat_ID).'">'.$cat->name.'</a>';
			// }
		?>
		<?php /* <a class="magazine-navigation-link <?php if (is_home() || in_array($current_category, array('à la une'))) echo 'active'; ?>" href="<?= get_category_link(30) ?>"><?= get_cat_name(30) ?></a> */ ?>

		<a class="magazine-navigation-link" href="<?php echo get_permalink(get_option('page_for_posts')) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? "news" : "à la une" ?></a>
		<a class="magazine-navigation-link strategy <?php if (in_array($current_category, array('strategie','stratégie'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(65) : get_category_link(31) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(65) : get_cat_name(31) ?></a>
		<a class="magazine-navigation-link influence <?php if (in_array($current_category, array('influences','influence'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(63) : get_category_link(32) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(63) : get_cat_name(32) ?></a>
		<a class="magazine-navigation-link production <?php if (in_array($current_category, array('production'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(62) : get_category_link(33) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(62) : get_cat_name(33) ?></a>
		<a class="magazine-navigation-link advertising <?php if (in_array($current_category, array('publicité','advertising'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(350) : get_category_link(34) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(350) : get_cat_name(34) ?></a>
		<a class="magazine-navigation-link international <?php if (in_array($current_category, array('international'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(351) : get_category_link(86) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(351) : get_cat_name(86) ?></a>
		<a class="magazine-navigation-link trends <?php if (in_array($current_category, array('trends','tendances'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(349) : get_category_link(87) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(349) : get_cat_name(87) ?></a>
		<a class="magazine-navigation-link conferences <?php if (in_array($current_category, array('conferences','conférences'))) echo 'active'; ?>" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(352) : get_category_link(88) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(352) : get_cat_name(88) ?></a>
	</nav>

	<?php
		$query_all = new WP_Query(array(
			'cat' => get_queried_object()->term_id,
			'post_type'              => array( 'post' ),
			'post_status'            => array( 'publish' ),
			'nopaging'               => true,
		));
	?>
	<?php if ( $query_all->have_posts() ) { ?>
		<div class="listing-magazine js-listing-magazine">
			<?php while ( $query_all->have_posts() ) { ?>
				<?php $query_all->the_post(); ?>
				<?php displayArticleCard(); ?>
			<?php } // while ?>
		</div>
	<?php } // if ?>
	<?php wp_reset_postdata(); ?>

<?php } ?>

<?php get_footer(); ?>
