<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <style>
    :root {
      --body-color: #e8eef4;
      --box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06);
      --box-background: #fcfcfc;
      --promo-bg: #efbe13;
      --promo-text: #234299;
      --white-bg: #fcfcfc;
      --gray-bg: #e4e6e8;
      --search-outline: #9d9c9c;
      --newsfeed-tabs-bg: #a4c5e6;
      --newsfeed-tabs--active-text: #234299;
      --newsfeed-tabs-text: #6a7aa1;
      --solid-black: #202020;
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-995SYYLH3X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-995SYYLH3X');
  </script>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <?php if (!is_singular('llms_my_certificate')) :

    do_action(THEME_HOOK_PREFIX . 'before_page');

  endif; ?>

  <div id="page" class="site">

    <?php do_action(THEME_HOOK_PREFIX . 'before_header'); ?>
    <a class="promo" href="https://entermedschool.com/courses/imat-summer-class/" target="_blank">Taking the IMAT in 2023? Get 40% off our courses and classes by enrolling early. Click here to find out more
    </a>
    <header id="masthead" class="<?php echo apply_filters('buddyboss_site_header_class', 'site-header site-header--bb'); ?>">

      <?php do_action(THEME_HOOK_PREFIX . 'header'); ?>
    </header>

    <?php do_action(THEME_HOOK_PREFIX . 'after_header'); ?>

    <?php do_action(THEME_HOOK_PREFIX . 'before_content'); ?>

    <div id="content" class="site-content">

      <?php do_action(THEME_HOOK_PREFIX . 'begin_content'); ?>

      <div class="container">
        <div class="<?php echo apply_filters('buddyboss_site_content_grid_class', 'bb-grid site-content-grid'); ?>">