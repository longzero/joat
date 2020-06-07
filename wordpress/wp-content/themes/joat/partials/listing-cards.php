<section class="listing-cards">
	<?php
		while (have_rows('articles')) {
			the_row();
			$article = get_sub_field('article');
			if ($article) {
				// override $post
				$post = $article;
				setup_postdata($post);
				displayArticleCard();
				wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
			}
		}
	?>
</section>
