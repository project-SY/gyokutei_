<div id="blog-sidebar">
	<div class="blog-sidebar-category">
		<div class="sp-blog-menu sp">
			カテゴリー
			<div class="select-btn">
				<img class="triangle" src="<?php bloginfo('template_url'); ?>/images/icon-blog-accordion-arrow.png">
			</div>
		</div>
		<ul>
			<?php
			$args = array(
			'style'              => 'list',
			'show_count'         => 1,
			'hide_empty'         => 1,
			'title_li'           => __( '' ),
    	);
			wp_list_categories( $args ); ?>
		</ul>
	</div>
	<div class="blog-sidebar-posted">
		<div class="sp-blog-menu sp">
			過去の投稿
			<div class="select-btn">
				<img class="triangle" src="<?php bloginfo('template_url'); ?>/images/icon-blog-accordion-arrow.png">
			</div>
		</div>
		<ul>
		<?php
			$args = array(
			'type'            => 'monthly',
			'limit'           => '',
			'format'          => 'html',
			'before'          => '',
			'after'           => '',
			'show_post_count' => true,
			'echo'            => 1,	
			'order'           => 'DESC'
		);
			 wp_get_archives( $args ); ?>
		</ul>
	</div>
</div>