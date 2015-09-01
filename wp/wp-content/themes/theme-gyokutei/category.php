<?php
/*
Template Name: category
*/
?>
<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="blog">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv.png" alt="ブログ">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv-sp.png" alt="ブログ">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-blog-caption.png" alt="ブログ" class="caption pc">
		<p class="caption-p">
			茶事は一年を通じ、自然の移り変わりや季節に応じて催されます。新しい茶を使い
			<br />始める初冬の時期の「口切」の茶から、「古茶」と呼ぶ
		</p>
		<div class="blog-area clearfix">
			<div class="blog-articles">
				<ul>
					<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
					<?php if (is_odd_post()): ?>
						<li class="blog-article bg-odd">
							<a href="<?php the_permalink(); ?>">
								<h6><?php echo the_title(); ?></h6>
								<time><?php echo get_the_date(); ?></time>
								<p>
									<?php the_content(); ?>
								</p>
								<div href="#">もっと読む</div>
							</a>
						</li>
					<?php else: ?>
						<li class="blog-article">
							<a href="<?php the_permalink(); ?>">
								<h6><?php echo the_title(); ?></h6>
								<time><?php echo get_the_date(); ?></time>
								<p>
									<?php the_content(); ?>
								</p>
								<div href="#">もっと読む</div>
							</a>
						</li>
					<?php endif; ?>
					<?php endforeach; ?>
					<div class="pager">
							<?php wp_pagenavi(); ?>
					</div>
					<?php endif; ?>
				</ul>
			</div>
			<?php include('blog-sidebar.php'); ?>
		</div>
<?php include('footer.php'); ?>