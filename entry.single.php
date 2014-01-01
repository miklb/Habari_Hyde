<?php $theme->display ( 'header' ); ?>	
	<div class="content container">
		<article class="post">
      		<h1><?php echo $post->title_out; ?></h1>
  
 		<span class="post-date"><data itemprop="datePublished" value="<?php echo $post->pubdate_datetime; ?>"><?php echo $post->pubdate_out; ?></data></span>

 		<?php echo $post->content_out; ?>
    	</article>
	</div>
	<?php echo $theme->footer(); ?>
  </body>
</html>