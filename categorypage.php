<?php
/*
Template Name: Dynamic Categories Page
*/
?><?php get_header(); ?>

<div id="content">

<?php include(TEMPLATEPATH."/l_sidebar_page.php");?>

	<div id="contentleft">
	
		<h1><?php the_title(); ?></h1>
<form method="get" action="http://www.google.com/search">
<input type="text" name="q" maxlength="255" style="width: 150px; margin-top: 9px;"/>
<input type="hidden" value="http://www.clusterflock.org" name="domains"/>
<input type="hidden" value="http://www.clusterflock.org" name="sitesearch"/>
<input type="submit" value="Search clusterflock &#x00BB" name="sa"/>
</form>

<ul class="categorylist"><?php wp_list_categories('show_count=1&title_li=&hierarchical=false'); ?></ul>
	</div>
	
<?php include(TEMPLATEPATH."/r_sidebar.php");?>
	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>