<?php
	$image = get_sub_field('image');
	$caption = get_sub_field('caption');
	$position = get_sub_field('paragraph_position');
?>

<section class="container image-with-caption typography <?= $position; ?>">
	<?php if (!empty($image)) { ?>
		<img class="fade-up image-with-caption-image" loading="lazy" src="<?= $image ?>">
	<?php } ?>
	<?php if (!empty($caption)) { ?>
		<div class="fade-up image-with-caption-caption typography"><?= $caption ?></div>
	<?php } ?>
</section>
