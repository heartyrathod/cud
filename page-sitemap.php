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

if (!isset($_SESSION)) {
  session_start();
}
get_header();

?>
<main class="main">
  <?php include("banner.php"); ?>
  <section class="cud-sitemap">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Other Links"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          echo wp_nav_menu(array(
            'menu'        => 'Main Menu',
            'menu_id'     => 'nav',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'       => 1,
            'container'   => false,
          ));
          ?>
        </div>
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Services"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          echo wp_nav_menu(array(
            'menu'        => 'Services',
            'menu_id'     => 'nav',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'       => 1,
            'container'   => false,
          ));
          ?>
        </div>
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Mobile App Development"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          wp_nav_menu(array(
            'menu' => 'Mobile App Development',
            'menu_id'     => 'nav',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'     => 1,
            'container'   => false,
          ));
          ?>
        </div>
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Web Development"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          wp_nav_menu(array(
            'menu' => 'Web Development',
            'menu_id'     => 'Web Development',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'     => 1,
            'container'   => false,
          ));
          ?>
        </div>
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Hire"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          wp_nav_menu(array(
            'menu' => 'Hire',
            'menu_id'     => 'nav',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'     => 1,
            'container'   => false,
          ));
          ?>
        </div>
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Portfolio"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          wp_nav_menu(array(
            'menu' => 'Portfolio',
            'menu_id'     => 'nav',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'     => 1,
            'container'   => false,
          ));
          ?>
        </div>
        <div class="col-12">
          <?php $menu = wp_get_nav_menu_object("Support"); ?>
          <h3 class="cud-footer-title"><?php echo $menu->name; ?></h3>
          <?php
          wp_nav_menu(array(
            'menu' => 'Support',
            'menu_id'     => 'Support',
            'menu_class'  => 'cud-sitemap-menu',
            'fallback_cb' => false,
            'depth'     => 1,
            'container'   => false,
          ));
          ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
