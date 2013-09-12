<?php get_header(); ?>

<div id="content">

<?php include(TEMPLATEPATH."/l_sidebar.php");?>

	<div id="contentleft">
	        <?php $previousTime = '' ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if ( $previousTime != get_the_time('F j, Y') ) { ?>
		<h2 class="date-header"><?php the_time('F j, Y'); ?></h2>
                <?php $previousTime = get_the_time('F j, Y'); } ?>
		
		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	
		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
		
		<div class="postmeta">
			<p>posted by <strong><?php the_author_posts_link(); ?></strong> in <?php the_category(', ') ?> | <a href="<?php the_permalink() ?>" rel="bookmark">*</a> | <?php comments_popup_link('Comment', '1 Comment', '% Comments'); ?>&nbsp;<?php edit_post_link('[Edit]', '', ''); ?></p>
		</div>
	 			
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>
	
	</div>
	
<?php include(TEMPLATEPATH."/r_sidebar.php");?>
	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>