<?php
	
	class Hyde extends Theme {

			function action_template_header($theme) {
				//Add Fonts
				Stack::add('template_stylesheet', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700|Abril+Fatface', 'fonts' );
				//Add CSS
				Stack::add ('template_stylesheet', array($this->get_url( '/assets/css/style.css' )),'main', 'extras');
			}

		public function action_init_theme ( $theme ) {

			// Apply Format::autop() to comment content...
			Format::apply( 'autop', 'comment_content_out' );
			// Apply Format::tag_and_list() to post tags...
			Format::apply( 'tag_and_list', 'post_tags_out' );
			// Only uses the <!--more--> tag, with the 'more' as the link to full post
			Format::apply_with_hook_params( 'more', 'post_content_out', 'more' );
			// Creates an excerpt option. echo $post->content_excerpt;
			Format::apply( 'autop', 'post_content_excerpt' );
			Format::apply_with_hook_params( 'more', 'post_content_excerpt', 'more', 60, 1 );
			Format::apply( 'format_date', 'post_pubdate_datetime','{Y}-{m}-{d}' );
			Format::apply( 'format_date', 'post_pubdate_out', '{F} {j}{S}, {Y}');


		}

		public function action_add_template_vars($theme) {
		
		if( !$theme->template_engine->assigned( 'pages' ) ) {
					$theme->assign('pages', 
						Posts::get( array( 'content_type' => 'page',
						    'status' => Post::status('published'),
						    'nolimit' => 1 ) ) );
		}
	}

		
	}
?>