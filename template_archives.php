<?php
/*
Template Name: Template: Archives
*/
?>
<?php get_header(); ?>

<div id="archives_rss">
	<h2>syndication</h2>
	<p style="margin-left: 15px;"><a href="<?php bloginfo('rdf_url'); ?>">XML</a> | <a href="<?php bloginfo('rss2_url'); ?>">RSS 2.0</a> | <a href="<?php 
		bloginfo('rss_url'); ?>">RSS .92</a> | <a href="<?php bloginfo('atom_url'); ?>">Atom 0.3</a></p>

	<h2 style="margin-top: 30px;">categories</h2>
	<?php catcloud(); ?>

	<div id="archivesbymonth">
	<h2 style="margin-top: 30px;">month</h2>
	<ul><?php get_archives('monthly', '', 'html', '', '', true); ?></ul>
	</div>

	<div id="archivesbypost">
	<h2 style="margin-top: 30px;">post</h2>
        <ul><?php get_archives('postbypost', '', 'html', '', '', true); ?></ul>
	</div>
</div>

<br class="clear" />

<?php get_footer(); ?>
