<?php
	$position = get_sub_field('left_or_right');
	$text = get_sub_field('text');
?>

<section class="container">
	<div class="fade-up small-text-block <?= $position ?>">
		<?php if (!empty($text)) echo $text; ?>
	</div>
</section>
