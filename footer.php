<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>



<footer class="cud-footer">
	<div class="container">
		<div class="row">
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<?php $menu = wp_get_nav_menu_object("Web Development"); ?>
				<h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
				<?php
				echo wp_nav_menu(array(
					'menu'        => 'Web Development',
					'menu_id'     => 'nav',
					'menu_class'  => 'cud-footer-nav',
					'fallback_cb' => false,
					'depth'       => 1,
				));
				?>
			</div>
			<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 order-1">
						<?php $menu = wp_get_nav_menu_object("Services"); ?>
						<h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Services',
							'menu_id'     => 'nav',
							'menu_class'  => 'cud-footer-nav',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 order-sm-2 order-3">
						<?php $menu = wp_get_nav_menu_object("Other Links"); ?>
						<h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Other Links',
							'menu_id'     => 'nav',
							'menu_class'  => 'cud-footer-nav',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 order-md-3 order-sm-6 order-6">
						<div class="cud-footer-book">
							<h3 class="cud-footer-title text-white">Schedule meeting</h3>
							<a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener">Book Meeting</a>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 order-sm-4 order-2">
						<?php $menu = wp_get_nav_menu_object("Mobile App Development"); ?>
						<h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Mobile App Development',
							'menu_id'     => 'nav',
							'menu_class'  => 'cud-footer-nav',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 order-sm-5 order-4">
						<?php $menu = wp_get_nav_menu_object("Support"); ?>
						<h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Support',
							'menu_id'     => 'nav',
							'menu_class'  => 'cud-footer-nav',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 order-last">
						<div class="cud-footer-address">
							<?php if (is_active_sidebar('cud_address')) { ?>
								<?php dynamic_sidebar('cud_address'); ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
				<div class="cud-footer-review">
					<div class="row">
						<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<a href="https://clutch.co/profile/creative-ui-design#reviews" target="_blank" rel="noopener">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/home/clutch.webp" width="400" height="161" class="img-fluid" alt="Clutch">
							</a>
						</div>
						<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<a href="https://www.goodfirms.co/company/creative-ui-design-llc" target="_blank" rel="noopener">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/home/goodfirms.webp" width="400" height="161" class="img-fluid" alt="GoodFirms">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">

				<div class="cud-footer-box">
					<h3 class="cud-footer-title mt-0">Follow us on</h3>
					<?php if (is_active_sidebar('cud_social_media')) { ?>
						<?php dynamic_sidebar('cud_social_media'); ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="cud-copy-rights">
	<div class="container">
		<div class="cud-copy-rights-content">
			<p>©<?php echo date('Y'); ?> <span><?php echo get_bloginfo(); ?></span>. All Rights Reserved.</p>
		</div>
	</div>
</div>
<div class="cud-quickChat">
	<button class="cud-quickChat-button" type="button" title="Quick Chat">
		<div class="menu-icon-wrapper">
			<div class="menu-icon-line half first"></div>
			<div class="menu-icon-line"></div>
			<div class="menu-icon-line half last"></div>
		</div>
	</button>
	<?php //if ( is_active_sidebar( 'cud_quickchat' ) ) {
	?>
	<?php //dynamic_sidebar('cud_quickchat');
	?>
	<?php //}
	?>
	<ul class="cud-quickChat-list">
		<li class="cud-quickChat-list-item">
			<a href="<?php echo get_theme_mod('kp_whatsapp_link', true); ?>" target="_blank" rel="noopener">WhatsApp</a>
		</li>
		<li class="cud-quickChat-list-item">
			<a href="<?php echo get_theme_mod('kp_telegram_link', true); ?>" target="_blank" rel="noopener">Telegram</a>
		</li>
		<li class="cud-quickChat-list-item">
			<a href="<?php echo get_theme_mod('kp_skype_link', true); ?>" target="_blank" rel="noopener">Skype</a>
		</li>
	</ul>

</div>

</div><!-- #page -->
<div class="cud-navigation-drawer cud-navigation-drawer-mainMenu">
	<div class="cud-navigation-drawer-header">
		<!-- <h2 class="cud-title">Wel<span>come</span></h2> -->
		<div class="cud-logo">
			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			?>
			<a href="<?php echo get_option("siteurl"); ?>" title="Ask Datatech">
				<img src="<?php echo $logo[0]; ?>" alt="Ask Datatech" width="<?php echo $logo[1]; ?>" height="<?php echo $logo[2]; ?>" class="img-fluid">
			</a>

		</div>
		<div class="cud-right">
			<button class="cud-navigation-drawer-close" type="button" title="close">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
					<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
				</svg>
			</button>
		</div>
	</div>
	<div class="cud-navigation-drawer-body cud-scroll">
	</div>
	<div class="cud-navigation-drawer-footer">
		<a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener" class="cud-btn cud-btn-tertiary w-100">Book Meeting</a>
	</div>
</div>
<div class="cud-overly"></div>
<?php wp_footer(); ?>

</body>

</html>