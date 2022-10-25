<?php

/**
 * @package BuddyBoss Child
 * The parent theme functions are located at /buddyboss-theme/inc/theme/functions.php
 * Add your own functions at the bottom of this file.
 */


/****************************** THEME SETUP ******************************/

/**
 * Sets up theme for translation
 *
 * @since BuddyBoss Child 1.0.1
 */
function buddyboss_theme_child_languages()
{
  /**
   * Makes child theme available for translation.
   * Translations can be added into the /languages/ directory.
   */

  // Translate text from the PARENT theme.
  // load_theme_textdomain( 'buddyboss-theme', get_stylesheet_directory() . '/languages' );

  // Translate text from the CHILD theme only.
  // Change 'buddyboss-theme' instances in all child theme files to 'buddyboss-theme-child'.
  // load_theme_textdomain( 'buddyboss-theme-child', get_stylesheet_directory() . '/languages' );

}
add_action('after_setup_theme', 'buddyboss_theme_child_languages');

/**
 * Enqueues scripts and styles for child theme front-end.
 *
 * @since Boss Child Theme  1.0.1
 */
function buddyboss_theme_child_scripts_styles()
{
  /**
   * Scripts and Styles loaded by the parent theme can be unloaded if needed
   * using wp_deregister_script or wp_deregister_style.
   *
   * See the WordPress Codex for more information about those functions:
   * http://codex.wordpress.org/Function_Reference/wp_deregister_script
   * http://codex.wordpress.org/Function_Reference/wp_deregister_style
   **/

  // Styles
  // wp_enqueue_style( 'buddyboss-child-css', get_stylesheet_directory_uri().'/assets/css/maincustom.css', '', '1.1.6') ;

  // Javascript
  // wp_enqueue_script( 'buddyboss-child-js', get_stylesheet_directory_uri().'/assets/js/custom.js', '', '1.0.1' );
}
add_action('wp_enqueue_scripts', 'buddyboss_theme_child_scripts_styles', 99999);




/****************************** CUSTOM FUNCTIONS ******************************/
// ! Custom Styling and Scripting Import Function - DO NOT DELETE
// ? '1.0.0' implicates that file should be cached and changing the version number will force the website to downlaod new version before caching it


add_action('wp_enqueue_scripts', 'entermedschool_stefanstax_custom_scripts_styles');
function entermedschool_stefanstax_custom_scripts_styles()
{
  wp_enqueue_style('entermedschool-main-css', get_stylesheet_directory_uri() . '/assets/css/maincustom.css', array("owl-styling"), time());
  wp_enqueue_style('entermedschool-footer-css', get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), time());
  wp_enqueue_style('entermedschool-navigation-css', get_stylesheet_directory_uri() . '/assets/css/navigation-menu.css', array(), time());
  wp_enqueue_script('entermedschool-main-js', get_stylesheet_directory_uri() . '/assets/js/maincustom.js', array(), time());
  wp_enqueue_script('entermedschool-stringSupport-js', get_stylesheet_directory_uri() . '/assets/js/stringManipulation.js', array(), time());
  wp_enqueue_style('owl-styling', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
  wp_enqueue_style('owl-min-styling', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_script('owl-main', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js");

  if (is_singular(array('sfwd-courses', 'sfwd-lessons', 'sfwd-topic', 'sfwd-quiz', 'sfwd-assignment')) || is_post_type_archive('sfwd-courses')) {
    wp_enqueue_style('entermedschool-courses-css', get_stylesheet_directory_uri() . '/assets/css/courses.css', array(), time());
  }

  if (is_page(["imat-articles", "neet-articles"])) {
    wp_enqueue_style('entermedschool-blog-css', get_stylesheet_directory_uri() . '/assets/css/blogs.css', array(), time());
  }
  if (is_front_page()) {
    wp_enqueue_style('entermedschool-home-css', get_stylesheet_directory_uri() . '/assets/css/homepage.css', array(), time());
  }
  // if (is_page(["team", "representatives"])) {
  //   wp_enqueue_style('entermedschool-team-css', get_stylesheet_directory_uri() . '/assets/css/team.css', array(), time());
  // }
  if (is_page(["imat", "neet", "bmat"])) {
    wp_enqueue_style('entermedschool-exams-css', get_stylesheet_directory_uri() . '/assets/css/exams.css', array(), time());
  }
  if (is_page(["login", "registration", "password-recovery", "imat", "neet", "bmat", "scholarship"])) {
    wp_enqueue_style('entermedschool-fluentforms-css', get_stylesheet_directory_uri() . '/assets/css/fluentforms.css', array(), time());
  }

  // ! If user is not logged in and it is home page include the resource fluentforms
  if (!is_user_logged_in() && is_front_page()) {
    wp_enqueue_style('entermedschool-fluentforms-css', get_stylesheet_directory_uri() . '/assets/css/fluentforms.css', array(), time());
  }
}

add_action('wp_enqueue_scripts', 'entermedschool_stefanstax_custom2_scripts_styles');
function entermedschool_stefanstax_custom2_scripts_styles()
{
  wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap-grid.min.css');
}


// ! GRAB CURRENT URL OF THE PAGE 
function get_current_url()
{
  $pageURL = 'http';
  if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $pageURL .= "s";
  }
  $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "۸۰") {
    $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
  } else {
    $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
  }
  return $pageURL;
}


