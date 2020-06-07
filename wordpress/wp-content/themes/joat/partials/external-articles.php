<?php if (have_rows('articles')) { ?>
	<section class="container listing-band-container">
		<?php while (have_rows('articles')) { ?>
			<?php the_row(); ?>
			<?php
				$source_name = get_sub_field('source_name');
				$article_title = get_sub_field('article_title');
				$article_date = get_sub_field('article_date');
				$article_link = get_sub_field('article_link');
			?>
			<?php if (!empty($article_link)) { ?>
				<a class="fade-up listing-band" href="<?= $article_link ?>" target="_blank">
					<span class="listing-info">
						<strong><?php if (!empty($source_name)) echo $source_name; ?></strong>
						<time><?php if (!empty($article_date)) echo $article_date; ?></time>
					</span>
					<span class="listing-line"></span>
					<span class="listing-info">
						<?php if (!empty($article_title)) echo $article_title; ?>
					</span>
				</a>
			<?php } ?>
		<?php } ?>
	</section>
<?php } ?>
