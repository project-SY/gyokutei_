<?php
/*
Template Name: archive
*/
?>
<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="blog">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv.png" alt="お知らせ">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv-sp.png" alt="お知らせ">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-blog-caption.png" alt="ブログ" class="caption pc">
		<p class="caption-p">お庭の様子や旬の素材から、箱根の豊かな自然を皆様のもとにお届けしたいと思っております。<br />
時折、お読みいただいて、箱根の 事を思い浮かべていただければ幸いです。</p>
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