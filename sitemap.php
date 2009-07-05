	<h4>Pages</h4>
	<ul>
	<?php wp_list_pages('title_li=' ); ?>
	</ul>

	<h4>Categories</h4>
	<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&feed=RSS&hide_empty=0'); ?>
	</ul>

	<h4>Archives</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

	<h4>Meta</h4>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://validator.w3.org/check/referer" title="This page should validate as XHTML 1.0 Strict">Validate the markup</a></li>
		<li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="This site should have valid CSS">Validate the stylesheet</a></li>
		<?php wp_meta(); ?>
	</ul>

<?php
if (function_exists('wp_theme_switcher')) {
// optional theme switcher plugin code
?>
	<h4>Themes</h4>
<?php wp_theme_switcher();
}
?>

<?php
	$link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
	foreach ($link_cats as $link_cat) {
?>
	<h4 id="linkcat-<?php echo $link_cat->cat_id; ?>"><?php echo $link_cat->cat_name; ?></h4>
	<ul>
		<?php wp_get_links($link_cat->cat_id); ?>
	</ul>
<?php } ?>

