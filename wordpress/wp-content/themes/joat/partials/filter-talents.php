<section class="container">
	<nav class="fade-up filter-navigation filter-navigation--talents">
		<a href="#" class="filter-nav-link js-filter-item active"><?= (ICL_LANGUAGE_CODE=='en') ? "All" : "Tout" ?></a>
		<a href="#" class="filter-nav-link france js-filter-item">France</a>
		<a href="#" class="filter-nav-link belgique js-filter-item"><?= (ICL_LANGUAGE_CODE=='en') ? "Belgium" : "Belgique" ?></a>
		<a href="#" class="filter-nav-link canada js-filter-item">Canada</a>
	</nav>

	<div class="js-filtered-container">
		<!-- TOUT -->
		<div class="listing-talents filtered-tab-content js-filtered-tab-content active">
			<?php query_talents("1000", ""); ?>
		</div>

		<!-- FRANCE -->
		<div class="listing-talents filtered-tab-content js-filtered-tab-content">
			<?php query_talents("1000", "28"); ?>
		</div>

		<!-- BELGIQUE -->
		<div class="listing-talents filtered-tab-content js-filtered-tab-content">
			<?php query_talents("1000", "27"); ?>
		</div>

		<!-- CANADA -->
		<div class="listing-talents filtered-tab-content js-filtered-tab-content">
			<?php query_talents("1000", "26"); ?>
		</div>

		<?php /*<div class="load-more-container"><?= load_more_button() ?></div>*/ ?>
	</div>
</section>


<script>
	$(function(){
		// --------------------------------------------------------------------------------------------
		// TABS FOR FILTERING
		// --------------------------------------------------------------------------------------------
		$('.js-filter-item').click(function(){
			// DEALING WITH TABS
			// Remove active from all items, then put it for the appropriate tab.
			$(this).parent().find('.js-filter-item').removeClass('active');
			// $(this).parent().toggleClass('active');
			$(this).addClass('active');
			// Get the index of the tab that was clicked.
			// This will be used to display the appropriate content.
			// TODO: Write comment about why “+1”.
			var filterIndex = $(this).index() + 1;

			// DEALING WITH CONTENT
			// Get out of tab container, then find the right content.
			$(this).parent().next('.js-filtered-container').find('.js-filtered-tab-content').removeClass('active');
			$(this).parent().next('.js-filtered-container').find('.js-filtered-tab-content:nth-child('+ filterIndex +')').addClass('active');

			// Prevent the link from activating <a href="#">
			return false;
		});
	})
</script>
