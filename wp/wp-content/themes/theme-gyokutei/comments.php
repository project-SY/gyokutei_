<div class="comment-headline">コメント<?php comments_number('(0)','(1)','(%)'); ?></div>
	 <?php wp_list_comments('callback=mytheme_comment'); ?>
<?php
$comments_args = array(
	'fields' => array(
		'author' => '<p class="comment-form-author">'.
	              	'<label>お名前<span class="red">（必須）</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
		'email'  => '<p class="comment-form-email">' .
	              	'<label>メールアドレス</label><input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
	               </p>',
	  'comment_field' => '<p class="comment-form-textarea"><label for="comment">コメントを書く<span class="red">（必須）</span></label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
		),
);
comment_form($comments_args);
?>