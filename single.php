<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--
<p class="nav"><span class="prev"><?php previous_post('&#171; %','','yes') ?></span><span class="next"><?php next_post('% &#187;','','yes') ?></span></p>
-->
    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

    <p class="posted">
        <?php the_time('m.d.y'); ?><!-- | -->
        <?php /* the_category(', '); */ ?> | 
        <a href="<?php the_permalink() ?>#respond"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a>
        <?php edit_post_link('Edit', $before = ' | '); ?>
        <br />Last Modified: <?php last_modified('m.d.y @ H:i'); ?>
    </p>
        <div class="entry">
            <?php the_content(); ?>
        </div>
    <?php comments_template(); ?>

<?php endwhile; else: ?>
    <p>Sorry, Nothing found.</p>
<?php endif; ?>

<?php get_footer(); ?>
