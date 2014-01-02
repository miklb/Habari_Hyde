<?php $theme->display ( 'header' ); ?>	
	<div class="content container">
		<article class="post">
      		<h1><?php echo $post->title_out; ?></h1>
  
 		<span class="post-date"><data itemprop="datePublished" value="<?php echo $post->pubdate_datetime; ?>"><?php echo $post->pubdate_out; ?></data></span>

 		<?php echo $post->content_out; ?>
 		<?php echo $theme->area( 'post_footer' ); ?>

 		<div class="comments" itemprop="comment">
			<h3 id="comments">Comments</h1>
			<?php if($post->comments->moderated->count == 0): ?>
				<p><?php _e('There are no comments on this post.'); ?></p>
			<?php else: ?>
				<?php foreach($post->comments->moderated->comments as $comment): ?>
					<?php echo $theme->content($comment); ?>
				<?php endforeach; ?>
			<?php endif; ?>
			<?php if($post->info->comments_disabled): ?>
				<p><?php _e('Sorry, commenting on this post is disabled.'); ?>
			<?php else: ?>
			<?php $post->comment_form()->out(); ?>
			<?php endif; ?>
		</div>
    	</article>

	</div>
	<?php echo $theme->footer(); ?>
  </body>
</html>