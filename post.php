	<article class="post">

  		<h1><a href="<?php echo $content->permalink; ?>" title="<?php echo $content->title; ?>"><?php echo $content->title_out; ?></a></h1>
  
 		<span class="post-date"><data itemprop="datePublished" value="<?php echo $post->pubdate_datetime; ?>"><?php echo $content->pubdate->format(Options::get('dateformat')); ?></data></span>
    <?php echo $content->content_out; ?>
         
	</article>