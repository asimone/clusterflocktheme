<?php get_header(); ?>

<div id="content">

<?php include(TEMPLATEPATH."/l_sidebar.php");?>

	<div id="contentleft">
	
		<h1>Not Found, Error 404</h1>
		<p>The page you are looking for is not where you're looking for it. Maybe it's somewhere else?</p>	
	<form method="get" action="http://www.google.com/search">
<input type="text" name="q" maxlength="255" style="width: 150px; margin-top: 9px;"/>
<input type="hidden" value="http://www.clusterflock.org" name="domains"/>
<input type="hidden" value="http://www.clusterflock.org" name="sitesearch"/>
<input type="submit" value="Search clusterflock &#x00BB" name="sa"/>
</form>
	
	</div>
	
<?php include(TEMPLATEPATH."/r_sidebar.php");?>
	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>