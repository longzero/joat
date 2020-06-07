<?php
	$category_array = query_categories();
	$category_link = "";
	$category_name = "";
	$cats = get_the_category();
	foreach ($cats as $cat) {
		$category_link = get_category_link($cat->cat_ID);
		$category_name = $cat->name;
	}
?>

<section class="metadata-and-share">
	<a class="meta-category-link <?= $category_array['category'] ?>" href="<?= $category_link ?>"><?= $category_name ?></a>
	<time class="meta-time"><?= get_the_date() ?></time>
	<div class="meta-share-label">Partagez</div>
	<div class="meta-share-icons">
		<a class="meta-share-link" href="https://twitter.com/intent/tweet?text=<?= urlencode(get_the_title()) ?>&url=<?= urlencode(get_permalink()) ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
			<svg class="meta-share-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
		</a>
		<a class="meta-share-link" href="https://www.facebook.com/sharer.php?u=<?= urlencode(get_permalink()) ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
			<svg class="meta-share-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
		</a>
		<a class="meta-share-link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(get_permalink()) ?>&title=<?= urlencode(get_the_title()) ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=450,toolbar=0'); return false;">
			<svg class="meta-share-icon" xmlns="http://www.w3.org/2000/svg" width="2500" height="2389" viewBox="0 5 1036 990"><path d="M0 120c0-33.334 11.667-60.834 35-82.5C58.333 15.833 88.667 5 126 5c36.667 0 66.333 10.666 89 32 23.333 22 35 50.666 35 86 0 32-11.333 58.666-34 80-23.333 22-54 33-92 33h-1c-36.667 0-66.333-11-89-33S0 153.333 0 120zm13 875V327h222v668H13zm345 0h222V622c0-23.334 2.667-41.334 8-54 9.333-22.667 23.5-41.834 42.5-57.5 19-15.667 42.833-23.5 71.5-23.5 74.667 0 112 50.333 112 151v357h222V612c0-98.667-23.333-173.5-70-224.5S857.667 311 781 311c-86 0-153 37-201 111v2h-1l1-2v-95H358c1.333 21.333 2 87.666 2 199 0 111.333-.667 267.666-2 469z"/></svg>
		</a>
	</div>
</section>
