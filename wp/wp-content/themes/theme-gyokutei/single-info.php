<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="info">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-info-kv.png" alt="お風呂">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-info-kv-sp.png" alt="お風呂">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-info-caption.png" alt="お風呂" class="caption pc">
		<p class="caption-p">茶事は一年を通じ、自然の移り変わりや季節に応じて催されます。新しい茶を使い<br />始める初冬の時期の「口切」の茶から、「古茶」と呼ぶ</p>
		<div class="info-articles-article">
			<!--ループ処理 start-->
				<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
					<h4><?php echo the_title(); ?></h4>
					<time><?php echo get_the_date(); ?></time>
					<p>
						<?php the_content(); ?>
					</p>
				<?php endwhile; ?>
				<?php endif; ?>
			<!--ループ処理 end-->
			</div>
			<div class="pager">
				<ul class="clearfix">
					<li><a href=""><img class="icon-left" src="<?php bloginfo('template_url'); ?>/images/icon-info-left-allow.png" alt="">過去の投稿</a></li>
					<li><a href="">新しい投稿<img class="icon-right" src="<?php bloginfo('template_url'); ?>/images/icon-info-right-allow.png" alt=""></a></li>
				</ul>
			</div>
		</div>

<?php include('footer.php'); ?>