<?php
	$tweet = get_sub_field('tweet');
	$tweet_action = get_sub_field('tweet_action');
	$tweet_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php if (!empty($tweet)) { ?>
	<section class="centered-intro fade-up typography twitter-tweet">
		<?php echo $tweet; ?>
		<?php if (empty($tweet_action)) $tweet_action = "Tweet"; ?>
		<div style="text-align: right;">
			<?php $tweet = $tweet." "."via @madeinagency" ?>
			<a class="paragraph-link" href="https://twitter.com/intent/tweet?text=<?= urlencode($tweet) ?>&url=<?= urlencode(get_permalink()) ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
				<?= $tweet_action ?>
			</a>
		</div>
	</section>
<?php } ?>
