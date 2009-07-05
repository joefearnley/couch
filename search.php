<?php get_header(); ?>

<h2 class="center">Search Results</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
	<?php the_title(); ?></a></h2>
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
