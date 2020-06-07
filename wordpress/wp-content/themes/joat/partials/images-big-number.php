<?php if (have_rows('image_with_big_number')) { ?>
	<section class="container--listing images-big-number">
		<?php
			while (have_rows('image_with_big_number')) {
				the_row();
				$image = get_sub_field('image');
				$big_text = get_sub_field('big_text');
				$small_text = get_sub_field('small_text');
				$position = get_sub_field('left_or_right');
				?>

				<div class="big-number <?= $position ?>">
					<div class="big-number-image-box js-blind-container">
						<div class="big-number-image" style="background-image: url(<?= $image ?>)"></div>
					</div>
					<div class="big-number-number"><?= $big_text ?></div>
					<div class="big-number-label"><?= $small_text ?></div>
				</div>

		<?php } ?>
	</section>
<?php } ?>
