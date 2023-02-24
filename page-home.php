<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<main class="cud-main">
	<section class="cud-banner">
		<div class="container">
			<div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="cud-banner-content">
						<?php if (have_rows('banner')) : ?>
							<?php while (have_rows('banner')) : the_row(); ?>
								<?php if (get_sub_field('banner_subtitle') != "") { ?>
									<span class="cud-banner-content-title"><?php echo get_sub_field('banner_subtitle') ?></span>
								<?php } ?>
								<?php if (get_sub_field('banner_title') != "") { ?>
									<h1><?php echo get_sub_field('banner_title') ?></h1>
								<?php } ?>
								<?php if (get_sub_field('banner_description') != "") { ?>
									<p><?php echo get_sub_field('banner_description') ?></p>
								<?php } ?>
								<?php //echo the_content();
								?>
								<?php while (have_rows('banner_actions')) : the_row(); ?>
									<?php if (get_sub_field('action_link') != "") { ?>
										<a href="<?php echo get_sub_field('action_link') ?>">
											<i class="cud-icon-arrow"></i><?php echo get_sub_field('action_name') ?>
										</a>
									<?php } ?>
								<?php endwhile; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="cud-banner-img">
						<?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>
						<img src="<?php echo $image_data[0]; ?>" alt="<?php echo $post->post_title; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid">

						<div class="cud-banner-img-content">
							<span class="cud-banner-img-content-title">Our projects</span>
							<h2 class="cud-banner-img-content-heading">Portfolio Landing UI</h2>
							<a href="#cud-portfolios">Explore Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cud-about">
		<div class="container">
			<div class="cud-about-wrap">
				<div class="cud-heading">
					<span class="cud-heading-primary">Who We Are</span>
					<h2 class="cud-heading-title">A Complete Creative Solutions Provider For Web, Mobile & Software</h2>
				</div>
				<p>We are three partners in CreativeuiDesign: Vishal, Narendra, and Suresh. Suresh Patel is an experienced and enthusiastic entrepreneur in the retail, restaurant, and fast food industry across several states in the USA. He successfully launched new restaurants, took existing establishments to the next level, and led major expansion projects. Suresh brings a wealth of knowledge and experience to the team, and we are excited to have him on board. Together, we strive to create innovative and creative designs that will take businesses to the next level. With Suresh's expertise and combined passion for design, we are confident that we can help our clients achieve their goals and create the perfect brand image.</p>
				<a href="<?php echo get_permalink(371); ?>" class="text-primary">Read more →</a>
			</div>
		</div>
	</section>
	<section class="cud-service">
		<div class="container-fluid">
			<div class="cud-heading cud-heading-center">
				<span class="cud-heading-primary">Services</span>
				<h2 class="cud-heading-title">What We Do</h2>
			</div>
			<div class="cud-service-wrap">
				<div class="row">
					<?php if (have_rows('service_type', 17)) : ?>
						<?php while (have_rows('service_type', 17)) : the_row();
							$icon = get_sub_field('icon');
							$title = get_sub_field('title');
							$description = get_sub_field('description');
							$pbname = get_sub_field('portfolio_button_name');
							$pblink =  get_sub_field('portfolio_button_link');
							$packagename =  get_sub_field('package_button_label');
							$packagelinkk =  get_sub_field('package_button_link');
							$image = get_sub_field('image');
						?>
							<div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="cud-service-item cud-<?php echo $icon; ?> cud-bg cud-bg-<?php echo $icon; ?>-light-15">
									<div class="cud-service-content">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo  $title; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="img-fluid">
										<h3><?php echo  $title; ?></h3>
										<?php echo  $description; ?>
									</div>
									<div class="cud-service-links">
										<a href="<?php echo  $pblink; ?>">Read more →</a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="cud-technology">
		<div class="container">
			<div class="cud-heading cud-heading-center">
				<span class="cud-heading-primary">Technologies</span>
				<h2 class="cud-heading-title">Technology has made us ever more productive.</h2>
			</div>
			<div class="cud-technology-wrap cud-tabs">
				<?php while (have_posts()) : the_post(); ?>
					<?php if (have_rows('technology')) : ?>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php $i = 0;
							while (have_rows('technology')) : the_row(); ?>
								<li class="nav-item" role="presentation">
									<button class="nav-link <?php if ($i == 0) {
																						echo 'active';
																					} ?>" id="cud-<?php the_sub_field('tab_name'); ?>-tab" data-bs-toggle="tab" data-bs-target="#cud-<?php the_sub_field('tab_name'); ?>" type="button" role="tab" aria-controls="cud-<?php the_sub_field('tab_name'); ?>" aria-selected="true"><?php the_sub_field('tab_name'); ?></button>
								</li>
							<?php $i++;
							endwhile; // while( has_sub_field('to-do_lists') ):
							?>
						</ul>
						<div class="tab-content">
							<?php $i = 0;
							while (have_rows('technology')) : the_row(); ?>
								<div class="tab-pane <?php if ($i == 0) {
																				echo 'active';
																			} ?>" id="cud-<?php the_sub_field('tab_name'); ?>" role="tabpanel" aria-labelledby="cud-<?php the_sub_field('tab_name'); ?>-tab" tabindex="0">
									<?php if (have_rows('technology_list')) : ?>
										<div class="row d-flex justify-content-center">
											<?php while (have_rows('technology_list')) : the_row(); ?>
												<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
													<div class="cud-technology-item <?php if (get_sub_field('technology_link') != "") {
																														echo 'cud-has-link';
																													} ?>">
														<?php if (get_sub_field('technology_link') != "") { ?>
															<a href="<?php echo get_sub_field('technology_link'); ?>">
															<?php } ?>
															<i class="cud-icon-<?php the_sub_field('technology_icon'); ?>"></i>
															<h3><?php the_sub_field('technology_name'); ?></h3>
															<?php if (get_sub_field('technology_link') != "") { ?>
															</a>
														<?php } ?>

													</div>
												</div>
											<?php endwhile; ?>
										</div>
									<?php endif; // if( get_field('technology_list') ):
									?>
								</div>
							<?php $i++;
							endwhile; // while( has_sub_field('to-do_lists') ):
							?>
						</div>
					<?php endif; // if( get_field('technology') ):
					?>
				<?php endwhile; // end of the loop.
				?>
			</div>
		</div>
	</section>
	<section class="cud-portfolios" id="cud-portfolios">
		<div class="container">
			<div class="cud-portfolios-wrap">
				<div class="cud-heading">
					<span class="cud-heading-primary">Portfolio</span>
					<h2 class="cud-heading-title">Explore Our Exceptional Work</h2>
				</div>
				<a href="<?php echo get_permalink(378); ?>" class="cud-btn cud-btn-primary">View all →</a>
			</div>
			<div class="cud-portfolios-content set_more_posts">
				<div class="row">
					<?php
					$args1 = array(
						'posts_per_page' => 3,
						'post_type'   => 'portfolios'
					);
					$all_post_count = count(get_posts($args1));
					$args = array(
						'posts_per_page' => 3,
						'post_type'   => 'portfolios'
					);

					$latest_post = get_posts($args);
					foreach ($latest_post as $portfolio) {
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($portfolio->ID), 'single-post-thumbnail');
						global $wpdb;
						$cUd404_post_view = $wpdb->prefix . "post_view";
						$view_count = $wpdb->get_row("SELECT COUNT(pw.post_id) AS view_count FROM $cUd404_post_view AS pw WHERE pw.post_id=$portfolio->ID");
						$viewer_count = view_count_formate($view_count->view_count);
					?>
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="cud-portfolios-item">
								<a href="<?php echo get_permalink($portfolio->ID); ?>" class="cud-portfolios-item-img">
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $portfolio->post_title; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid" />
								</a>
								<div class="cud-portfolios-item-title">
									<h2>
										<a href="<?php echo get_permalink($portfolio->ID); ?>" alt="<?php echo $portfolio->post_title; ?>"><?php echo $portfolio->post_title; ?></a>
									</h2>
									<span>
										<i class="cud-icon-eye"></i><?php echo $viewer_count; ?>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- <section class="cud-blog">
		<div class="container">
			<div class="row">
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-center">
					<?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>
					<?php if (have_rows('banner', 376)) : ?>
						<?php while (have_rows('banner', 376)) : the_row(); ?>
							<div class="cud-heading">
								<?php if (get_sub_field('banner_subtitle') != "") { ?>
									<span class="cud-heading-primary"><?php echo get_sub_field('banner_subtitle') ?></span>
								<?php } ?>
								<?php if (get_sub_field('banner_title') != "") { ?>
									<h2 class="cud-heading-title"><?php echo get_sub_field('banner_title') ?></h2>
								<?php } ?>
								<?php if (get_sub_field('banner_description') != "") { ?>
									<p><?php echo get_sub_field('banner_description') ?></p>
								<?php } ?>
							</div>
							<a href="<?php echo get_permalink(376); ?>" class="cud-btn cud-btn-primary">View all →</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<?php
				$args = array(
					'posts_per_page'   => 2,
					'offset'           => 0,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'slug',
							'terms' => 'todays-special',
							'operator' => 'NOT IN'
						)
					),
				);
				$posts_array = get_posts($args);
				foreach ($posts_array as $blogpost) {
					$thumnail = wp_get_attachment_image_src(get_post_thumbnail_id($blogpost->ID), 'single-post-thumbnail');
					$cates = wp_get_post_terms($blogpost->ID, 'category',  array());
					// print_r($cates);
				?>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="cud-blog-item">
							<?php
							$custom_logo_id = get_theme_mod('custom_logo');
							$image = wp_get_attachment_image_src($custom_logo_id, 'full');
							?>
							<a href="<?php echo get_permalink($blogpost->ID) ?>">
								<img class="img-fluid" src="<?php echo $thumnail[0]; ?>" alt="<?php echo $blogpost->post_title; ?>" width="<?php echo $thumnail[1]; ?>" height="<?php echo $thumnail[2]; ?>">
							</a>
							<?php foreach ($cates as $cate) { ?>
								<a class="cud-blog-category" href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name; ?></a>
							<?php } ?>

							<h3>
								<a href="<?php echo get_permalink($blogpost->ID) ?>"><?php echo $blogpost->post_title; ?></a>
							</h3>
							<p><?php echo $blogpost->post_excerpt; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section> -->
	<section class="cud-custom-package">
		<div class="container">
			<div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="cud-custom-package-content cud-hire-designer">
						<h2>Hire Dedicated Developers</h2>
						<a href="<?php echo site_url('hire'); ?>" class="cud-btn cud-btn-hiredesigner">View Package</a>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="cud-custom-package-content cud-custom">
						<h2>Want to have a custom package?</h2>
						<a href="<?php echo get_theme_mod('kp_whatsapp_link', true); ?>" target="_blank" class="cud-btn cud-btn-custompackage" rel="noopener">Quick Chat</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
