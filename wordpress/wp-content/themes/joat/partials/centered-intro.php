<?php
	$paragraph = get_sub_field('paragraph');
	$link_label = get_sub_field('link_label');
	$link_url = get_sub_field('link_url');
?>

<section class="centered-intro fade-up typography">
	<?php if (!empty($paragraph)) echo $paragraph; ?>
	<?php if (!empty($link_label) && !empty($link_url)) { ?>
		<div style="text-align: center;">
			<a class="paragraph-link" href="<?= $link_url ?>"><?= $link_label ?></a>
		</div>
	<?php } ?>
</section>
