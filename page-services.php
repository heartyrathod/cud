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

get_header();
?>
<main class="cud-main">
  <?php include("banner.php"); ?>
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
                  <h2><?php echo  $title; ?></h2>
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
                            <a href="<?php echo $tech_link; ?>" class="cud-service-technology-ic" title="<?php echo  $tech_name; ?>">
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
</main>
<?php
get_footer();
