<!-- header(使い回し用) -->

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="thumbnail" content="<?php echo get_post_meta($post->ID, 'thumbnail', true); ?>">

    <!-- OGP設定 -->
    <meta property="og:url" content="https://nagomi2022.com" >
    <meta property="og:type" content="website" >
    <meta property="og:title" content="和~なごみ~ | 出張着付け 着方教室 東大和市 " >
    <meta property="og:description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" >
    <meta property="og:site_name" content="~和なごみ~ 出張着付け 着方教室" >
    <meta property="og:image" content="<?php echo get_post_meta($post->ID, 'thumbnail', true); ?>" >

    <link rel="icon" href="<?php echo get_post_meta($post->ID, 'icon', true); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick.css">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/validation.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EF46MRETV3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-EF46MRETV3');
    </script>
    
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
