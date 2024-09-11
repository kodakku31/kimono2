<!-- footer(使い回し用) -->

<footer class="footer">
  <div class="footer_container font_kosakigake wrapper vertical">
    <nav class="footer_nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'footermenu',
          'container' => '',
          'menu_class' => '',
        ));
				?>
      <div class="footer_sns">
        <a href="https://www.facebook.com/profile.php?id=100093333042489" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icon_facebook.svg">
        </a>
        <a href="https://www.instagram.com/nagomi_kimono_life/" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icon_instagram.svg">
        </a>
      </div>
    </nav>
    <div>
      <small class="footer_copyright"><span>&copy;</span> 2023 nagomi Privacy Policy</small>
      <!-- privacyページ作ってないから削除 -->
      <!-- <a class="footer_privacy" href="/privacy/">Privacy Policy</a> -->
    </div>
  </div>
</footer>

</body>
</html>
