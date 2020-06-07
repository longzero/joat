<?php
	$image = get_sub_field('image');
	$image_label = get_sub_field('image_label');
	$image_label_url = get_sub_field('link_url');
?>

<section class="fade-up image-full-width">
	<img class="image-full-width-image" src="<?= $image ?>">
	<?php if (!empty($image_label) && !empty($link_url)) { ?>
		<a class="image-full-width-link" href="<?= $link_url ?>"><?= $image_label ?></a>
	<?php } ?>
</section>
