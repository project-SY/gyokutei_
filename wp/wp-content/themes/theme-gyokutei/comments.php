<div class="comment-headline">コメント(<?php get_comments_number(); ?>)</div>
<?php wp_list_comments('callback=mytheme_comment'); ?>
<?php
$args = array(
	'fields' => array(
		'email'  => '<p class="comment-form-email">' .
								'<label>メールアドレス<span class="red">（必須）</span></label><input id="email" name="email"' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'author' => '<p class="comment-form-author">'.
								'<label>お名前<span class="red">（必須）</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'checkbox'    => '<div>
												<input type="checkbox">
												<label>新しいコメントがついたらメールで通知</label>
											</div>',
		),
);
comment_form($comments_args);
?>