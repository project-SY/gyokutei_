<?php
/*
Template Name: reservation
*/
?>
<?php include('head.php'); ?>
	<?php include('nav.php'); ?>
	<div id="contents" class="reservation">
		<div class="kv-same">
  		<img class="pc" src="<?php bloginfo('template_url'); ?>/images/pic-reservation-kv.png" alt="予約">
  		<img class="sp" src="<?php bloginfo('template_url'); ?>/images/pic-reservation-kv-sp.png" alt="予約">
  	</div>
		<img src="<?php bloginfo('template_url'); ?>/images/icon-same.png" alt="アイコン" class="icon-same pc">
		<img src="<?php bloginfo('template_url'); ?>/images/txt-reservation-caption.png" alt="お風呂" class="caption pc">
		<p class="caption-p">
			料金は1泊2食・サービス料込み、1名様の金額です。<br />
			12/31-1/3は正月の特別料金となります
		</p>
		<div class="reservation-inner reservation-inner-color">
			<div class="subhead reservation-subhead-01"></div>
			<p class="reservation-desc">料金は1泊2食・サービス料込み、1名様の金額です。<br />12/31-1/3は正月の特別料金になります。</p>
			<div class="reservation-price"></div>
		</div>
		<div class="reservation-inner">
			<div class="subhead reservation-subhead-02"></div>
			<div class="reservation-info"></div>
		</div>
		<div class="reservation-inner reservation-inner-color">
			<div class="subhead reservation-subhead-03"></div>
			<div class="reservation-subtitle-01"></div>
			<h6>0560-85-8501</h6>
			<p class="sp">受付時間9:00-22:00</p>
			<div class="reservation-subtitle-02"></div>
			<div class="reservation-btn-area clearfix">
				<ul>
					<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/btn-reservation-apply.png" alt="お申し込み"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/btn-reservation-cofirm.png" alt="確認・キャンセル"></a></li>
				</ul>
			</div>
		</div>
<?php include('footer.php'); ?>