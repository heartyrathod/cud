<?php if (is_page('blog') || is_category()) {
	$post_ID = '376';
} else {
	$post_ID = $post->ID;
}
?>
<?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post_ID), "full"); ?>
<?php if (have_rows('banner', $post_ID)) : ?>
	<?php while (have_rows('banner', $post_ID)) : the_row(); ?>
		<section class="cud-banner cud-banner-<?php echo get_sub_field('banner_background_color') ?>">
			<div class="container">
				<div class="cud-banner-wrap">
					<div class="row">
						<?php
						if ($image_data != '') { ?>
							<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 order-xxl-1 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
							<?php } else { ?>
								<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<?php } ?>
								<div class="cud-banner-content">
									<div>
										<?php if (get_sub_field('banner_subtitle') != "") { ?>
											<span class="cud-banner-content-title"><?php echo get_sub_field('banner_subtitle') ?></span>
										<?php } ?>
										<?php if (get_sub_field('banner_title') != "") { ?>
											<h1><?php echo get_sub_field('banner_title') ?></h1>
										<?php } ?>
										<?php if (get_sub_field('banner_description') != "") { ?>
											<p><?php echo get_sub_field('banner_description') ?></p>
										<?php } ?>
									</div>
									<?php //echo the_content();
									?>
									<?php if (get_sub_field('action_link') != "") { ?>
										<?php if (have_rows('banner_actions', $post_ID)) : ?>
											<div class="cud-banner-actions">
												<?php while (have_rows('banner_actions', $post_ID)) : the_row(); ?>
													<?php if (get_sub_field('action_link') != "") { ?>
														<a href="<?php echo get_sub_field('action_link') ?>" class="cud-btn cud-btn-<?php echo get_sub_field('button_type'); ?>">
															<?php echo get_sub_field('action_name') ?>
														</a>
													<?php } ?>
												<?php endwhile; ?>
											</div>
										<?php endif; ?>
									<?php } ?>
								</div>
								</div>
								<?php if ($image_data != '') { ?>
									<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12  order-xxl-2 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
										<div class="cud-banner-img">
											<img src="<?php echo $image_data[0]; ?>" alt="<?php echo $post->post_title; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid">
										</div>
									</div>
								<?php } ?>
							</div>
					</div>
				</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>