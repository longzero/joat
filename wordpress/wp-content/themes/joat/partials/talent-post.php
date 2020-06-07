<?php
	$image = get_sub_field('image');
	$caption = get_sub_field('caption');
?>

<section class="talent-post">
	<div class="fade-up talent-post-image-box">
		<img class="talent-post-image" src="<?= $image ?>">
	</div>
	<div class="fade-up talent-post-data">
		<?php
			if (have_rows('post_data')) {
				while (have_rows('post_data')) {
					the_row();
					$value = get_sub_field('value');
					$label = get_sub_field('label');
					if (!empty($value) && !empty($label)) {
						echo '<div class="talent-post-data-item">';
							echo '<div class="talent-post-data-value">'.$value.'</div>';
							echo '<div class="talent-post-data-label">'.$label.'</div>';
						echo '</div>';
					}
				}
			}
		?>
	</div>
	<div class="fade-up talent-post-content"><?= $caption ?></div>
</section>
