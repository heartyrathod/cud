<?php
/*
Template Name: Service Details
Template Post Type: post, page, event
*/
get_header();

?>
<main class="cud-main">
  <?php include("banner.php"); ?>
  <?php if (is_page('ui-ux-design')) { ?>
    <section class="cud-after-banner">
      <div class="container">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/services/four-clients.webp" alt="Services" width="637" height="603" class="img-fluid">
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
            <div class="cud-after-banner-wrap">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cud-after-banner-heading">
                    <p>Creative UI Designer</p>
                    <h2>Clients gets always expectional works form us..</h2>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cud-after-banner-content">
                    <p>We created stunning and quality design over last 12 years with satisfaction.</p>
                    <a href="<?php echo site_url('contact-us'); ?>" class="cud-btn cud-btn-primary">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
  <section class="cud-service">
    <div class="container">
      <div class="cud-service-wrap">
        <?php echo the_content(); ?>
      </div>
    </div>
  </section>
  <?php if (is_page('ui-ux-design')) { ?>
    <section class="cud-service">
      <div class="container">
        <?php if (have_rows('service_type')) : ?>
          <?php while (have_rows('service_type')) : the_row();
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $pbname = get_sub_field('portfolio_button_name');
            $pblink =  get_sub_field('portfolio_button_link');
            $packagename =  get_sub_field('package_button_label');
            $packagelinkk =  get_sub_field('package_button_link');
            $image = get_sub_field('image');
          ?>
            <div class="cud-service-box cud-<?php echo $icon; ?>">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cud-service-img cud-bg cud-bg-<?php echo $icon; ?>-light-15">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo  $title; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="img-fluid">
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cud-service-content">
                    <div class="cud-service-icon cud-bg cud-bg-<?php echo $icon; ?>-light-15">
                      <i class="cud-icon-<?php echo  $icon; ?>"></i>
                    </div>
                    <h3><?php echo  $title; ?></h3>
                    <?php echo  $description; ?>
                    <?php if (have_rows('technology')) : ?>
                      <ul class="cud-service-technology">
                        <?php while (have_rows('technology')) : the_row();
                          $tech_icon = get_sub_field('technology_icon');
                          $tech_name = get_sub_field('technology_name');
                          $tech_link = get_sub_field('technology_link');
                        ?>
                          <li>
                            <?php if ($tech_link != "") { ?>
                              <a href="<?php echo $tech_link; ?>" class="cud-service-technology-ic">
                              <?php } ?>
                              <i class="cud-icon-<?php echo  $tech_icon; ?>"></i>
                              <?php if ($tech_link != "") { ?>
                              </a>
                            <?php } ?>
                            <?php if ($tech_link != "") { ?>
                              <a href="<?php echo  $tech_link; ?>">
                              <?php } ?>
                              <?php echo  $tech_name; ?>
                              <?php if ($tech_link != "") { ?>
                              </a>
                            <?php } ?>
                          </li>
                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                    <div class="cud-service-actions">
                      <a href="<?php echo  $pblink; ?>" class="cud-btn cud-btn-<?php echo $icon ?>"><?php echo   $pbname; ?></a>
                      <a href="<?php echo  $packagelinkk; ?>" class="cud-btn cud-btn-text"><?php echo  $packagename; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
  <?php } ?>
  <section class="cud-technology">
    <div class="container">
      <div class="cud-technology-wrap">
        <?php if (have_rows('service_technology_list')) : ?>
          <h2>Technology We Use</h2>
          <div class="row">
            <?php while (have_rows('service_technology_list')) : the_row(); ?>
              <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="cud-technology-item cud-<?php the_sub_field('technology_background'); ?> cud-bg cud-bg-<?php the_sub_field('technology_background'); ?>-light">
                  <div class="cud-technology-content">
                    <span class="cud-technology-content-icon cud-bg cud-bg-<?php the_sub_field('technology_background'); ?>-light-15">
                      <i class="cud-icon-<?php the_sub_field('technology_icon'); ?>"></i>
                    </span>
                    <h3><?php the_sub_field('technology_name'); ?></h3>
                    <p><?php the_sub_field('technology_description'); ?></p>
                  </div>
                  <?php if (get_sub_field('technology_link') != "") { ?>
                    <a href="<?php echo get_sub_field('technology_link'); ?>">Read more →</a>
                  <?php } ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php if (!is_page('seo-services')) { ?>
    <section class="cud-portfolios" id="cud-portfolios">
      <div class="container">
        <div class="cud-portfolios-wrap">
          <div class="cud-heading">
            <span class="cud-heading-primary">Portfolio</span>
            <h2 class="cud-heading-title">Explore Our Exceptional Work</h2>
          </div>
          <a href="portfolio" class="cud-btn cud-btn-primary">View all →</a>
        </div>
        <div class="cud-portfolios-content set_more_posts">
          <div class="row">
            <?php
            $args1 = arr  ay(
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
  <?php } ?>
</main>
<?php
get_footer();
?>