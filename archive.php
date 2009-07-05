<?php get_header(); ?>
<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. Taken from Kubrick. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="center">Archives Under&nbsp; "<?php echo single_cat_title(); ?>" (<a href="feed/">RSS</a>)</h2>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="center">Archives for <?php the_time('j F Y'); ?></h2>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="center">Archives for <?php the_time('F Y'); ?></h2>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="center">Archives for <?php the_time('Y'); ?></h2>

<?php /* If this is a search */ } elseif (is_search()) { ?>
<h2 class="center">Search Results</h2>

<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="center">Author Archives</h2>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="center">Blog Archives</h2>

<?php } ?>

<?php
/*
	<p class="nav"><span class="prev"><?php next_posts_link('&laquo; Previous Entries') ?></span>
	<span class="next"><?php previous_posts_link('Next Entries &raquo;') ?></span></p>
*/
?>

<?php while (have_posts()) : the_post(); ?>

	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<p class="posted"><?php the_time('j F Y'); ?> | <?php the_category(', '); ?> | <?php comments_popup_link('No Responses', '1 Response', '% Responses'); ?>
	<?php edit_post_link('Edit', $before = ' | '); ?></p>
	<?php the_content(); ?>

<?php endwhile; ?>
	<p class="nav"><span class="prev"><?php next_posts_link('&laquo; Previous Entries') ?></span>
	<span class="next"><?php previous_posts_link('Next Entries &raquo;') ?></span></p>

<?php else: ?>
	<p>Sorry, Nothing found.</p>
<?php endif; ?>

<?php get_footer(); ?>