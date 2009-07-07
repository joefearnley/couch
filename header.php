<?php include_once('additional.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="verify-v1" content="EO0tDRuJ+EE8SxFtki1+ZXXxmycJu8qcJdYFwNB/B9U=" />
	<title><?php bloginfo('name'); ?><?php wp_title(':'); ?></title>
	<base href="<?php echo get_settings('home'); ?>/" />
	<meta http-equiv="content-type" content="text/html;charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/additional.css" />

	<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/couch.js"></script>
	<script type="text/javascript" src="http://192.168.0.120/wordpress/wp-content/themes/couch/js/couch.js"></script>


<?php /* wp_get_archives('type=monthly&format=link'); */ ?>
<?php wp_head(); ?>
	
</head>
<body>
<div id="container">
<div id="wrap">
<div id="header">
	<h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
</div>
<div id="menu">
	<p id="sitemap"><a href="./about">about</a> | <a href="./archives">archives</a> | <a href="<?php bloginfo('rss2_url'); ?>">rss</a></p>
	<form id="searchform" method="get" action="<?php echo get_settings('siteurl'); ?>/index.php">
		<p><input type="text" name="s" size="15" value="search site" id="search" /></p>
	</form>
</div>
<div id="content">

