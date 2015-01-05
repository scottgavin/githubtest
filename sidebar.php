<!-- BEGIN sidebar -->
<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar(1) ) : ?>	
	
    <div class="box">    
    <!-- begin advertisement -->
	<div class="ads">  
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	</div>
	<!-- end advertisement -->
    </div>
    
    <!-- begin popular posts -->
	<div class="box">
	<ul>
    <li class="rssfeed" style="padding-left:20px;"><a href="<?php bloginfo('rss2_url'); ?>">Subscribe via RSS Feed</a></li>
    <li class="twitter" style="padding-left:20px;"><a href="#">Follow Me on Twitter</a></li>
    <li class="facebook" style="padding-left:20px;"><a href="#">Connect With Me On Facebook</a></li>
    <li class="linkedin" style="padding-left:20px;"><a href="#">Connect With Me on LinkeIn</a></li>
    </ul>
	</div>
	<!-- end popular posts -->
    
	<!-- begin popular posts -->
	<div class="box">
	<h2>Popular Posts</h2>
	<ul>
	<?php dp_popular_posts(3); ?>
	</ul>
	</div>
	<!-- end popular posts -->
	
	<!-- begin flickr photos -->
	<div class="box">
	<h2>Flickr Photos</h2>
	<p class="flickr">
	<?php if (function_exists('get_flickrRSS')) get_flickrRSS(); ?>
	</p>
	</div>
	<!-- end flickr photos -->
	
	<!-- begin featured video -->
	<div class="box">
	<h2>Featured Video</h2>
	<div class="video">
	<script type="text/javascript">showVideo('<?php echo dp_settings("youtube") ?>');</script>
	</div>
	</div>
	<!-- end featured video -->
	
    <!-- begin site sponsors -->
	<div class="box">
	<h2>TagCloud</h2>
	<div class="tags">
	<?php 
	if (function_exists('wp_cumulus_insert')) : wp_cumulus_insert();
	elseif (function_exists('wp_widget_tag_cloud')) : wp_widget_tag_cloud(array('before_title'=>'<!--','after_title'=>'-->'));
	endif;
	?>
	</div>
	</div>
	<!-- end site sponsors -->
    
	<?php endif; ?>

<!-- BEGIN links -->
<div id="links">

<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar(2) ) : ?>

	<div class="col_1">
	<!-- begin categories -->
	<div class="box">    	
		<h2>Categories</h2>	  
	<ul>
	<?php wp_list_categories('title_li='); ?>
	</ul>
	</div>
	<!-- end categories -->
	
    <!-- begin blogroll -->
	<div class="box">	     
    <?php wp_list_bookmarks('category_before=&category_after=&title_before=<h2>&title_after=</h2>'); ?>
    
	</div>
	<!-- end blogroll -->
    
    </div>
    
    <div class="col_2">
	<!-- begin archives -->
	<div class="box">
      <h2>Archives</h2>
	<ul>
	<?php wp_get_archives('type=monthly'); ?>
	</ul>
	</div>
	<!-- end archives -->	
	
	<!-- begin meta -->
	<div class="box">
	<h2>Meta</h2>
	<ul>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
	<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
	<?php wp_meta(); ?>
	</ul>
	</div>
	<!-- end meta -->
	</div>
<?php endif; ?>

</div>
<!-- END links -->


</div>
<!-- END sidebar -->
