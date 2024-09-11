<?php
/*
Template Name: ~出張着付け~
*/

// ボタンと価格表のセクションを出力する関数
function render_price_section($button_class, $table_class, $thead_td, $thead_th1, $thead_th2, $plans, $details, $costs) {
    ?>
    <button class="<?php echo $button_class; ?> priceBtn scrollFadeBottom"><?php echo $thead_td; ?></button>
    <table class="<?php echo $table_class; ?> scrollFadeBottom hidden">
        <thead>
            <tr>
                <td><?php echo $thead_td; ?></td>
                <th scope="col"><?php echo $thead_th1; ?></th>
                <th scope="col"><?php echo $thead_th2; ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= count($plans); $i++): 
                $plan = $plans[$i - 1];
                $detail = $details[$i - 1];
                $cost = $costs[$i - 1];
                if ($plan || $detail || $cost):
            ?>
            <tr>
                <th><?php echo $plan; ?></th>
                <td data-label="内容" class="txt"><?php echo $detail; ?></td>
                <td data-label="価格" class="price">¥<?php echo $cost; ?></td>
            </tr>
            <?php endif; endfor; ?>
        </tbody>
    </table>
    <?php
}

?>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メニュー -->
<?php get_template_part('content', 'menu'); ?>

<!-- メイン -->
<main class="cost">
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
      <p><?php echo get_post_meta($post->ID, 'about_msg1', true); ?></p>
    </div>

    <!-- 特徴 -->
    <section class="ly_sectionbox">
      <h2 class="ly_secTtl scrollFade">
        <?php echo get_post_meta($post->ID, 'about_title2', true); ?>
      </h2>
      <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
        <?php echo get_post_meta($post->ID, 'about_msg2', true); ?>
      </div>

      <ul class="feature_list">
        <?php 
        // 特徴のリストを動的に生成
        for ($i = 1; $i <= 3; $i++): 
          $feature_img = get_post_meta($post->ID, 'feature_img' . $i, true);
          $feature_title = get_post_meta($post->ID, 'feature_title' . $i, true);
          $feature_msg = get_post_meta($post->ID, 'feature_msg' . $i, true);
          if ($feature_img || $feature_title || $feature_msg): 
        ?>
        <li class="scrollFadeBottom">
          <div class="feature_list_image build_list_image_sp_15"><img src="<?php echo $feature_img; ?>" alt=""></div>
          <h3 class="feature_list_ttl font_kosakigake"><?php echo $feature_title; ?></h3>
          <p><?php echo $feature_msg; ?></p>
        </li>
        <?php endif; endfor; ?>
      </ul>
    </section>

    <!-- 費用 -->
    <section class="flowCost ly_sectionbox">
      <h2 class="ly_secTtl scrollFade">
        <?php echo get_post_meta($post->ID, 'about_title3', true); ?>
      </h2>
      <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
        <?php echo get_post_meta($post->ID, 'about_msg3_1', true); ?>
      </div>

      <?php
      // 着付け価格のセクションを出力
      render_price_section(
        'btn1',
        'btn1_text',
        get_post_meta($post->ID, 'thead_td', true),
        get_post_meta($post->ID, 'thead_th1', true),
        get_post_meta($post->ID, 'thead_th2', true),
        array_map(fn($i) => get_post_meta($post->ID, 'plan' . $i, true), range(1, 11)),
        array_map(fn($i) => get_post_meta($post->ID, 'detail' . $i, true), range(1, 11)),
        array_map(fn($i) => get_post_meta($post->ID, 'cost' . $i, true), range(1, 11))
      );

      // ヘアメイク価格のセクションを出力
      render_price_section(
        'btn2',
        'btn2_text',
        get_post_meta($post->ID, 'thead2_td', true),
        get_post_meta($post->ID, 'thead2_th1', true),
        get_post_meta($post->ID, 'thead2_th2', true),
        array_map(fn($i) => get_post_meta($post->ID, 'plan2_' . $i, true), range(1, 9)),
        array_map(fn($i) => get_post_meta($post->ID, 'detail2_' . $i, true), range(1, 9)),
        array_map(fn($i) => get_post_meta($post->ID, 'cost2_' . $i, true), range(1, 9))
      );
      ?>

      <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
        <?php echo get_post_meta($post->ID, 'about_msg3_2', true); ?>
      </div>
    </section>

    <!-- 流れ -->
    <section class="flowHow ly_sectionbox">
      <h2 class="ly_secTtl scrollFade">着付けの流れ<span>House building process</span></h2>

      <div class="stepbar scrollFadeBottom">
        <?php 
        // 着付けの流れのリストを動的に生成
        for ($i = 1; $i <= 3; $i++): 
          $flow_title = get_post_meta($post->ID, 'flow_title' . $i, true);
          $flow_msg = get_post_meta($post->ID, 'flow_msg' . $i, true);
          if ($flow_title || $flow_msg): 
        ?>
        <div class="stepbarwrap">
          <div class="steptitle">
            <div class="stepcircle"><span>STEP<br><?php echo $i; ?></span></div>
            <p class="title"><?php echo $flow_title; ?></p>
          </div>
          <div class="steptxt">
            <span class="txt"><?php echo $flow_msg; ?></span>
          </div>
          <span class="stepline"></span>
        </div>
        <?php endif; endfor; ?>
      </div>
    </section>

    <!-- 用意するもの -->
    <section class="need_items ly_sectionbox">
      <h2 class="ly_secTtl scrollFade">
        <?php echo get_post_meta($post->ID, 'about_title4', true); ?>
      </h2>
      <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
        <?php echo get_post_meta($post->ID, 'about_msg4', true); ?>
      </div>
    </section>

    <!-- お願い -->
    <section class="request ly_sectionbox">
      <h2 class="ly_secTtl scrollFade">
        <?php echo get_post_meta($post->ID, 'about_title5', true); ?>
      </h2>
      <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
        <?php echo get_post_meta($post->ID, 'about_msg5', true); ?>
      </div>
    </section>
  </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>
