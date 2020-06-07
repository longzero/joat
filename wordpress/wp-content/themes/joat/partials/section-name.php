<?php
	$anchor = get_sub_field('anchor');
	$position = get_sub_field('left_or_right');
	$text = get_sub_field('text');
	if (!empty($anchor)) {
		$anchor = 'id="'.$anchor.'"';
	}
?>

<section class="container section-name-container <?= $position ?>" <?= $anchor ?>>
	<div class="section-name-absolute js-section-name-absolute">
		<h2 class="section-name js-section-name <?= $position ?>"><?= $text ?></h2>
	</div>
</section>
