<?php get_header(); ?>

<!-- BEGIN content -->
<div id="content">

	<h2 class="title">Search Results for <strong><?php the_search_query(); ?></strong></h2>

	<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); 
	?>
	
	<!-- begin post -->
	<div class="post">
	<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php echo dp_clean($post->post_content, 250); ?>.. <a href="#">Read More</a></p>
	<p class="details"><?php the_category(', ') ?> | <?php the_time('m.j.y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
	<div class="break"></div>
	</div>
	<!-- end post -->
	
	<?php endwhile; ?>
	<p class="postnav">
	<?php next_posts_link('&laquo; Older Entries'); ?> &nbsp; 
	<?php previous_posts_link('Newer Entries &raquo;'); ?>
	</p>
	<?php else : ?>
	<div class="notfound">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that is not here.</p>
	</div>
	<?php endif; ?>

</div>
<!-- END content -->

<?php get_sidebar(); get_footer(); ?>
