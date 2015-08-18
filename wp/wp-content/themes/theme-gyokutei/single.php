<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="blog">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv.png" alt="ブログ">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv-sp.png" alt="ブログ">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-blog-caption.png" alt="ブログ" class="caption pc">
		<p class="caption-p">茶事は一年を通じ、自然の移り変わりや季節に応じて催されます。新しい茶を使い<br />始める初冬の時期の「口切」の茶から、「古茶」と呼ぶ</p>
		<div class="blog-area clearfix">
			<div id="single">
				<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
				<div class="blog-title">
					<h2><?php echo the_title(); ?></h2>
					<time><?php echo the_date(); ?></time>
				</div>
				<p>
					<?php the_content(); ?>
				</p>
				<div id="comments">
					<div class="comment-headline">コメント(2)</div>
					<div class="comment-view">
						<h5>ひろみ</h5>
						<time><?php echo the_date()?></time>
						<p>
							箱根湯本の旅館にて調理補助として頑張っています。ご飯の炊き方や、お新香の盛り付けなどでの、自分のこだわりのような？上手く伝えられませんが、お造りと同じようにという感覚。良いですね。<br />
	            日々の中で心豊かに感じていらっしゃるところ、素敵です。
	           </p>
					</div>
					<div class="comment-view">
						<h5>ひろみ</h5>
						<time>2015/5/13</time>
						<p>
							箱根湯本の旅館にて調理補助として頑張っています。ご飯の炊き方や、お新香の盛り付けなどでの、自分のこだわりのような？上手く伝えられませんが、お造りと同じようにという感覚。良いですね。<br />
	            日々の中で心豊かに感じていらっしゃるところ、素敵です。
	            </p>
					</div>
					<div class="comment-form">
						<div class="comment-headline">コメントを残す</div>
							<form action="">
								<textarea></textarea>
								<input type="text">
								<input type="text">
								<div>
									<input type="checkbox">
									<label>新しいコメントがついたらメールで通知</label>
								</div>
								<input class="submit" type="submit">
							</form>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php include('blog-sidebar.php'); ?>
		</div>
<?php include('footer.php'); ?>