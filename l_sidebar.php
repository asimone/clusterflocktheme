<!-- begin l_sidebar -->

<div id="l_sidebar">

<!-- begin side navigation -->
   
<div id="navbox">
 <ul id="clusternav">
  <li id="about"><a href="/about-clusterflock"></a></li>
  <li id="categories"><a href="/categories"></a></li>
  <li id="flockers"><a href="/flockers"></a></li> 
  <li id="archives"><a href="/archives"></a></li>
 </ul>
 
<ul id="subnav"> <li id="links"><a href="/links"></a></li>
  <li id="feeds"><a href="/feed/atom"></a></li>
  <li id="contact"><a href="/contact"></a></li>
  <li id="social"><a href="http://www.facebook.com/group.php?gid=2452676050"></a></li>
 </ul>
</div>

<!-- end side navigation -->   
<div id="recentComments">
<?php if (function_exists('get_recent_comments')) { ?>
   <h2><?php _e('recent comments:'); ?></h2>
   <ul><?php get_recent_comments(); ?></ul>
   
<?php } ?>
</div> <!-- end recentComments div -->


  
	<!--<ul id="l_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
	

	<li id="Categories">
	<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('sort_column=name&title_li='); ?>
		</ul>
	</li>
		
	
	<?php wp_loginout(); ?>
			
			
	<?php endif; ?>
	</ul> -->




 


			
</div>

<!-- end l_sidebar -->