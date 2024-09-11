<!-- メニュー表(使い回し用) -->

<header class="header scrollFade">
  <h1 class="header_logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>">
    </a>
  </h1>

  <button class="gNavBtn">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <nav class="gNav">
    <div class="gNav_container vertical wrapper">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'mainmenu',
          'container' => '',
          'menu_class' => 'gNav_primary font_kosakigake',
        ));
      ?>
      <div class="gNav_secondary">
        <div class="gNav_sns">
          <a href="<?php echo get_post_meta($post->ID, 'facebook', true); ?>" target="_blank" rel="noopener">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icon_facebook.svg">
          </a>
          <a href="<?php echo get_post_meta($post->ID, 'instagram', true); ?>" target="_blank" rel="noopener">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icon_instagram.svg">
          </a>
        </div>
        <div>
          <small class="gNav_copyright">
            <span>&copy;</span>  2023 nagomi Privacy Policy
          </small>
          <!-- privacyページ作ってないから削除 -->
          <!-- <a class="gNav_privacy" href="/privacy/">Privacy Policy</a> -->
        </div>
      </div>
    </div>
  </nav>
</header>
