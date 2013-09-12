<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/clustertheme/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<style type="text/css" media="screen">
<!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); -->
</style>



<?php
if ( is_page('about') ) { $current = 'about'; }
elseif ( is_page('categories') ) { $current = 'categories'; }
elseif ( is_page('flockers') ) { $current = 'flockers'; }
elseif ( is_page('archives') ) { $current = 'archives'; }
?>


</head>

<body>
<a name="top" id="top"></a>
<div id="wrap">

	<div id="header">
	
		<div id="headerleft">
		
		<h2 id="clusterflock-logo"><a href="/" title="clusterflock"><span>clusterflock</span></a></h2>
		
		
			<!--<a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a><br />
			<?php bloginfo('description'); ?>-->
		</div>
		
		<div id="headerright">
			 <h3 id="suggest"><a href="/2007/02/suggest-a-link.html" title="suggest"><span>suggest a site</span></a></h3>
		</div>

	</div>
	
<div style="clear:both;"></div>
	
	