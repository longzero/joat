<!-- <?= basename(__FILE__); ?> -->

<?php get_header(); ?>

<?php /*<h1 class="container fade-up magazine-title">Magazine</h1>*/ ?>

<nav class="container fade-up magazine-navigation">
	<?php
		// $magazine_categories = get_categories(array('child_of' => array(29,60)));
		// foreach ($magazine_categories as $cat) {
		// 	echo '<a class="magazine-navigation-link" href="'.get_category_link($cat->cat_ID).'">'.$cat->name.'</a>';
		// }
	?>
	<?php /* <a class="magazine-navigation-link active" href="<?= get_category_link(30) ?>"><?= get_cat_name(30) ?></a> */ ?>
	<a class="magazine-navigation-link active" href="<?= (ICL_LANGUAGE_CODE=='en') ? "/en" : "" ?>/expertise"><?= (ICL_LANGUAGE_CODE=='en') ? "news" : "à la une" ?></a>
	<a class="magazine-navigation-link strategy" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(65) : get_category_link(31) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(65) : get_cat_name(31) ?></a>
	<a class="magazine-navigation-link influence" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(63) : get_category_link(32) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(63) : get_cat_name(32) ?></a>
	<a class="magazine-navigation-link production" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(62) : get_category_link(33) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(62) : get_cat_name(33) ?></a>
	<a class="magazine-navigation-link advertising" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(350) : get_category_link(34) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(350) : get_cat_name(34) ?></a>
	<a class="magazine-navigation-link international" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(351) : get_category_link(86) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(351) : get_cat_name(86) ?></a>
	<a class="magazine-navigation-link trends" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(349) : get_category_link(87) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(349) : get_cat_name(87) ?></a>
	<a class="magazine-navigation-link conferences" href="<?= (ICL_LANGUAGE_CODE=='en') ? get_category_link(352) : get_category_link(88) ?>"><?= (ICL_LANGUAGE_CODE=='en') ? get_cat_name(352) : get_cat_name(88) ?></a>
</nav>


<div class="listing-magazine has-sidebar">
	<div class="magazine-2-3">
		<?php /*
		<h2 class="fade-up magazine-heading">
			<?php
			  if (ICL_LANGUAGE_CODE=='en') echo "The latest";
			  else echo "Les plus récents";
		  ?>
		</h2>
		*/ ?>
		<?php query_articles("4"); ?>
	</div>
	<aside class="magazine-sidebar">
		<div class="sidebar-module">
			<h4 class="fade-up magazine-heading--sidebar">Maison Made in</h4>
			<p class="fade-up">
				<?php
					if (ICL_LANGUAGE_CODE=='en') echo "Growing fast in Canada, France and Belgium, Made in is a content and influence house that harnesses marketing trends and boasts collaborations with over 500 brands worldwide.";
				  else echo "En pleine expansion au Canada, en France et en Belgique, Made In est une maison de contenu et influence qui accueille les tendances marketing et compte des collaborations avec plus de 500 marques dans le monde.";
				 ?>
			</p>
			<?php get_search_form() ?>
		</div>
		<div class="sidebar-module">
			<h4 class="fade-up magazine-heading--sidebar">
				<?php
					if (ICL_LANGUAGE_CODE=='en') echo "Search by theme";
				  else echo "Chercher par thème";
			  ?>
			</h4>
			<div class="fade-up magazine-hashtags">
				<a class="magazine-hashtags-link" href="/?s=youtube">#Youtube</a>
				<a class="magazine-hashtags-link" href="/?s=instagram">#Instagram</a>
				<a class="magazine-hashtags-link" href="/?s=pinterest">#Pinterest</a>
				<a class="magazine-hashtags-link" href="/?s=facebook">#Facebook</a>
				<a class="magazine-hashtags-link" href="/?s=strategie">#Stratégie</a>
				<a class="magazine-hashtags-link" href="/?s=tiktok">#TikTok</a>
				<a class="magazine-hashtags-link" href="/?s=video">#Video</a>
				<a class="magazine-hashtags-link" href="/?s=podcast">#Podcast</a>
			</div>
		</div>
		<div class="sidebar-module">
			<h4 class="fade-up magazine-heading--sidebar">
				<?php
					if (ICL_LANGUAGE_CODE=='en') echo "Sign up to the newsletter";
				  else echo "S’inscrire à l’infolettre";
			  ?>
			</h4>
			<!-- Begin Mailchimp Signup Form -->
			<div class="fade-up" id="mc_embed_signup">
				<form action="https://madeinblog.us4.list-manage.com/subscribe/post?u=574823bc53cb34af6a3b7ead9&amp;id=eeab934bd5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="single-field">
							<input class="input-field" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email">
				    	<button class="single-field-button" name="subscribe" id="mc-embedded-subscribe">
				    		<svg class="single-button-label" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/></svg>
				    	</button>
				    </div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_574823bc53cb34af6a3b7ead9_eeab934bd5" tabindex="-1" value=""></div>
			    </div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div>
	</aside>
