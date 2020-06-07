<?php
	$image = get_sub_field('image');
	$more_label = get_sub_field('more_label');
	$more_label_url = get_sub_field('more_label_url');
?>

<section class="fade-up image-team">
	<img class="image-team-image" loading="lazy" src="<?= $image ?>">
	<?php if (!empty($more_label) && !empty($more_label_url)) { ?>
		<a class="image-team-link" href="<?= $more_label_url ?>"><?= $more_label ?></a>
	<?php } ?>
</section>
