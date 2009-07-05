<?php get_header(); ?>

<div id="twitter_link"><a href="#" onclick="Effect.toggle('tweets','slide'); return false">twitter updates</a></div>

<div id="tweets" style="display: none;">
	<div id="twiiter_updates"><ul id="twitter_update_list"></ul></div>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/joefearnley.json?callback=twitterCallback2&count=5"></script>
</div>

<?php

// Check if the sitemap is requested
if ( isset($_GET['sitemap']) ) {
	include('sitemap.php');
} else {

if (have_posts()) : while (have_posts()) : the_post();
?>

	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php
    the_title(); ?></a></h2>
	<p class="posted"><?php the_time('m.d.y'); ?><!-- |--> <?php /* the_category(', '); */ ?> | <?php  comments_popup_link('comments(0)', 'comment(1)', 'comment(%)'); ?>
	<?php edit_post_link('Edit', $before = ' | '); ?></p>
		<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>

<?php endwhile; ?>
	<p class="nav"><span class="prev"><?php next_posts_link('&laquo; Previous Entries') ?></span>
	<span class="next"><?php previous_posts_link('Next Entries &raquo;') ?></span></p>

<?php else: ?>
	<p>Sorry, Nothing found.</p>
<?php endif; ?>

<?php
}

?>

<?php get_footer(); ?>
