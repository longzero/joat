<?php
	$categories = get_categories(array(
		'parent' => array(16),
		'hide_empty' => true
	));
?>

<section class="[projects] container--listing">
	<nav class="fade-up filter-navigation">
		<a href="#" class="filter-nav-link js-filter-item active"><?= (ICL_LANGUAGE_CODE=='en') ? "all" : "tout" ?></a>
		<?php
			foreach ($categories as $category) {
				echo '<a href="#" class="filter-nav-link '.$category->slug.' js-filter-item">'.$category->name.'</a>';
			}
		?>
		<?php /*
		<a href="#" class="filter-nav-link content js-filter-item"><?= get_cat_name(21) ?></a>
		<a href="#" class="filter-nav-link influences js-filter-item"><?= get_cat_name(22) ?></a>
		<a href="#" class="filter-nav-link pr js-filter-item"><?= get_cat_name(23) ?></a>
		<a href="#" class="filter-nav-link media js-filter-item"><?= get_cat_name(24) ?></a>
		*/ ?>
	</nav>

	<div class="js-filtered-container">
		<!-- TOUT -->
		<div class="listing-projects filtered-tab-content js-filtered-tab-content active">
			<?php query_projects("", ""); ?>
		</div>

		<?php foreach ($categories as $category) { ?>
			<!-- <?= $category->name ?> -->
			<div class="listing-projects filtered-tab-content js-filtered-tab-content">
				<?php query_projects("", $category->cat_ID); ?>
			</div>
		<?php } ?>

		<?php /*
		<!-- BEAUTÉ -->
		<div class="listing-projects filtered-tab-content js-filtered-tab-content">
			<?php query_projects("", "21"); ?>
		</div>

		<!-- INFLUENCES -->
		<div class="listing-projects filtered-tab-content js-filtered-tab-content">
			<?php query_projects("", "22"); ?>
		</div>

		<!-- RELATIONS PUBLIQUES -->
		<div class="listing-projects filtered-tab-content js-filtered-tab-content">
			<?php query_projects("", "23"); ?>
		</div>

		<!-- MÉDIAS -->
		<div class="listing-projects filtered-tab-content js-filtered-tab-content">
			<?php query_projects("", "24"); ?>
		</div>
		*/ ?>

		<?php /*<div class="load-more-container"><?= load_more_button() ?></div>*/ ?>
	</div>
</section>


<script>
	$(function(){
		// --------------------------------------------------------------------------------------------
		// TABS FOR FILTERING
		// --------------------------------------------------------------------------------------------
		$('.js-filter-item').click(function(){

			$('.card.fade-up').removeClass('active')

			// DEALING WITH TABS
			// Remove active from all items, then put it for the appropriate tab.
			$(this).parent().find('.js-filter-item').removeClass('active');
			$(this).addClass('active');

			// Get the index of the tab that was clicked.
			// This will be used to display the appropriate content.
			// TODO: Write comment about why “+1”.
			var filterIndex = $(this).index() + 1;

			// DEALING WITH CONTENT
			// Get out of tab container, then find the right content.
			$(this).parent().next('.js-filtered-container').find('.js-filtered-tab-content').removeClass('active');
			$(this).parent().next('.js-filtered-container').find('.js-filtered-tab-content:nth-child('+ filterIndex +')').addClass('active');
			setTimeout(function(){
				$('.active .card.fade-up:nth-child(1)').addClass('active')
				$('.active .card.fade-up:nth-child(2)').addClass('active')
			},400)

			// Prevent the link from activating <a href="#">
			return false;
		});
	})
</script>


<?php /*
<script>
	var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
	var page = 2;
	jQuery(function($) {
		$('body').on('click', '.js-load-more', function() {
			console.log("click")
			var data = {
				'action': 'load_projects_by_ajax',
				'page': page,
				'security': '<?php echo wp_create_nonce("load_more_posts"); ?>',
				'max_page': '<?php echo $posts->max_num_pages + 1; ?>'
			};

			$.post(ajaxurl, data, function(response) {
				$('.js-filtered-tab-content.active').append(response);
				console.log(response)
				page++;
				if (response == "" || response.length == 0) {
					$('.js-load-more').html('<?= __("Vous êtes à la fin des projets") ?>');
				}
			});
		}); // $('body')
	});
</script>
*/ ?>
