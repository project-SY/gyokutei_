<div class="comment-headline">コメント(2)</div>
	 <?php wp_list_comments('callback=mytheme_comment'); ?>
<?php
$comments_args = array(
	'fields' => array(
		'email'  => '<p class="comment-form-email">' .
	              	'<input id="email" name="email" placeholder="メールアドレス" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'author' => '<p class="comment-form-author">'.
	              	'<input id="author" name="author" type="text" placeholder="お名前" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'checkbox'    => '<div>
												<input type="checkbox">
												<label>新しいコメントがついたらメールで通知</label>
											</div>',
		),
);
comment_form($comments_args);
?>