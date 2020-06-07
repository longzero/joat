<?php
	$text = get_sub_field('text');
	$extra_space = get_sub_field('extra_space');
	if ($extra_space == "yes") $extra_space = "extra-space";
?>

<section class="content-width <?= $extra_space ?> typography">
	<?= $text ?>
</section>
