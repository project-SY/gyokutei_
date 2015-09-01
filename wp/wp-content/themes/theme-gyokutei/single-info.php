<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="blog single">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-info-kv.png" alt="お知らせ">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-info-kv-sp.png" alt="お知らせ">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-info-caption.png" alt="お知らせ" class="caption pc">
		<p class="caption-p">玉庭のお料理や温泉を楽しみに来てくださるお客様に、さらに喜んでいただけるプランなどをご用意しています。<br />
		いろいろな機会にご利用いただきたいと思います。</p>
		<div class="blog-area clearfix">
			<div id="single" class="single-info">
				<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
				<div class="blog-title">
					<h2><?php echo the_title(); ?></h2>
					<time><?php echo the_date(); ?></time>
				</div>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
<?php include('footer.php'); ?>