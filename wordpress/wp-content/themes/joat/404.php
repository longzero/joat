<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>


	<h1>404.php</h1>

    <?php $query = new WP_Query('cat=-3,-4,-5'); ?>
    <?php if ( $query->have_posts() ) { ?>
      <?php while ( $query->have_posts() ) { ?>
        <?php $query->the_post(); ?>
        <p>There is a post.</p>
      <?php } // while ?>
    <?php } // if ?>


<?php get_footer(); ?>
