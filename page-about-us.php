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
  <section class="entry-content cud-entry-content">
    <div class="container">
      <div class="cud-about-content">
        <div class="row">
          <div class="col-12">
            <div class="cud-about-content-left">
              <h2>The Back Story</h2>
              <h3>We are a powerful and deserving competitor in the web development industry. As a team, we cooperate with a client. At every level of the process, there is communication with the client.</h3>
              <div class="cud-about-content-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/about.svg" width="100" height="100" alt="Our Story" class="img-fluid">
                <p>We are three partners in CreativeuiDesign: Vishal, Narendra, and Suresh. Suresh Patel is an experienced and enthusiastic entrepreneur in the retail, restaurant, and fast food industry across several states in the USA. He successfully launched new restaurants, took existing establishments to the next level, and led major expansion projects. Suresh brings a wealth of knowledge and experience to the team, and we are excited to have him on board. Together, we strive to create innovative and creative designs that will take businesses to the next level. With Suresh's expertise and combined passion for design, we are confident that we can help our clients achieve their goals and create the perfect brand image.</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <ul class="cud-half mt-3">
              <li>
                <span>Art Direction & Brand Strategy</span>
                <p>Establishing greater distances between people and how they travel through an original and powerful campaign.</p>
              </li>
              <li>
                <span>Designing websites and apps with UX/UI</span>
                <p>Obtain a regulator once an enterprise like the one she and the other person had when they were credited and pushed.</p>
              </li>
              <li>
                <span>6 years of diligent investigation</span>
                <p>Our forefathers had a remedy. This performs the roles of your email marketing expert, newsletter provider, and campaign manager.</p>
              </li>
              <li>
                <span>Audience division</span>
                <p>Segmenting can increase audience engagement. Targeting subsets of your contacts will increase your conversions. Give them the material they require.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cud-about-mv">
        <div class="cud-about-mv-item">
          <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8 col-sm-12 col-12">
              <div class="cud-about-mv-content">
                <h3>Our Mission</h3>
                <p>We have created our own performance assessment methods to help our clients through the software development process. We can better predict our prospects because we have seen how technology has developed from Generation X to Generation Y.</p>
              </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
              <div class="cud-about-mv-img cud-bg cud-bg-mobile-light-15">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/mission.png" width="500" height="500" alt="Our Mission" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="cud-about-mv-item">
          <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8 col-sm-12 col-12">
              <div class="cud-about-mv-content">
                <h3>Our Vision</h3>
                <p>Our strategy of inventing technology and enhancing it with a consumer experience is the foundation of our vision. By implementing cutting-edge technology, digital transformation, and self-discovery, we are strengthening our abilities to manage various cross-border operations worldwide.</p>
              </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
              <div class="cud-about-mv-img cud-bg cud-bg-branding-light-15">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/vision.png" width="500" height="500" alt="Our Vision" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cud-about-directors">
        <h3>A word from our Founder</h3>
        <div class="cud-about-directors-item">
          <div class="row">
            <!-- <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="cud-about-directors-img">
                <img src="<?php //echo get_stylesheet_directory_uri();
                          ?>/assets/media/about/Narendra-Patel.webp" width="324" height="442" alt="Vishal Bhatt" class="img-fluid">
              </div>
            </div> -->
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="cud-about-directors-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/quote.svg" width="120" height="80" alt="Quote" class="img-fluid pml-testimonials-item-img" loading="lazy">
                <p>We are specialists in processing unique corporate work while putting everything into a digital and cyber matrix. Our professionals are implementing new technical innovations in tandem with technological developments to provide you with tomorrow's change now. Every industry has unique requirements, and all of those unique requirements call for unique solutions. We at Creative UI Design LLC provide uniquely created solutions to support that particular industry's unique features.</p>
                <!-- <div class="cud-about-directors-head">
                  <h4>Vishal Bhatt</h4>
                  <span>Founder</span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="cud-about-directors-item">
          <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="cud-about-directors-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/Narendra-Patel.webp" width="324" height="442" alt="Narendra Patel" class="img-fluid">
              </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="cud-about-directors-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/quote.svg" width="120" height="80" alt="Quote" class="img-fluid pml-testimonials-item-img" loading="lazy">
                <p>Officia culpa aliquip officia ullamco dolore sunt mollit ipsum nulla veniam non nostrud. Minim nostrud labore non exercitation consequat eu occaecat in ipsum eiusmod. Non nostrud adipisicing aute elit est labore.</p>
                <div class="cud-about-directors-head">
                  <h4>Narendra Patel</h4>
                  <span>Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <?php // echo the_content();
      ?>
    </div>
  </section>
</main>
<?php
get_footer();
