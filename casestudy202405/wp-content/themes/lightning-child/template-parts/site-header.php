<header id="site-header" class="">
	<?php do_action( 'lightning_site_header_prepend' ); ?>
	<div id="" class="hero">

		<h1 class="">
			<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo4.png" alt="桜寿司">
		</h1>

		<?php do_action( 'lightning_site_header_logo_after' ); ?>

		<?php
		if ( class_exists( 'VK_Description_Walker' ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'global-nav',
					'container'       => 'nav',
					'container_class' => lightning_get_the_class_name( 'global-nav' ),
					'container_id'    => 'global-nav',
					'items_wrap'      => '<ul id="%1$s" class="%2$s vk-menu-acc global-nav-list nav">%3$s</ul>',
					'fallback_cb'     => '',
					'echo'            => true,
					'walker'          => new VK_Description_Walker(),
				)
			);
		}
		?>
	</div>
	<?php do_action( 'lightning_site_header_append' ); ?>

	<aside id="lang-switch">
		<ul><?php pll_the_languages();?></ul>
	</aside>
</header>
