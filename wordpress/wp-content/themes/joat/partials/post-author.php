<?php $author_id = get_the_author_meta('ID'); ?>

<section class="post-author">
	<a class="author-avatar fade-up"
		style="background-image: url(<?= get_wp_user_avatar_src($author_id) ?>)"
		href="<?= get_author_posts_url($author_id) ?>">
	</a>
	<div class="author-content fade-up">
		<h4 class="author-name">
			<a class="author-name-link" href="<?= get_author_posts_url($author_id) ?>">
				<?= get_the_author_meta('first_name') ?> <?= get_the_author_meta('last_name') ?>
			</a>
		</h4>
		<div class="author-description"><?= get_the_author_meta('description') ?></div>
	</div>
</section>
