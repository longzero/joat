<?php
	$image = get_sub_field('image');
	$number = get_sub_field('number');
	$email = get_sub_field('email');
?>

<section class="listing-cards location-cards small">
	<div class="fade-up location-card">
		<div class="location-icon">
			<?php if (!empty($image)) { ?>
				<img class="location-icon-image" loading="lazy" src="<?= $image ?>">
			<?php } ?>
		</div>
		<div class="location-content">
			<div class="location-info-line"><?= $number ?></div>
			<div class="location-info-line"><a href="mailto:<?= $email ?>"><?= $email ?></a></div>
		</div>
	</div>
</section>