// ! CONDITIONALLY ENABLE LEARNDASH SCRIPTS/STYLES
function ldx_pro_custom_enqueue()
{
  $url = get_current_url();
  // Remove LearnDash Styles
  wp_dequeue_style('learndash_style');
  wp_dequeue_style('sfwd_front_css');
  wp_dequeue_style('learndash_pager_css');
  wp_dequeue_style('learndash-front');
  wp_dequeue_style('learndash_template_style_css');
  wp_dequeue_style('learndash_quiz_front_css');
  wp_dequeue_style('jquery-dropdown-css');
  wp_dequeue_style('learndash-blocks');
  wp_dequeue_style('learndash_lesson_video');
  wp_dequeue_style('buddyboss-theme-learndash');
  // Remove LearnDash Scripts
  wp_dequeue_script('learndash-front');
  wp_dequeue_script('buddyboss-theme-learndash-sidebar-js');
  wp_dequeue_script('buddyboss-theme-learndash-js');
  // Remove Design Upgrade CSS

  if (is_page(["imat", "neet", "bmat"])) {
    // Add Styles Back In
    wp_enqueue_style('learndash-front');
    wp_enqueue_style('jquery-dropdown-css');
    wp_enqueue_style('buddyboss-theme-learndash');
    // Remove LearnDash Scripts
    wp_enqueue_script('learndash-front');
  }

  if (is_singular(array('sfwd-courses', 'sfwd-lessons', 'sfwd-topic', 'sfwd-quiz', 'sfwd-assignment')) || is_post_type_archive('sfwd-courses') || strpos($url, '/members') !== false) :

    // Add Styles Back In
    wp_enqueue_style('learndash_style');
    wp_enqueue_style('sfwd_front_css');
    wp_enqueue_style('learndash_pager_css');
    wp_enqueue_style('learndash-front');
    wp_enqueue_style('learndash_template_style_css');
    wp_enqueue_style('learndash_quiz_front_css');
    wp_enqueue_style('jquery-dropdown-css');
    wp_enqueue_style('learndash-blocks');
    wp_enqueue_style('learndash_lesson_video');
    wp_enqueue_style('buddyboss-theme-learndash');
    // Remove LearnDash Scripts
    wp_enqueue_script('learndash-front');
    wp_enqueue_script('buddyboss-theme-learndash-sidebar-js');
    wp_enqueue_script('buddyboss-theme-learndash-js');

  endif;
}
add_action('wp_enqueue_scripts', 'ldx_pro_custom_enqueue', 30);



// ! WEBP WordPress Support function 
add_filter('upload_mimes', 'my_myme_types', 1, 1);
function my_myme_types($mime_types)
{
  $mime_types['webp'] = 'image/webp';
  return $mime_types;
}



