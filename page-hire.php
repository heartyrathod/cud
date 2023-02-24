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
  <section class="cud-hire">
    <div class="container">
      <div class="cud-hire-wrap">
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
        <?php if (have_rows('hire')) : ?>
          <div class="cud-hire-list">
            <h2>Hire Dedicated Developers</h2>
            <div class="row">
              <?php while (have_rows('hire')) : the_row(); ?>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="cud-hire-list-item">
                    <div class="cud-hire-list-icon">
                      <i class="cud-icon-<?php the_sub_field('technology_icon'); ?>"></i>
                    </div>
                    <h4><?php the_sub_field('technology_name'); ?></h4>
                    <p><?php the_sub_field('technology_description'); ?></p>
                    <a href="<?php the_sub_field('technology_link'); ?>">Read more →</a>
                  </div>
                </div>
              <?php endwhile; ?>
              <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="cud-hire-list-item cud-hire-custom">
                  <h4>Want to hire our dedicated developer?</h4>
                  <a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener" class="cud-btn cud-btn-mobile">Book Meeting</a>
                </div>
              </div>
            </div>

          <?php endif; ?>
          </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