</div>



<?php
	$query_all = new WP_Query(array(
		'post_type'              => array( 'post' ),
		'post_status'            => array( 'publish' ),
		'nopaging'               => false,
		'offset'                 => '4',
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'         => '6',
		'paged' => '6'
	));
?>
<?php if ( $query_all->have_posts() ) { ?>
	<div class="listing-magazine js-listing-magazine">
		<h2 class="fade-up magazine-heading">
			<?php
				if (ICL_LANGUAGE_CODE=='en') echo "All articles";
			  else echo "Tous les articles";
			 ?>
		</h2>
		<?php while ( $query_all->have_posts() ) { ?>
			<?php $query_all->the_post(); ?>
			<?php displayArticleCard(); ?>
		<?php } // while ?>
	</div>
	<?php if ($query_all->post_count >= 6) { ?>
		<div class="load-more-container">
			<?= load_more_button() ?>
		</div>
	<?php } ?>
<?php } // if ?>
<?php wp_reset_postdata(); ?>

<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
	var page = 2;
	jQuery(function($) {
    $('body').on('click', '.js-load-more', function() {
      var data = {
        'action': 'load_posts_by_ajax',
        'page': page,
        'security': '<?php echo wp_create_nonce("load_more_posts"); ?>',
        'max_page': '<?php echo $posts->max_num_pages + 1; ?>'
      };
      $.post(ajaxurl, data, function(response) {
      	$('.js-listing-magazine').append(response);
        page++;
				if (response == "" || response.length == 0) {
					$('.js-load-more').html('<?= __("Vous êtes à la fin des articles") ?>');
				}
      });
    });
	});
</script>


<?php
	$query_locations = new WP_Query(array(
		'nopaging'               => true,
		'order'                  => 'ASC',
		'orderby'                => 'date',
		'post_type'              => array( 'locations' ),
		'post_status'            => array( 'publish' )
	));

	// The Loop
	if ( $query_locations->have_posts() ) {
		echo '<h2 class="fade-up page-heading small">';
		  if (ICL_LANGUAGE_CODE=='en') echo "Get in touch with us for more insights";
		  else echo "Contactez-nous pour plus d’infos!";
		echo '</h2>';
		echo '<section class="listing-cards location-cards small">';
			while ( $query_locations->have_posts() ) {
				$query_locations->the_post();
				$photo = get_field('photo');
				$icon = get_field('icon');
				$number = get_field('number');
				$email = get_field('email');
				$address = get_field('address');
				?>

				<div class="fade-up location-card">
					<?php if (!empty($icon)) { ?>
						<div class="location-icon"><img class="location-icon-image" loading="lazy" src="<?= $icon ?>"></div>
					<?php } ?>
					<div class="location-content">
						<div class="location-title"><?= get_the_title() ?></div>
						<?php if (!empty($number)) { ?>
							<div class="location-info-line"><?= $number ?></div>
						<?php } ?>
						<?php if (!empty($email)) { ?>
							<div class="location-info-line"><?= $email ?></div>
						<?php } ?>
					</div>
				</div>

				<?php
			} // while
		echo '</section>';
	} // if

	// Restore original Post Data
	wp_reset_postdata();
?>


<?php get_footer(); ?>
