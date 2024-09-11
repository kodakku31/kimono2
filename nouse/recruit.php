<?php
/*
Template Name: RECRUIT ~採用情報~
*/
?>

<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メイン -->
    <main class="recruit scrollFade">
      <h1 class="ly_rightPageTtl ">
        <span class="ly_rightPageTtl_ja">採用情報</span>
        <span class="ly_rightPageTtl_en">Recruit</span>
      </h1>
      <div class="wrapper">
        <div class="ly_smallMv pc">
          <img src="<?php echo get_post_meta($post->ID, 'img1', true); ?>" alt="">
        </div>
        <div class="ly_readBox ly_readBox_recruit">
          <p><?php echo get_post_meta($post->ID, 'about1', true); ?></p>
        </div>
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
