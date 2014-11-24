<?php $theme->display('header');?>
	<div class="content container">
		<div class="page">
      		<h1><?php echo $post->title_out;?></h1>

<?php echo $post->content_out;?>
</div>
	</div>
<?php $theme->display('footer');?>