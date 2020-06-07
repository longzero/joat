<?php
	if (is_author()) {
		$image = get_wp_user_avatar_src($user_id, 'large');
		$text = get_the_author_meta('description');
		$link_label = "";
		$link_url = "";
		$position = "";
	}
	else {
		$image = get_sub_field('image');
		$text = get_sub_field('text');
		$link_label = get_sub_field('link_label');
		$link_url = get_sub_field('link_url');
		$position = get_sub_field('left_or_right');
	}
?>

<section class="container image-side <?= $position; ?>">
	<?php if (!empty($image)) { ?>
		<div class="fade-up image-side-image" loading="lazy" style="background-image: url(<?= $image ?>)"></div>
	<?php } ?>
	<div class="fade-up image-side-content typography">
		<?php if (!empty($text)) echo $text; ?>
		<?php if (!empty($link_label) && !empty($link_url)) { ?>
			<a class="paragraph-link" href="<?= $link_url ?>"><?= $link_label ?></a>
		<?php } ?>
	</div>
</section>
