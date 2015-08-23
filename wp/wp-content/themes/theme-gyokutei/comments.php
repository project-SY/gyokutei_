<div class="comment-headline">コメント(<?php get_comments_number(); ?>)</div>
<?php wp_list_comments('callback=mytheme_comment'); ?>
<?php
$args = array(
	'fields' => array(
		'email'  => '<p class="comment-form-email">' .
	              	'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'author' => '<p class="comment-form-author">'.
	              	'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'url'    => '',
	),
);
comment_form($comments_args);
?>