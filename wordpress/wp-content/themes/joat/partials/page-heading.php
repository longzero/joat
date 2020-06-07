<?php
	$alignment = get_sub_field('alignment');
	$size = get_sub_field('size');
	$text = get_sub_field('text');

	$tag = "h2";
	if ($counter == 1) $tag = "h1";
?>

<<?= $tag ?> class="fade-up page-heading <?= $size ?> <?= $alignment ?>">
	<?php if (!empty($text)) echo $text; ?>
</<?= $tag ?>>
