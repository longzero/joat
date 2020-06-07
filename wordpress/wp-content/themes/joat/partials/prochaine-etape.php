<?php
	$text = get_sub_field('text');
	$link_url = get_sub_field('link_url');
	$color = get_sub_field('color');
	$category_array = query_categories();
?>

<section>
	<a class="prochaine-etape" href="<?= $link_url ?>">
		<span class="prochaine-etape-block <?= $color ?>"></span>
		<span class="prochaine-etape-link"><?= $text ?></span>
	</a>
</section>
