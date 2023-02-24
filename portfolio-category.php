<?php
/*
Template Name: Portfolio Category Page
Template Post Type: post, page, event
*/
get_header();
// $catObj = get_queried_object();
$sort_name = get_field("sort", $post->ID);
$image = get_field('image', $post->ID);
$package_page_url = get_field('package_page_url', $post->ID);
$url = $image['url'];
$width = $image['width'];
$height = $image['height'];
$postcat = get_the_category($post->ID);
$cat_id = 0;
if ($sort_name == 'Mobile') {
	$cat_id = 29;
} else if ($sort_name == 'Web') {
	$cat_id = 30;
} else if ($sort_name == 'Branding') {
	$cat_id = 28;
}
// if (!empty($postcat)) {
// 	$cat_id = $postcat[0]->cat_ID;
// }
?>
<main class="cud-main">
	<?php include("banner.php"); ?>
	<section class="cud-portfolios">
		<div class="container">
			<ul class="cud-portfolios-tabs">
				<li>
					<a href="<?php echo site_url('portfolio'); ?>">All</a>
				</li>
				<li>
					<a href="<?php echo site_url('mobile-app-design'); ?>" class="<?php echo $sort_name == 'Mobile' ? 'cud-active' : ''; ?>">Mobile</a>
				</li>
				<li>
					<a href="<?php echo site_url('web-design'); ?>" class="<?php echo $sort_name == 'Web' ? 'cud-active' : ''; ?>">Web</a>
				</li>
				<li>
					<a href="<?php echo site_url('branding-design'); ?>" class="<?php echo $sort_name == 'Branding' ? 'cud-active' : ''; ?>">Branding</a>
				</li>
			</ul>
			<div class="cud-portfolios-content ">
				<div class="row set_more_posts">
					<?php
					$args1 = array(
						'posts_per_page' => -1,
						'post_type'   => 'portfolios',
						'tax_query' => array(
							array(
								'taxonomy' => 'portfolio_category',
								'field' => 'term_id',
								'terms' => $cat_id,
							)
						),
						// 'category'    => $cat_id
					);

					$all_post_count = count(get_posts($args1));

					$args = array(
						'posts_per_page' => 12,
						'post_type'   => 'portfolios',
						'tax_query' => array(
							array(
								'taxonomy' => 'portfolio_category',
								'field' => 'term_id',
								'terms' => $cat_id,
							)
						),
						// 'category'    => $cat_id
					);

					$latest_post = get_posts($args);
					foreach ($latest_post as $portfolio) {
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($portfolio->ID), 'single-post-thumbnail');
						global $wpdb;
						$cUd404_post_view = $wpdb->prefix . "post_view";
						$view_count = $wpdb->get_row("SELECT COUNT(pw.post_id) AS view_count FROM $cUd404_post_view AS pw WHERE pw.post_id=$portfolio->ID");
						$viewer_count = view_count_formate($view_count->view_count);
					?>
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
							<div class="cud-portfolios-item">
								<a href="<?php echo get_permalink($portfolio->ID); ?>" class="cud-portfolios-item-img">
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $portfolio->post_title; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid" />
								</a>
								<div class="cud-portfolios-item-title">
									<h2>
										<a href="<?php echo get_permalink($portfolio->ID); ?>"><?php echo $portfolio->post_title; ?></a>
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
			<div class="cud-portfolios-action">
				<input type="hidden" id="cat_id" value="<?php echo $cat_id; ?>" />
				<input type="hidden" id="all_post_count" value="<?php echo $all_post_count; ?>" />
				<button type="button" class="cud-btn cud-btn-light load-more-posts" <?php echo $all_post_count <= 12 ? 'disabled' : ''; ?>>
					<span class="button_title"><?php echo $all_post_count <= 12 ? 'No more Shots' : 'Load more Shots'; ?></span>
					<span class="loding_class d-none">Loading...</span>
				</button>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
?>