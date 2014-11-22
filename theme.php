<?php

class Hyde extends Theme {

	function action_template_header($theme) {
		//Add CSS
		Stack::add('template_stylesheet', array($this->get_url('/assets/css/style.min.css')), 'main', 'extras');
		//Font Loader
		Stack::add('template_footer_javascript', '///ajax.googleapis.com/ajax/libs/webfont/1.5.6/webfont.js', 'fontloaderjs');
		Stack::add('template_footer_javascript', array($this->get_url('/assets/js/site.min.js')), 'sitejs', 'fontloaderjs');
	}

	public function action_init_theme($theme) {

		// Apply Format::autop() to comment content...
		Format::apply('autop', 'comment_content_out');
		// Apply Format::tag_and_list() to post tags...
		Format::apply('tag_and_list', 'post_tags_out');
		// Only uses the <!--more--> tag, with the 'more' as the link to full post
		//Format::apply_with_hook_params( 'more', 'post_content_out', 'more' );
		// Creates an excerpt option. echo $post->content_excerpt;
		Format::apply('autop', 'post_content_excerpt');
		Format::apply_with_hook_params('more', 'post_content_excerpt', 'more', 60, 1);
		Format::apply('format_date', 'post_pubdate_datetime', '{Y}-{m}-{d}');
		Format::apply('format_date', 'post_pubdate_out', '{F} {j}{S}, {Y}');

	}

	public function action_add_template_vars($theme) {

		if (!$theme->template_engine->assigned('pages')) {
			$theme->assign('pages',
				Posts::get(array('content_type' => 'page',
						'status'                      => Post::status('published'),
						'nolimit'                     => 1)));
		}
	}

}
?>
