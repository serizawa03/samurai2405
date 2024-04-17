<?php
/**
 * Lightning G3 index.php common template-file
 *
 * @package vektor-inc/lightning
 */

use VektorInc\VK_Breadcrumb\VkBreadcrumb;

?><?php lightning_get_template_part( 'header' ); ?>

<?php
do_action( 'lightning_site_header_before', 'lightning_site_header_before' );
if ( apply_filters( 'lightning_is_site_header', true, 'site_header' ) ) {
	lightning_get_template_part( 'template-parts/site-header' );
}
do_action( 'lightning_site_header_after', 'lightning_site_header_after' );
?>

<?php if(get_locale() == 'ja'): ?>
<?php do_action( 'lightning_site_body_before', 'lightning_site_body_before' ); ?>

<div class="<?php lightning_the_class_name( 'site-body' ); ?>">
	<?php do_action( 'lightning_site_body_prepend', 'lightning_site_body_prepend' ); ?>
	<div class="<?php lightning_the_class_name( 'site-body-container' ); ?>">

		<div class="<?php lightning_the_class_name( 'main-section' ); ?>" id="main" role="main">
			<?php do_action( 'lightning_main_section_prepend', 'lightning_main_section_prepend' ); ?>

			<section id="sec1" class="section sec_bg_bk container">
			<div class="ttl"><h2>ご挨拶<span class="en">MESSAGE</span></h2></div>
			<p>毎朝、日本各地から直送されるとびきり新鮮な旬の魚を使用しておりますので、ネタの質が高く、美味しい寿司をお召し上がりいただけます。</p>
			<p>お客様により良いものを、より美味しく召し上がっていただきたい</p>
			<p>その志の元、日々精進を重ねていきます。</p>
			<p>皆様のお越しを心よりお待ちしております。</p>
			<p>店主　佐倉一郎</p>
	</section>
	<section id="sec2" class="section">
		<div class="ttl"><h2>季節のおすすめ<span class="en">SEASONAL MENU</span></h2></div>
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6">
					<img src="<?php the_field('osusume1_2'); ?>">
				</div>
				<div class="col-md-6">
					<?php the_field('osusume1_1'); ?>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-6">
					<img src="<?php the_field('osusume2_2'); ?>">
				</div>
				<div class="col-md-6">
					<?php the_field('osusume2_1'); ?>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-6">
					<img src="<?php the_field('osusume3_2'); ?>">
				</div>
				<div class="col-md-6">
					<?php the_field('osusume3_1'); ?>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-6">
					<img src="<?php the_field('osusume4_2'); ?>">
				</div>
				<div class="col-md-6">
					<?php the_field('osusume4_1'); ?>
				</div>
			</div>
		</div>

	</section>
	<section id="sec3" class="section sec_bg_bk container">
		<div class="ttl"><h2>お品書き<span class="en">MENU</span></h2></div>
		<div class="content_inner">
			<h3 class="">お造り</h3>
			<div class="table_wrap">
				<ul class="table">
					<li class="">
						造り盛合せ、白身、剣先いか
					</li>
					<li class="">
						はまち、まぐろ、サーモン、貝柱、とり貝
					</li>
				</ul>
			</div>
			<h3 class="">すし</h3>
			<div class="table_wrap">
				<ul class="table">
					<li class="">
						にぎり
					</li>
					<li class="">
						玉子
					</li>
					<li class="">
						いか、貝柱、数の子、いくら
					</li>
					<li class="">
						えび、甘えび
					</li>
					<li class="">
						巻き物／しんこ、しば、きゅうり、しそ、納豆
					</li>
					<li class="">
						鉄火、いかきゅう、うなきゅう、サラダ、巻ずし
					</li>
				</ul>
				</div>
		</div>
	</section>
	<section id="sec4" class="section">
		<div class="ttl"><h2>当店のこだわり<span class="en">SPECIALTY</span></h2></div>
		<div class="container">
		<div class="specialty-wrap">
			<div class="text">
				<p class="big">鮮度にこだわり</p>
				<p>桜寿司では、日本各地から直送される新鮮な食材を使用し、一貫一貫に心を込めてお作りしています。<br>
				毎朝、市場にて実際に目で見て手に触れ、一番のものだけを目利き、仕入れております。品質と鮮度に妥協はありません。</p>
			</div>
			<div class="img">
			<img src="<?php echo get_stylesheet_directory_uri();?>/img/img12.jpg" alt="鮮度にこだわり">
			</div>
		</div>
		<div class="specialty-wrap">
			<div class="text">
				<p class="big">米にこだわり</p>
				<p>ネタの良さを引き出す米も寿司ネタに合うよう選び抜いた国産米を使用しております。</p>
			</div>
			<div class="img">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/img19.jpg" alt="米にこだわり">
			</div>
		</div>
		<div class="specialty-wrap">
			<div class="text">
				<p class="big">技術にこだわり</p>
				<p>私たち寿司職人は、素材を最大限に活かすため、握り方にもこだわっています。</p>
			</div>
			<div class="img">
				<video autoplay="autoplay" loop="loop" muted=""><source type="video/mp4" src="<?php echo get_stylesheet_directory_uri();?>/img/movie.mp4"/></video>
			</div>
		</div>
		</div>
	</section>
	<section id="sec5" class="section">
		<div class="ttl"><h2>店舗<span class="en">ACCESS</span></h2></div>
		<div class="row">
			<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8173180206722!2d139.76291836250084!3d35.68149992247284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf97912d02d%3A0xee1220ee8337117!2z44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1712940848095!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class="col-md-6">
	<p>〒100-0005 東京都千代田区丸の内１丁目<br>
	000-000-0000<br>
	日曜・月曜定休</p>
	<p>営業時間：<br>
	昼｜11:00〜<br>
	夜｜17:00〜（土曜　15:00〜）</p>
	<div class="insta"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Instagram.png" width=40px></a></div>
	</div>
	</div>
	</section>
	<section id="sec6" class="section">
		<div class="ttl"><h2>予約<span class="en">RESERVE</span></h2></div>
		<p>座席数が少ないため、事前のご予約をおすすめしています。</p>
		<a href="">予約はこちら<div class="layer_box layer_outline"><span></span></div></a>
	</section>

			<?php do_action( 'lightning_main_section_append', 'lightning_main_section_append' ); ?>
		</div><!-- [ /.main-section ] -->
	</div><!-- [ /.site-body-container ] -->

	<?php do_action( 'lightning_site_body_append', 'lightning_site_body_append' ); ?>

</div><!-- [ /.site-body ] -->

<?php else: ?>
	<?php lightning_get_template_part( 'front-page-en' ); ?>
<?php endif; ?>

<?php
do_action( 'lightning_site_footer_before', 'lightning_site_footer_before' );
if ( apply_filters( 'lightning_is_site_footer', true, 'site_footer' ) ) {
	lightning_get_template_part( 'template-parts/site-footer' );
}
do_action( 'lightning_site_footer_after', 'lightning_site_footer_after' );
?>

<?php lightning_get_template_part( 'footer' ); ?>
