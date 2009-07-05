<?php get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

<?php
the_content();
edit_post_link('Edit');

// you can comment out the next line if you don't want comments on pages
//comments_template();

wp_link_pages();

endwhile; endif;

get_footer();
?>