// ! FLEUNT FORM LOGIN DATA INTEGRATION
add_action('fluentform_before_insert_submission', function ($insertData, $data, $form) {

  if ($form->id != 14) { // 14 is my form id. Change the 14 with your own login for ID
    return;
  }
  $redirectUrl = home_url(); // You can change the redirect url after successful login

  if (get_current_user_id()) { // user already registered
    wp_send_json_success([
      'result' => [
        'redirectUrl' => $redirectUrl,
        'message' => 'Nailed it! Please hold while we redirect you.'
      ]
    ]);
  }

  $email = \FluentForm\Framework\Helpers\ArrayHelper::get($data, 'email'); // your form should have email field
  $password = \FluentForm\Framework\Helpers\ArrayHelper::get($data, 'password'); // your form should have password field

  if (!$email || !$password) {
    wp_send_json_error("We would need both fields, please.");
  }

  $user = get_user_by_email($email);
  if ($user && wp_check_password($password, $user->user_pass, $user->ID)) {
    wp_clear_auth_cookie();
    wp_set_current_user($user->ID);
    wp_set_auth_cookie($user->ID);
    /* user is not logged in.
         * If you use wp_send_json_success the the submission will not be recorded
         * If you remove the wp_send_json_success then it will record the data in fluentform
         * in that case you should redirect the user on form submission settings
         */
    wp_send_json_success([
      'result' => [
        'redirectUrl' => $redirectUrl,
        'message' => 'Your are logged in, Please wait while we redirect you.'
      ]
    ]);
  } else {
    // password or user don't match
    wp_send_json_error("Plese make sure your email or password is correct.");
  }
}, 10, 3);


add_action('phpmailer_init', 'setup_phpmailer_init');
function setup_phpmailer_init($phpmailer)
{
  $phpmailer->Host = 'm3779.contaboserver.net'; // for example, smtp.mailtrap.io
  $phpmailer->Port = 465; // set the appropriate port: 465, 2525, etc.
  $phpmailer->Username = 'notifications@email.entermedschool.com'; // your SMTP username
  $phpmailer->Password = 'EnterMedSchoolMailsNotifications30@'; // your SMTP password
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = 'tls'; // preferable but optional
  $phpmailer->IsSMTP();
}


// ! Advanced redirection tailored made - Stefan Stax (stefanstaxbusiness@gmail.com)
function is_user_role($role, $user_id = null)
{
  $user = is_numeric($user_id) ? get_userdata($user_id) : wp_get_current_user();

  if (!$user)
    return false;

  return in_array($role, (array) $user->roles);
}

function advanced_redirection_stefanstax()
{
  $page_viewed = basename($_SERVER['REQUEST_URI']);

  if (is_user_role('administrator')) {
    if ($page_viewed == "register" or $page_viewed == "registration" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url("registration"));
    } else if ($page_viewed == "password-recovery" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url("password-recovery"));
    }
  }

  if (is_user_logged_in() && !is_user_role("administrator")) {
    if ($page_viewed == "registration" or $page_viewed == "login" or $page_viewed == "password-recovery" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url());
      exit;
    }
  }

  if (!is_user_logged_in()) {
    if ($page_viewed == "registration" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url("registration"));
    }

    if ($page_viewed == "scholarship" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url("login"));
    }

    if ($page_viewed == "login" or $page_viewed == "wp-login.php" or $page_viewed == "wp-admin" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url("login"));
    }

    if ($page_viewed == "password-recovery" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect(home_url("password-recovery"));
    }
  }
}
add_action('init', 'advanced_redirection_stefanstax');


// ! Visited page to be assigned as body class
function add_slug_body_class($classes)
{
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_slug_body_class');


add_filter('login_url', function ($login_url, $redirect, $force_reauth) {
  // Change here your login page url
  $login_url = home_url("/login");
  if (!empty($redirect)) {
    $login_url = add_query_arg('redirect_to', urlencode($redirect), $login_url);
  }
  if ($force_reauth) {
    $login_url = add_query_arg('reauth', '1', $login_url);
  }
  return $login_url;
}, 10, 3);


// Disable heartbeat in WP
add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}
