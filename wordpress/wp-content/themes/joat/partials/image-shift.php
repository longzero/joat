<?php
	$image = get_sub_field('image');
	$caption = get_sub_field('caption');
	$more_label = get_sub_field('more_label');
	$more_label_url = get_sub_field('more_label_url');
	$position = get_sub_field('left_or_right');
?>

<section class="container image-shift typography <?= $position; ?>">
	<?php if (!empty($image)) { ?>
		<?php if (!empty($more_label_url)) { ?><a class="fade-up image-shift-image" href="<?= $more_label_url ?>">
		<?php } else { ?><span class="fade-up image-shift-image">
		<?php } ?>
			<img loading="lazy" src="<?= $image ?>">
		<?php if (!empty($more_label_url)) { ?></a>
		<?php } else { ?></span>
		<?php } ?>
	<?php } ?>
	<?php if (!empty($caption)) { ?>
		<div class="fade-up image-shift-caption"><?= $caption ?></div>
	<?php } ?>
	<?php if (!empty($more_label) && !empty($more_label_url)) { ?>
		<div class="fade-up image-shift-link">
			<a href="<?= $more_label_url ?>"><?= $more_label ?></a>
		</div>
	<?php } ?>
</section>
