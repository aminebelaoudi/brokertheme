<!doctype html>
<html <?php language_attributes(); ?>>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php
  $url = home_url();
  $url = str_replace("http:", "https:", $url);
  ?>
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Prositeweb Inc">

  <title><?php wp_title('|', true, 'right'); ?> <?php echo get_bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

  <!-- Bootstrap -->
  <link href="<?php bloginfo('stylesheet_url'); ?>?v=2" rel="stylesheet">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121318205-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-121318205-1');
  </script>
  <?php wp_head();
  global $post;
  if(isset($post)){
  $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
  if (empty($featured_img_url)) {
    $featured_img_url = $url . "/wp-content/uploads/2019/04/landing.jpg";
  }
  }
  ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <style>
    html {
      background-image: url('<?php echo $url; ?>/wp-content/uploads/2019/04/landing.jpg');
      background-color: #fff;
    }

    @media only screen and (max-width: 600px) {
      .container {
        padding-left: 0px !important;
        padding-right: 0px !important;
      }

      .topdd {
        margin-top: 0px !important;
      }
    }
  </style>
  <?php
  if (isset($post) && $post->post_name == "merci") {
  ?>
    <script>
      fbq('track', 'Lead');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 10787314646 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10787314646"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10787314646'); </script>

  <?php
  }
  ?>
</head>

<body>
  <div class="page">