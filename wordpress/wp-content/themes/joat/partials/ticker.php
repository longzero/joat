<section class="ticker-container">
	<?php if (have_rows('ticker')) { ?>
		<?php while (have_rows('ticker')) { ?>
			<?php the_row(); ?>
			<?php if (have_rows('ticker_line')) { ?>
				<div class="fade-up ticker-line">
					<?php
						for ($i = 0; $i < 10; $i++) {
							while (have_rows('ticker_line')) {
								the_row();
								$brand = get_sub_field('brand');
								$link = get_sub_field('link');
								if ($brand) {
									$post = $brand;
									setup_postdata($brand);
									if ($link && $link[0] == "link") echo '<a class="ticker-item" href="'.get_the_permalink().'">';
									else echo '<span class="ticker-item">';
									echo get_the_title();
									if ($link && $link[0] == "link") echo '</a>';
									else echo '</span>';
									wp_reset_postdata();
								} // if brand
							} // while ticker line
						} // for loop to repeat a line so it is somewhat continuous
					?>
				</div><!-- .ticker-line -->
			<?php } // if ticker line ?>
		<?php } // while ticker ?>
	<?php } // if ticker ?>
</section>
