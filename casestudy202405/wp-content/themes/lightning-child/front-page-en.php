<?php do_action( 'lightning_site_body_before', 'lightning_site_body_before' ); ?>

<div class="<?php lightning_the_class_name( 'site-body' ); ?>">
	<?php do_action( 'lightning_site_body_prepend', 'lightning_site_body_prepend' ); ?>
	<div class="<?php lightning_the_class_name( 'site-body-container' ); ?>">

		<div class="<?php lightning_the_class_name( 'main-section' ); ?>" id="main" role="main">
			<?php do_action( 'lightning_main_section_prepend', 'lightning_main_section_prepend' ); ?>

		<section id="sec1" class="section sec_bg_bk container">
			<div class="ttl"><h2>MESSAGE<span class="en">ご挨拶</span></h2></div>
			<p>We use exceptionally fresh, seasonal fish delivered daily from various parts of Japan, ensuring the high quality of our ingredients and delicious sushi for you to enjoy.</p>
			<p>We strive to serve you better and more delicious offerings.</p>
			<p>With this commitment, we continue to dedicate ourselves daily.</p>
			<p>We sincerely look forward to your visit.</p>
			<p>Owner, Ichiro Sakura</p>
		</section>
		<section id="sec2" class="section">
			<div class="ttl"><h2>SEASONAL MENU<span class="en">季節のおすすめ</span></h2></div>
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
			<div class="ttl"><h2>MENU<span class="en">お品書き</span></h2></div>
			<div class="content_inner">
				<h3 class="">Sashimi</h3>
				<div class="table_wrap">
					<ul class="table">
						<li class="">
						Assorted Sashimi Plate
						</li>
						<li class="">
						White Fish
						</li>
						<li class="">
						Swordtip Squid
						</li>
					</ul>
				</div>
				<h3 class="">Fish Selections</h3>
				<div class="table_wrap">
					<ul class="table">
						<li class="">
						Yellowtail
						</li>
						<li class="">
						Tuna
						</li>
						<li class="">
						Salmon
						</li>
						<li class="">
						Scallop
						</li>
						<li class="">
						Cockle Shell
						</li>
					</ul>
				</div>
				<h3 class="">Sushi</h3>
				<div class="table_wrap">
					<ul class="table">
						<li class="">
							Nigiri Sushi
						</li>
						<li class="">
							Tamago (Egg)
						</li>
						<li class="">
						Squid, Scallop, Salmon Roe, Herring Roe
						</li>
						<li class="">
							Shrimp, Sweet Shrimp
						</li>
					</ul>
				</div>
				<h3 class="">Rolled Sushi</h3>
				<div class="table_wrap">
					<ul class="table">
						<li class="">
						New Year’s Roll (with young vegetables), Perilla Leaf, Cucumber, Shiso Leaf, Natto (fermented soybeans)
						</li>
						<li class="">
						Spicy Tuna Roll, Squid and Cucumber Roll, Eel and Cucumber Roll, Salad Roll, Rolled Sushi with Various Fillings
						</li>
					</ul>
					</div>
			</div>
		</section>
		<section id="sec4" class="section">
			<div class="ttl"><h2>SPECIALTY<span class="en">当店のこだわり</span></h2></div>
			<div class="container">
				<div class="specialty-wrap">
					<div class="text">
						<p class="big">Dedicated to Freshness</p>
						<p>At Sakura Sushi, we use fresh ingredients delivered directly from various regions of Japan, crafting each piece of sushi with heartfelt dedication.<br>
						Every morning, we personally select and purchase only the finest ingredients at the market, touching and inspecting them to ensure no compromises on quality and freshness.</p>
					</div>
					<div class="img">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/img12.jpg" alt="Dedicated to Freshness">
					</div>
				</div>
				<div class="specialty-wrap">
					<div class="text">
						<p class="big">Dedicated to Rice</p>
						<p>We carefully select domestic rice that complements our sushi toppings, to bring out the best in our ingredients.</p>
					</div>
					<div class="img">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/img19.jpg" alt="Dedicated to Rice">
					</div>
				</div>
				<div class="specialty-wrap">
					<div class="text">
						<p class="big">Dedicated to Technique</p>
						<p>Our sushi chefs are committed to perfecting their technique to maximize the potential of the ingredients.</p>
					</div>
					<div class="img">
						<video autoplay="autoplay" loop="loop" muted=""><source type="video/mp4" src="<?php echo get_stylesheet_directory_uri();?>/img/movie.mp4"></video>
					</div>
				</div>
			</div>
		</section>
		<section id="sec5" class="section">
			<div class="ttl"><h2>ACCESS<span class="en">店舗</span></h2></div>
			<div class="row">
				<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8173180206722!2d139.76291836250084!3d35.68149992247284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf97912d02d%3A0xee1220ee8337117!2z44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1712940848095!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-md-6">
			<p>1-1 Marunouchi, Chiyoda-ku, Tokyo 100-0005, Japan<br>
					000-000-0000<br>
					Closed on Sundays and Mondays</p>
				<p>Business Hours:<br>
					Lunch | 11:00 AM - <br>
					Dinner | 5:00 PM - (from 3:00 PM on Saturdays)</p>
					<div class="insta"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Instagram.png" width=40px></a></div>
			</div>
			</div>
		</section>
		<section id="sec6" class="section">
			<div class="ttl"><h2>RESERVE<span class="en">予約</span></h2></div>
			<p>Due to limited seating, we recommend making a reservation in advance.</p>
			<a href="">Click here to reserve<div class="layer_box layer_outline"><span></span></div></a>
		</section>

			<?php do_action( 'lightning_main_section_append', 'lightning_main_section_append' ); ?>
		</div><!-- [ /.main-section ] -->
	</div><!-- [ /.site-body-container ] -->

	<?php do_action( 'lightning_site_body_append', 'lightning_site_body_append' ); ?>

</div><!-- [ /.site-body ] -->