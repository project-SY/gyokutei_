<?php
/*
Template Name: info
*/
?>
<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="info">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-info-kv.png" alt="お知らせ">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-info-kv-sp.png" alt="お知らせ">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-info-caption.png" alt="お風呂" class="caption pc">
		<p class="caption-p">玉庭のお料理や温泉を楽しみに来てくださるお客様に、さらに喜んでいただけるプランなどをご用意しています。<br />
いろいろな機会にご利用いただきたいと思います。</p>
		<div class="info-articles">
			<!--ループ処理 start-->
				<?php query_posts('posts_per_page=3&post_type=info&paged='.$paged); ?>
				<?php if(have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php if(is_odd_post()): ?>
	        <a href="<?php the_permalink(); ?>">
						<div class="info-articles-article bg-odd">
							<h4><?php echo the_title(); ?></h4>
							<time><?php echo get_the_date(); ?></time>
							<p>
								<?php the_content(); ?>
							</p>
						</div>
					</a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>">
						<div class="info-articles-article">
							<h4><?php echo the_title(); ?></h4>
							<time><?php echo get_the_date(); ?></time>
							<p>
								<?php the_content(); ?>
							</p>
						</div>
					</a>
				<?php endif; ?>
				<?php endwhile; ?>
				<div class="pager">
							<?php wp_pagenavi(); ?>
				</div>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			<!--ループ処理 end-->
		</div>
	</div>

<?php include('footer.php'); ?>