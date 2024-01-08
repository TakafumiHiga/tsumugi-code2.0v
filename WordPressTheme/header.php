<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-P4ZJHMBR');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- ogp -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="沖縄のホームページ制作 | つむぎCODE" />
  <meta property="og:url" content="https://www.template.gomasio-test.top/" />
  <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('./assets/images/common/WP_OGP.jpg')); ?>" />
  <meta property="og:site_name" content="沖縄のホームページ制作 | つむぎCODE" />
  <meta property="og:description" content="沖縄のホームページ制作、デザインからコーディングまで一括して対応いたします" />
  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('./assets/images/common/favicon.ico')); ?>" />
  <link rel="apple-touch-icon"
    href="<?php echo esc_url(get_theme_file_uri('./assets/images/common/apple-touch-icon-152x152.png')); ?>" />
  <link rel="icon" type="image/png"
    href="<?php echo esc_url(get_theme_file_uri('./assets/images/common/android-chrome-192x192.png')); ?>" />
  <!-- Webフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap"
    rel="preload" as="style">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4ZJHMBR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="l-header">
    <?php get_template_part('includes/global-navi') ?>
    <?php
if ( is_front_page()) :
    get_template_part('includes/kv');
elseif ( is_home() ) :
    get_template_part('includes/lower-post-type-mv');
      get_template_part('includes/breadcrumbs');
elseif ( is_page() ) :
    get_template_part('includes/lower-mv');
    get_template_part('includes/breadcrumbs');
else:
    get_template_part('includes/lower-post-type-mv');
    get_template_part('includes/breadcrumbs');
endif;
?>
  </header>
  <main class="l-main">