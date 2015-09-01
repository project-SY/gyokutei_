<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="blog single">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv.png" alt="ブログ">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-blog-kv-sp.png" alt="ブログ">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-blog-caption.png" alt="ブログ" class="caption pc">
		<p class="caption-p">お庭の様子や旬の素材から、箱根の豊かな自然を皆様のもとにお届けしたいと思っております。<br />
時折、お読みいただいて、箱根の 事を思い浮かべていただければ幸いです。</p>
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
					<?php comments_template() ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php include('blog-sidebar.php'); ?>
		</div>
<?php include('footer.php'); ?>