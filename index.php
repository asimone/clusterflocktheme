<?php get_header(); ?>

<div id="content">

<?php include(TEMPLATEPATH."/l_sidebar_page.php");?>

	<div id="contentleft">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h2 class="date-header"><?php the_time('F j, Y'); ?></h2>
		<br />
		<h1><?php the_title(); ?></h1>
	
		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
		
		<div class="postmeta">
			<p>posted by <?php the_author_posts_link(); ?> in <?php the_category(', ') ?>&nbsp;<?php edit_post_link('[Edit]', '', ''); ?></p>
		</div>
	 			
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<h4>comments</h4>
		<?php comments_template(); // Get wp-comments.php template ?>

<?php live_preview() ?>
		
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	
	</div>
	

	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>