<?php
/*
Template Name:Template: Links
*/
?>
<?php get_header(); ?>


<?php
	$link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
	foreach ($link_cats as $link_cat) {
?>
	<h4 id="linkcat-<?php echo $link_cat->cat_id; ?>"><?php echo $link_cat->cat_name; ?></h4>
	<ul>
		<?php wp_get_links($link_cat->cat_id); ?>
	</ul>
<?php } ?>


<?php get_footer(); ?>
