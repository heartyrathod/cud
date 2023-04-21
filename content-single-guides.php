<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<?php
$cates = wp_get_post_terms($post->ID, 'guides-category',  array());
$back_link = '';
$term_id = '';
foreach ($cates as $cate) {
	$back_link = esc_url(get_category_link($cate->term_id));
	$term_id = $cate->term_id;
}
?>
<main class="cud-main">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="cud-guide">
			<div class="container">
				<div class="cud-guide-wrap">
					<header>
						<div class="cud-guide-header">
							<a class="cud-back" href="<?= $back_link; ?>">← Back</a>
							<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
							<div class="cud-guide-meta">
								<?php $author_id = $post->post_author;
								$display_name = get_the_author_meta('display_name', $author_id);  ?>
								<span class="cud-author">By <?php echo $display_name; ?>,</span>
								<span class="cud-date"><?php echo get_the_date('M d, Y H:i A'); ?>,</span>

								<span class="cud-category">In <?php foreach ($cates as $cate) { ?>
										<a href="<?php echo esc_url(get_category_link($cate->term_id)); ?>" class=""><?php if (!empty($cate)) {
																																																		echo esc_html($cate->name);
																																																	} ?></a>
									<?php } ?></span>
							</div>
							<?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>
							<img src="<?php echo $image_data[0]; ?>" alt="<?php echo $post->post_title; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid">
						</div>
					</header><!-- .entry-header -->

					<div class="entry-content cud-entry-content cud-guide-content">
						<div class="cud-guide-wrap cud-guide-wrap-content">
							<?php
							the_content();
							wp_link_pages(
								array(
									'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
									'after'    => '</nav>',
									/* translators: %: Page number. */
									'pagelink' => esc_html__('Page %', 'twentytwentyone'),
								)
							);
							?>
						</div>
						<div class="cud-guide-accordian cud-guide-wrap ">
							<div class="accordion accordion-flush" id="accordionFlushExample">
							<?php
									if( have_rows('guides_content') ):
										while ( have_rows('guides_content') ) : the_row();
										$guides_content_image = get_sub_field('guides_content_image');
										$guides_content_heading = get_sub_field('guides_content_heading');
										$link = get_sub_field('guides_content_button');

										// print_r($guides_content_image);
									?>

								<div class="accordion-item" id="item0<?php echo get_row_index(); ?>">
									<h3 class="accordion-header" id="flush-heading<?php echo get_row_index(); ?>">
										<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo get_row_index(); ?>">
										<div class="accordion-header-logo">
											<img src="<?php echo $guides_content_image['url']; ?>" alt="<?php echo esc_attr($guides_content_heading);  ?>" title="<?php echo esc_attr($guides_content_heading);  ?>" width="<?php echo $guides_content_image['width']; ?>" height="<?php echo $guides_content_image['height']; ?>" class="img-fluid">
											</div>
											<p><?php echo esc_html($guides_content_heading);  ?></p>
											<?php
												// $link = get_field('guides_content_button');
												if( $link ):
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self'; ?>
												<a href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_attr($guides_content_heading);  ?>" alt="<?php echo esc_attr($guides_content_heading);  ?>" class="cud-btn cud-btn-secondary">Visit website</a>
													<?php
													endif;
												?>

										</div>
									</h3>
									<div id="flush-collapse<?php echo get_row_index(); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo get_row_index(); ?>" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<div class="row">
												<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
													<p><?php echo get_sub_field('guides_contnet_text');  ?></p>
													<div class="cud-focus">
													<h4>Service focus</h4>
														<ul>
														<?php
													if( have_rows('guides_content_service_focus') ): ?>
													<?php while( have_rows('guides_content_service_focus') ): the_row();
														$name = get_sub_field('name');
														$social_link = get_sub_field('guides_content_service_focus_link');

													if( $social_link ){
													$link_url = $social_link['url'];
													$link_title = $social_link['title'];
													$link_target = $social_link['target'] ? $social_link['target'] : '_self'; ?>
													<li><a href="<?php echo esc_url( $link_url ); ?>" target="_blank" class=""><?php echo $name; ?></a>
														</li>
													<?php
													} else{
														?>
														<li><?php echo $name; ?></li>
														<?php
													};
												?>

															<?php
															endwhile;
																 endif; ?>
														</ul>
													</div>
													<div class="cud-social">
														<h4>Social Media</h4>
														<ul class="cud-footer-social">
														<?php
															if( have_rows('guides_content_social_media') ): ?>
															<?php while( have_rows('guides_content_social_media') ): the_row();
																$name = get_sub_field('guides_content_social_media_name');
																$icon_link = get_sub_field('guides_content_social_media_link');
																$icon = get_sub_field('guides_content_social_media_icon');

															if( $icon_link ):
															$link_url = $icon_link['url'];
															$link_title = $icon_link['title'];
															$link_target = $icon_link['target'] ? $icon_link['target'] : '_self'; ?>
															<li><a href="<?php echo esc_url( $link_url ); ?>" target="_blank" class="">
															<?php echo $icon; ?>
															</a>
																</li>
															<?php
															endif;
														?>


															<?php
															endwhile;
																 endif; ?>
														</ul>
													</div>
												</div>
												<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
													<div class="cud-company-info">
														<div class="row">
														<?php if( have_rows('guides_content_head') ):
															while( have_rows('guides_content_head') ) : the_row();
															$guides_title = get_sub_field('guides_content_head_title');
															$guides_text = get_sub_field('guides_content_head_value');
															?>
															<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-6 col-12">
																<div class="cud-company-item">
																	<p><?php echo $guides_title; ?></p>
																	<h4><?php echo $guides_text; ?></h4>
																</div>
															</div>


																<?php
																	endwhile;
																endif;
																?>
															<?php if( have_rows('contact') ):
															while( have_rows('contact') ) : the_row();
															$label = get_sub_field('label');
															$value = get_sub_field('value');
															?>
															<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-6 col-12">
																<div class="cud-company-item">
																	<p><?php echo $label; ?></p>
																	<h4><a href="<?php echo $value; ?>"><?php echo $value; ?></a></h4>
																</div>
															</div>

															<?php
																	endwhile;
																endif;
																?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>



								<?php
								endwhile;
								endif;
								?>
								</div>
						</div>
						<div class="cud-guide-wrap cud-guide-wrap-content">
								<?php
									// if( have_rows('guides_content') ):
									// 	while ( have_rows('guides_content') ) : the_row();
										$more_footer_content = get_field('more_footer_content');
										echo $more_footer_content;
								// endwhile;
								// endif;
								?>
						</div>
					</div><!-- .entry-content -->
					<!-- <footer class="entry-footer default-max-width">
						<?php twenty_twenty_one_entry_meta_footer();
						?>
					</footer> -->
					<!-- .entry-footer -->
					<?php //if (!is_singular('attachment')) :
					?>
					<?php //get_template_part('template-parts/post/author-bio');
					?>
					<?php //endif;
					?>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</main>
