<?php get_header(); ?>
    
<!-- BEGIN content -->
<div id="content">
 
	<!-- begin featured -->
    <h2>FEATURED NEWS</h2>
	<div id="featured">	
    	
		<?php
		$tmp_query = $wp_query;
		query_posts('showposts=3&cat=' . get_cat_ID(dp_settings('featured')));
		
		if (have_posts()) :
		
		while (have_posts()) : the_post(); 
		?>
	
		<!-- begin post -->
		<div class="content">
       
		<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>	
        
        <div class="title">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
        	<p class="details">Posted on  <?php the_time('M j,Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>  
    	</div>
    
		<p><?php echo dp_clean($post->post_content, 250); ?> [<a class="readmore" href="#">Read More</a>]</p>	
        
        <p class="author"><span><?php the_time('M j,Y') ?> </span>by <span><?php the_author() ?></span></p>	
		<div class="break"></div>
		</div>
		<!-- end post -->
		
		<?php endwhile; endif; ?>
		
	</div>
	<!-- end featured -->
<h2>RECENT ARTICLES</h2>
	<?php
	$wp_query = $tmp_query;
	if (have_posts()) :
	while (have_posts()) : the_post(); 
	?>
	
	<!-- begin post -->
	<div class="post">
    
    <a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
    <div class="title">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
    <p class="details">Posted In <i>Resources</i> with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p></div>    
	<p><?php echo dp_clean($post->post_content, 250); ?> [<a class="readmore" href="#">Read More</a>]</p>
    
	<p class="author"><span><?php the_time('M j,Y') ?> </span>by <span><?php the_author() ?></span></p>
	<div class="break"></div>
	</div>
	<!-- end post -->
	
	<?php endwhile; ?>   
	
		
        <!-- begin post navigation -->
        <div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; OLDER POSTS') ?></div>
			<div class="alignright"><?php previous_posts_link('NEWER POSTS &raquo;') ?></div>
		</div>
        <!-- end post navigation -->
        <div class="break"></div>
    
	<?php else : ?>
	<div class="notfound">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that is not here.</p>
	</div>
	<?php endif; ?>


</div>
<!-- END content -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>
