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
<main class="cud-main">
  <?php include("banner.php"); ?>
  <section class="cud-contact">
    <div class="container">
      <div class="cud-contact-wrap">
        <h2>Interested in working with us?</h2>
        <p>In case you face any problem filling up the form below - please feel free to send us your requirements / questions at <a href="mailto:info@creativeuidesign.com">info@creativeuidesign.com</a>. Our professional experts are available to answer all your queries.You can use the form below to send us your valuable feedback or call us on our Number at any time of the day!</p>
        <form action="" method="POST" id="cud-contact-form">
          <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-name" class="form-label">Name</label>
                <input type="text" class="form-control" name="cud_name" id="cud_name" placeholder="John Deo">
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="cud_email" id="cud_email" placeholder="johndeo@gmail.com">
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="cud_phone" id="cud_phone" placeholder="+91-123-456-7890">
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-service" class="form-label">Services</label>
                <select class="form-select" name="cud_services" id="cud_services" title="Services">
                  <option disabled="" selected="">Select service</option>
                  <option value="Mobile App Design">Mobile App Design </option>
                  <option value="Web Design">Web Design</option>
                  <option value="Branding Design">Branding Design</option>
                  <option value="Hire Dedicated UI Designer">Hire Dedicated UI Designer</option>
                </select>
              </div>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-message" class="form-label">Message</label>
                <textarea class="form-control" name="cud_mesaage" id="cud_mesaage" rows="5"></textarea>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="g-recaptcha cud-captcha" id="recaptcha1">
                <span class="cud-valid-code">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/captcha.php" class="cud-code" id='captcha_image' alt="PHP Captcha">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/home/icons8-refresh-30.png" class="cud-refresh" onclick="refreshCaptcha()">
                </span>
                <div class="form-group">
                  <input type="text" placeholder="enter captcha code" class="form-control" name="cud_captcha" id="cud_captcha">
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 d-flex justify-content-end align-items-start">
              <input type="hidden" name="action" value="cud_contact_form">
              <button type="submit" id="contact_btn" name="contact_btn" class="next cud-btn cud-btn-mobile">Submit</button>
            </div>
          </div>
          <div class="contactsuccess mt-4" role="alert" style="display:none"></div>
        </form>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
