<?php $position = get_sub_field('left_or_right'); ?>

<section class="image-gallery-pattern <?= $position ?>">
	<?php if (have_rows('images')) { while (have_rows('images')) { the_row(); ?>
		<?php $image = get_sub_field('image'); ?>
		<img class="image-gallery-pattern-image" loading="lazy" src="<?= $image ?>">
	<?php }} ?>
</section>
