<h2 class="fade-up page-heading">
	<?php if (is_author()) { ?>
		Envie de contacter <?= get_the_author_meta('first_name')?>?
	<?php } else { ?>
		Poursuivez la conversation avec <?= get_the_author_meta('first_name')?>!
	<?php } ?>
</h2>

<section class="listing-cards small">
	<div class="fade-up location-card">
		<div class="location-icon">
			<svg class="small-card-image" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/></svg>
		</div>
		<div class="location-content">
			<div class="card-info-line"><strong>Num</strong> <?= get_the_author_meta('phone') ?></div>
			<div class="card-info-line"><strong>Mail</strong> <a href="mailto:<?= get_the_author_meta('user_email') ?>"><?= get_the_author_meta('user_email') ?></a></div>
		</div>
	</div>
</section>
