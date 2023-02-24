<?php


//rank math










session_start();
function add_excerpt_to_pages()
{
  add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_excerpt_to_pages');

function unhook_parent_style()
{
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts()
{
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');

include(get_stylesheet_directory() . '/inc/template-functions.php');

add_action('wp_enqueue_scripts', 'acud_home_enqueue_scripts');
function acud_home_enqueue_scripts()
{
  global $post;
  // print_r(is_page());
  wp_register_style('cud_googleapis', 'https://fonts.googleapis.com', array(), '1');
  wp_enqueue_style('cud_googleapis');

  wp_register_style('cud_gstatic', 'https://fonts.gstatic.com', array(), '1');
  wp_enqueue_style('cud_gstatic');

  wp_register_style('cud_gstatic_preload', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), '1');
  wp_enqueue_style('cud_gstatic_preload');

  wp_register_style('cud_gstatic_font', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), '1');
  wp_enqueue_style('cud_gstatic_font');

  if (is_front_page()) {
    wp_register_style('cud_home_preload', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('cud_home_preload');
    wp_register_style('cud_home', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('cud_home');
  } else if (is_page('about-us')) {
    wp_register_style('cud_about-us_preload', get_stylesheet_directory_uri() . '/assets/css/about-us.min.css', array(), '1');
    wp_enqueue_style('cud_about-us_preload');
    wp_register_style('cud_about-us', get_stylesheet_directory_uri() . '/assets/css/about-us.min.css', array(), '1');
    wp_enqueue_style('cud_about-us');
  } else if (is_page('contact-us')) {
    wp_register_style('cud_contact_preload', get_stylesheet_directory_uri() . '/assets/css/contact.min.css', array(), '1');
    wp_enqueue_style('cud_contact_preload');
    wp_register_style('cud_contact', get_stylesheet_directory_uri() . '/assets/css/contact.min.css', array(), '1');

    wp_enqueue_style('cud_contact');
  } else if (is_page('hire-designer') || is_page('web-design-package') || is_page('mobile-app-design-package') || is_page('branding-design-package')) {
    wp_register_style('cud_package-details_preload', get_stylesheet_directory_uri() . '/assets/css/package-details.min.css', array(), '1');
    wp_enqueue_style('cud_package-details_preload');
    wp_register_style('cud_package-details', get_stylesheet_directory_uri() . '/assets/css/package-details.min.css', array(), '1');
    wp_enqueue_style('cud_package-details');
  } else if (is_page('services') || is_page_template('service-details.php')) {
    wp_register_style('cud_services_preload', get_stylesheet_directory_uri() . '/assets/css/services.min.css', array(), '1');
    wp_enqueue_style('cud_services_preload');
    wp_register_style('cud_services', get_stylesheet_directory_uri() . '/assets/css/services.min.css', array(), '1');
    wp_enqueue_style('cud_services');
  } else if (is_page('packages')) {
    wp_register_style('cud_packages_preload', get_stylesheet_directory_uri() . '/assets/css/packages.min.css', array(), '1');
    wp_enqueue_style('cud_packages_preload');
    wp_register_style('cud_packages', get_stylesheet_directory_uri() . '/assets/css/packages.min.css', array(), '1');
    wp_enqueue_style('cud_packages');
  } else if (is_page('portfolio')  || is_page_template('portfolio-category.php')) {
    wp_register_style('cud_portfolio_min', get_stylesheet_directory_uri() . '/assets/css/portfolio.min.css', array(), '1');
    wp_enqueue_style('cud_portfolio_min');
  } else if ((is_single() && 'portfolios' == get_post_type())) {
    wp_register_style('cud_portfolio_details_min', get_stylesheet_directory_uri() . '/assets/css/portfolio-details.min.css', array(), '1');
    wp_enqueue_style('cud_portfolio_details_min');
  } else if (is_page('blog') || is_category()) {
    wp_register_style('cud_blog_min', get_stylesheet_directory_uri() . '/assets/css/blog.min.css', array(), '1');
    wp_enqueue_style('cud_blog_min');
  } else if ((is_single() && 'post' == get_post_type())) {
    wp_register_style('cud_blog_min', get_stylesheet_directory_uri() . '/assets/css/blog-details.min.css', array(), '1');
    wp_enqueue_style('cud_blog_min');
  } else if (is_page('hire')) {
    wp_register_style('cud_hire_min', get_stylesheet_directory_uri() . '/assets/css/hire.min.css', array(), '1');
    wp_enqueue_style('cud_hire_min');
  } else if (is_page('careers')) {
    wp_register_style('cud_careers_min', get_stylesheet_directory_uri() . '/assets/css/careers.min.css', array(), '1');
    wp_enqueue_style('cud_careers_min');
  } else if (is_404()) {
    wp_register_style('cud_error404', get_stylesheet_directory_uri() . '/assets/css/error.min.css', array(), '1');
    wp_enqueue_style('cud_error404');
  } else if (is_page('sitemap')) {
    wp_register_style('cud_sitemap', get_stylesheet_directory_uri() . '/assets/css/sitemap.min.css', array(), '1');
    wp_enqueue_style('cud_sitemap');
  } else {
    wp_register_style('cud_common', get_stylesheet_directory_uri() . '/assets/css/common.min.css', array(), '1');
    wp_enqueue_style('cud_common');
  }
}
add_filter('style_loader_tag', 'wpdocs_remove_https_styles', 10, 2);
function wpdocs_remove_https_styles($html, $handle)
{
  $style_to_async = array('cud_home_preload', 'cud_gstatic_preload', 'cud_contact_preload', 'cud_package-details_preload', 'cud_packages_preload', 'cud_services_preload');
  foreach ($style_to_async as $async_style) {
    if ($async_style === $handle) {
      return str_replace(" rel='stylesheet'", " rel='preload' as='style'", $html);
    }
  }
  return $html;
}
add_action('wp_enqueue_scripts', 'acud_script');
function acud_script()
{
  wp_register_script("modernizr", 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '', '', true);
  wp_enqueue_script('modernizr');
  wp_register_script("script-bootstrap", 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script-bootstrap');
  if (is_page('home') || is_page('mobile-app-design') || is_page('web-design') || is_page('branding-design') || is_page('portfolio')) {
    wp_register_script("script-home", get_stylesheet_directory_uri() . '/assets/scripts/script-home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script-home');
    wp_register_script('load-more-post-js', get_stylesheet_directory_uri() . '/assets/scripts/load-more-post.js', array('jquery'), '1.0.0', true);
    wp_localize_script('load-more-post-js', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('load-more-post-js');
  } else if (is_page('contact-us')) {

    wp_register_script("jquery-validate", 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js', '', '', true);
    wp_enqueue_script('jquery-validate');
    wp_register_script('contact-script-js', get_stylesheet_directory_uri() . '/assets/scripts/script-contact.js', array('jquery'), '1.0.0', true);
    //  wp_localize_script('contact-script-js', 'customAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )) );
    wp_localize_script('contact-script-js', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'contactPath' => get_stylesheet_directory_uri() . '/captcha.php'));
    wp_enqueue_script('contact-script-js');
  } else if ((is_single() && 'portfolios' == get_post_type())) {
    wp_register_script('toggle-images-js', get_stylesheet_directory_uri() . '/assets/scripts/toggle-images.js', array('jquery'), '1.0.0', true);
    // wp_localize_script('toggle-images-js', 'customAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )) );
    wp_enqueue_script('toggle-images-js');
  } else {
    wp_register_script("script-common", get_stylesheet_directory_uri() . '/assets/scripts/script-common.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script-common');
  }
}


// add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
// function my_theme_enqueue_styles()
// {
//   wp_enqueue_script('adt_custom_js',  get_stylesheet_directory_uri() . '/assets/scripts/custom.js', array('jquery'), '', true);
//   wp_localize_script('adt_custom_js', 'adtCustomAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'inquiryPath' => get_stylesheet_directory_uri() . '/inquiry_captcha.php'));
// }


/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Address', 'textdomain'),
    'id'            => 'cud_address',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => __('Social Media', 'textdomain'),
    'id'            => 'cud_social_media',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => __('Review', 'textdomain'),
    'id'            => 'cud_review',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => __('Quick Chat', 'textdomain'),
    'id'            => 'cud_quickchat',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

add_action('wp_ajax_cud_contact_form', 'cud_contact_form');
add_action('wp_ajax_nopriv_cud_contact_form', 'cud_contact_form');
function cud_contact_form()
{
  global $wpdb;
  $table = 'cUd404_contact_us';

  if ($_POST['cud_captcha'] != $_SESSION['CAPTCHA_CODE']) {
    echo json_encode(array('result' => false, 'captcha_match' => false, 'imput' => $_POST['cud_captcha'], 'cap' => $_SESSION['CAPTCHA_CODE']));
    die();
  }


  $cud_name = $_POST['cud_name'];
  $cud_email = $_POST['cud_email'];
  $cud_phone = $_POST['cud_phone'];
  $cud_services  = $_POST['cud_services'];
  $cud_mesaage = $_POST['cud_mesaage'];

  $sql = "INSERT INTO $table (cud_name , cud_email ,cud_phone ,cud_services ,cud_mesaage ,created_at) VALUES ('$cud_name','$cud_email','$cud_phone','$cud_services','$cud_mesaage',CURRENT_TIMESTAMP)";

  $result = $wpdb->query($sql);
  $sms = '<table width="600" cellspacing="0" cellpadding="0" style="background-color: #F6F9FC;padding: 20px; font-family: Arial, Helvetica,Calibri, sans-serif">
        <tbody>
            <tr>
                <td>
                    <table width="100%" cellspacing="0" cellpadding="0" style="background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,0.07);border-radius: 5px;">
                        <tr>
                            <th colspan="3" style="background-color:rgba(18,17,74,0.03); color: #12114A; font-size: 24px;text-align: left;padding: 20px;">Contact Us</th>
                        </tr>
                        <tr>
                            <td style="padding: 10px;">
                                <table width="100%" cellspacing="10" cellpadding="0">
                                    <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Your name</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $cud_name . '</span>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Phone Number</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $cud_phone . '</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Your email</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;"><a href="mailto:dhaval@igexsolutions.com" style="color:#ff1744;">' . $cud_email . '</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"Company / Organization</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $cud_services . '</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Message</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:0;min-height:150px;">' . $cud_mesaage . '</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
		</table>';
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: CreariveUIDesign <info@creativeuidesign.com>' . "\r\n";
  //info@igexsolutions.com
  $subject = 'CUD Contact Us';
  $admin_email = get_option('admin_email');

  if (wp_mail($admin_email, $subject, $sms, $headers)) {
    echo json_encode(array('result' => true, 'email' => true, 'captcha_match' => true));
    die();
  } else {
    echo json_encode(array('result' => false, 'email' => false, 'captcha_match' => true));
    die();
  }
  die();
}

add_theme_support('custom-logo', array(

  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array('site-title', 'site-description'),
));

function kp_customize_register($wp_customize)
{
  /**
   * Kaushal Theme Panel
   */
  // Calendly Meeting
  $wp_customize->add_section(
    'kp_calendly_section',
    array(
      'title'       => esc_html__('Link Setting', 'kp'),
      'description' => __('', 'kp'),
      'priority'    => 20,
    )
  );
  // Test Calendly Meeting setting.
  $wp_customize->add_setting(
    'kp_calendly_meeting_link',
    array(
      'default'           => '',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'wp_kses_post', // Allow html.
    )
  );
  $wp_customize->add_control(
    'kp_calendly_meeting_link',
    array(
      'label'       => esc_html__('Calendly Meeting Link', 'kp'),
      'description' => __('', 'kp'),
      'section'     => 'kp_calendly_section',
      'type'        => 'text',
    )
  );
  $wp_customize->add_setting(
    'kp_whatsapp_link',
    array(
      'default'           => '',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'wp_kses_post', // Allow html.
    )
  );
  $wp_customize->add_control(
    'kp_whatsapp_link',
    array(
      'label'       => esc_html__('Whatsapp Link', 'kp'),
      'description' => __('', 'kp'),
      'section'     => 'kp_calendly_section',
      'type'        => 'text',
    )
  );
  $wp_customize->add_setting(
    'kp_telegram_link',
    array(
      'default'           => '',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'wp_kses_post', // Allow html.
    )
  );
  $wp_customize->add_control(
    'kp_telegram_link',
    array(
      'label'       => esc_html__('Telegram Link', 'kp'),
      'description' => __('', 'kp'),
      'section'     => 'kp_calendly_section',
      'type'        => 'text',
    )
  );
  $wp_customize->add_setting(
    'kp_skype_link',
    array(
      'default'           => '',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'wp_kses_post', // Allow html.
    )
  );
  $wp_customize->add_control(
    'kp_skype_link',
    array(
      'label'       => esc_html__('Skype  Link', 'kp'),
      'description' => __('', 'kp'),
      'section'     => 'kp_calendly_section',
      'type'        => 'text',
    )
  );
}
add_action('customize_register', 'kp_customize_register');

// load more posts
add_action('wp_ajax_get_more_posts', 'get_more_posts');
add_action('wp_ajax_nopriv_get_more_posts', 'get_more_posts');

function get_more_posts()
{
  $cat_id = $_POST['cat_id'];
  $offset = $_POST['offset'];
  $args = array(
    'posts_per_page' => 4,
    'post_type'   => 'portfolios',
    'offset'    => $offset
  );

  if ($cat_id != '' && $cat_id != null) {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'portfolio_category',
        'field' => 'term_id',
        'terms' => $cat_id,
      )
    );
  }

  $latest_post = get_posts($args);
  $post_html = '';
  foreach ($latest_post as $portfolio) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($portfolio->ID), 'single-post-thumbnail');
    global $wpdb;
    $cUd404_post_view = $wpdb->prefix . "post_view";
    $view_count = $wpdb->get_row("SELECT COUNT(pw.post_id) AS view_count FROM $cUd404_post_view AS pw WHERE pw.post_id=$portfolio->ID");
    $viewer_count = view_count_formate($view_count->view_count);

    $src = $image[0];
    $width = $image[1];
    $height = $image[2];
    $alt_title = $portfolio->post_title;
    $href = get_permalink($portfolio->ID);
    $post_html .= '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="cud-portfolios-item">
								<a href="' . $href . '" class="cud-portfolios-item-img">
									<img src="' . $src . '" alt="' . $alt_title . '" width="' . $width . '" height="' . $height . '" class="img-fluid" />
								</a>
								<div class="cud-portfolios-item-title">
									<h2>
										<a href="' . $href . '" alt="' . $alt_title . '">' . $alt_title . '</a>
									</h2>
									<span>
										<i class="cud-icon-eye"></i>' . $viewer_count . '
									</span>
								</div>
							</div>
						</div>';
  }
  echo $post_html;
  die();
}

function view_count_formate($n)
{
  $number = $n;
  if ($number >= 1000) {
    $diviedBy = $number < 1000000 ? 1000 : 1000000;
    $number /= $diviedBy;
    $number = round($number, 1);
    $number = number_format($number, $number - intval($number) ? 1 : 0, '.', ',') . ($diviedBy == 1000 ? 'k' : 'M');
  }
  return $number;
}

/**
 * Disable the emoji's
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
  add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');
/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}
/**
 * Remove Emoji in WordPress automatically CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
  if ('dns-prefetch' == $relation_type) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
    $urls = array_diff($urls, array($emoji_svg_url));
  }
  return $urls;
}

// add_filter( 'jpeg_quality', function($arg){return 100;} );
add_filter('big_image_size_threshold', '__return_false');

//acf option page
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Contact Info Settings',
    'menu_title'  => 'Contact Info',
    'menu_slug'   => 'contact-info-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  // acf_add_options_sub_page(array(
  // 	'page_title' 	=> 'Theme Header Settings',
  // 	'menu_title'	=> 'Header',
  // 	'parent_slug'	=> 'theme-general-settings',
  // ));

  // acf_add_options_sub_page(array(
  // 	'page_title' 	=> 'Theme Footer Settings',
  // 	'menu_title'	=> 'Footer',
  // 	'parent_slug'	=> 'theme-general-settings',
  // ));

}
