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
$cates = wp_get_post_terms($post->ID, 'category',  array());
$back_link = '';
$term_id = '';
foreach ($cates as $cate) {
	$back_link = esc_url(get_category_link($cate->term_id));
	$term_id = $cate->term_id;
}
?>
<main class="cud-main">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="cud-blog">
			<div class="container">
				<div class="cud-blog-wrap">
					<header>
						<div class="cud-blog-header">
							<a class="cud-back" href="<?= $back_link; ?>">← Back</a>
							<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
							<div class="cud-blog-meta">
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
							<?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full");
							$image_id = get_post_thumbnail_id($post->ID);
							$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);
							//print_r($image_data);
							
							?>
							<img src="<?php echo $image_data[0]; ?>" alt="<?php echo $alt_text; ?>" title="<?php echo $alt_text; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid">
						</div>
					</header><!-- .entry-header -->

					<div class="entry-content cud-blog-content">
						<div class="cud-blog-wrap">
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
						<div class="cud-blog-related">
							<h2>Related Blogs</h2>
							<?php
							$args = array(
								'posts_per_page'   => 4,
								'offset'           => 0,
								'exclude'					 => array($post->ID),
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish',
								'suppress_filters' => true,
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field' => 'term_id',
										'terms' => $term_id,
									)
								),
							);
							$posts_array = get_posts($args);
							?>
							<div class="row">
								<?php
								foreach ($posts_array as $key => $blogpost) {
									// if ($key != 0) {
									$thumnail = wp_get_attachment_image_src(get_post_thumbnail_id($blogpost->ID), 'single-post-thumbnail');
									$cates = wp_get_post_terms($blogpost->ID, 'category',  array());
									// print_r($cates);
								?>
									<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
										<div class="cud-blog-list-item">
											<?php
											$custom_logo_id = get_theme_mod('custom_logo');
											$image = wp_get_attachment_image_src($custom_logo_id, 'full');
											?>
											<div class="cud-blog-list-img">
												<a href="<?php echo get_permalink($blogpost->ID) ?>">
													<img class="img-fluid" src="<?php echo $thumnail[0]; ?>" alt="<?php echo $blogpost->post_title; ?>" width="<?php echo $thumnail[1]; ?>" height="<?php echo $thumnail[2]; ?>">
												</a>
											</div>
											<div class="cud-blog-list-content">
												<?php foreach ($cates as $cate) { ?>
													<a class="cud-category" href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo esc_html($cate->name); ?></a>
												<?php } ?>
												<h2>
													<a href="<?php echo get_permalink($blogpost->ID) ?>"><?php echo esc_html($blogpost->post_title); ?></a>
												</h2>
												<p><?php echo esc_html($blogpost->post_excerpt); ?></p>
											</div>
										</div>
									</div>
								<?php //}
								}
								?>
							</div>
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
