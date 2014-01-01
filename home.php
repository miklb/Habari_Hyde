<?php $theme->display ( 'header' ); ?>	
	<div class="content container">
		<div class="posts">
      		<?php foreach ( $posts as $post ) { ?>
				<?php echo $theme->content($post); ?>
			<?php }  ?>
			<div class="pagination">
				<span class="next"><?php echo $theme->next_page_link( _t('Older') ); ?></span>
				<span class="previous"><?php echo $theme->prev_page_link( _t('Newer') ); ?></span>
			</div>
    	</div>
	</div>
	<?php echo $theme->footer(); ?>
  </body>
</html>