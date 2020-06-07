<!-- <?= basename(__FILE__); ?> -->

<?php get_header(); ?>
<?php $current_category = single_cat_title('', false); ?>

<h1 class="fade-up page-heading">Results for “<?php the_search_query(); ?>”</h1>

<?php if ( have_posts() ) { ?>
	<div class="listing-magazine">
		<?php while ( have_posts() ) { ?>
			<?php the_post(); ?>
			<?php displayArticleCard(); ?>
		<?php } // while ?>
	</div>
<?php } // if ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
