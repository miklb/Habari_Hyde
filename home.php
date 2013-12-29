<?php $theme->display ( 'header' ); ?>	
	<div class="content container">
		<div class="posts">
      		<?php foreach ( $posts as $post ) { ?>
				<?php echo $theme->content($post); ?>
			<?php }  ?>
    	</div>
	</div>
  </body>
</html>