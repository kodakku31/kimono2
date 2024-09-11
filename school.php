<?php
/*
Template Name: ~着付け教室~
*/
?>

<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メイン -->
    <main class="school">
      <div class="lyMv lyMvWhite scrollFade">
        <h1 class="lyMv_ttl">
          <span class="ly_vcTextJp movetext_jp"><?php the_title(); ?></span>
          <span class="lyMv_ttl_en movetext_en"><?php echo get_post_meta($post->ID, 'subtitle_en', true); ?></span>
        </h1>
      </div>

      <div class="cost_container wrapper">
        <!-- 最初の一言 -->
        <p class="ly_catch scrollFade">
          <?php echo get_post_meta($post->ID, 'about_title1', true); ?>
        </p>
        <div class="ly_readBox ly_readBox_about scrollFadeBottom">
          <p>
            <?php echo get_post_meta($post->ID, 'about_msg1', true); ?>
          </p>
        </div>

        <!-- 特徴 -->
        <!--  教室始まるまでコメントアウト
        <section class="ly_sectionbox">
          <h2 class="ly_secTtl scrollFade">
            <?php echo get_post_meta($post->ID, 'about_title2', true); ?>
          </h2>
          <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
            <?php echo get_post_meta($post->ID, 'about_msg2', true); ?>
          </div>

          <ul class="feature_list">
            <li class="scrollFadeBottom">
              <div class="feature_list_image build_list_image_sp_15"><img src="<?php echo get_post_meta($post->ID, 'feature_img1', true); ?>" alt=""></div>
              <h3 class="feature_list_ttl font_kosakigake"><?php echo get_post_meta($post->ID, 'feature_title1', true); ?></h3>
              <p><?php echo get_post_meta($post->ID, 'feature_msg1', true); ?></p>
            </li>
            <li class="scrollFadeBottom">
              <div class="feature_list_image build_list_image_sp_15"><img src="<?php echo get_post_meta($post->ID, 'feature_img2', true); ?>" alt=""></div>
              <h3 class="feature_list_ttl font_kosakigake"><?php echo get_post_meta($post->ID, 'feature_title2', true); ?></h3>
              <p><?php echo get_post_meta($post->ID, 'feature_msg2', true); ?></p>
            </li>
            <li class="scrollFadeBottom">
              <div class="feature_list_image build_list_image_sp_15"><img src="<?php echo get_post_meta($post->ID, 'feature_img3', true); ?>" alt=""></div>
              <h3 class="feature_list_ttl font_kosakigake"><?php echo get_post_meta($post->ID, 'feature_title3', true); ?></h3>
              <p><?php echo get_post_meta($post->ID, 'feature_msg3', true); ?></p>
            </li>
          </ul>
        </section>
        -->

        <!-- 費用 -->
        <!--教室始まるまでコメントアウト
        <section class="flowCost ly_sectionbox">
          <h2 class="ly_secTtl scrollFade">
            <?php echo get_post_meta($post->ID, 'about_title3', true); ?>
          </h2>
          <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
            <?php echo get_post_meta($post->ID, 'about_msg3', true); ?>
          </div>

          <table class="scrollFadeBottom">
            <thead>
              <tr>
                <td><?php echo get_post_meta($post->ID, 'thead_td', true); ?></td>
                <th scope="col"><?php echo get_post_meta($post->ID, 'thead_th1', true); ?></th>
                <th scope="col"><?php echo get_post_meta($post->ID, 'thead_th2', true); ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail2', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan3', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail3', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost3', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan4', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail4', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost4', true); ?></td>
              </tr>
            </tbody>
          </table>
        </section>
        -->

        <!-- イベント案内 -->
        <!-- 教室始まるまでコメントアウト
        <section class="ly_sectionbox">
          <h2 class="ly_secTtl scrollFade">
            <?php echo get_post_meta($post->ID, 'about_title4', true); ?>
          </h2>
          <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
            <?php echo get_post_meta($post->ID, 'about_msg4', true); ?>
          </div>
        </section>
        -->
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
