<!-- 2024/8/25まで使用していたabout.php -->
<!-- 冗長な部分が多かったので変更した。また、関数を使用してまとめた。 -->

<?php
/*
Template Name: ~出張着付け~
*/
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
          <!-- House made of -->
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

        <!-- 費用 -->
        <section class="flowCost ly_sectionbox">
          <h2 class="ly_secTtl scrollFade">
            <?php echo get_post_meta($post->ID, 'about_title3', true); ?>
          </h2>
          <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
            <?php echo get_post_meta($post->ID, 'about_msg3_1', true); ?>
          </div>

          <button class="btn1 priceBtn scrollFadeBottom">着付け価格</button>
          <table class="btn1_text scrollFadeBottom hidden">
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
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan5', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail5', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost5', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan6', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail6', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost6', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan7', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail7', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost7', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan8', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail8', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost8', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan9', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail9', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost9', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan10', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail10', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost10', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan11', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail11', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost11', true); ?></td>
              </tr>
            </tbody>
          </table>
<!--  ヘアメイク価格-->
          <button class="btn2 priceBtn scrollFadeBottom">ヘアメイク価格</button>
          <table class="btn2_text scrollFadeBottom hidden">
            <thead>
              <tr>
                <td><?php echo get_post_meta($post->ID, 'thead2_td', true); ?></td>
                <th scope="col"><?php echo get_post_meta($post->ID, 'thead2_th1', true); ?></th>
                <th scope="col"><?php echo get_post_meta($post->ID, 'thead2_th2', true); ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_1', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_1', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_1', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_2', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_2', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_2', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_3', true); ?></th>
                <td data-label="内容" class="txt"><?php echo get_post_meta($post->ID, 'detail2_3', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_3', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_4', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_4', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_4', true); ?></td>
              </tr>
          <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_5', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_5', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_5', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_6', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_6', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_6', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_7', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_7', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_7', true); ?></td>
              </tr>
            <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_8', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_8', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_8', true); ?></td>
              </tr>
              <tr>
                <th><?php echo get_post_meta($post->ID, 'plan2_9', true); ?></th>
                <td data-label="時間" class="txt"><?php echo get_post_meta($post->ID, 'detail2_9', true); ?></td>
                <td data-label="価格" class="price">¥<?php echo get_post_meta($post->ID, 'cost2_9', true); ?></td>
              </tr>
            </tbody>
          </table>

          <div class="ly_readBox ly_readBox_flow scrollFadeBottom">
            <?php echo get_post_meta($post->ID, 'about_msg3_2', true); ?>
          </div>
        </section>

        <!-- 流れ -->
        <section class="flowHow ly_sectionbox">
          <h2 class="ly_secTtl scrollFade">着付けの流れ<span>House building process</span></h2>

          <div class="stepbar scrollFadeBottom">
            <div class="stepbarwrap">
                <div class="steptitle">
                    <div class="stepcircle"><span>STEP<br>1</span></div>
                    <p class="title"><?php echo get_post_meta($post->ID, 'flow_title1', true); ?></p>
                </div>
                <div class="steptxt">
                    <span class="txt"><?php echo get_post_meta($post->ID, 'flow_msg1', true); ?></span>
                </div>
                <span class="stepline"></span>
            </div>

            <div class="stepbarwrap">
                <div class="steptitle">
                    <div class="stepcircle"><span>STEP<br>2</span></div>
                    <p class="title"><?php echo get_post_meta($post->ID, 'flow_title2', true); ?></p>
                </div>
                <div class="steptxt">
                    <span class="txt"><?php echo get_post_meta($post->ID, 'flow_msg2', true); ?></span>
                </div>
                <span class="stepline"></span>
            </div>

            <div class="stepbarwrap">
                <div class="steptitle">
                    <div class="stepcircle"><span>STEP<br>3</span></div>
                    <p class="title"><?php echo get_post_meta($post->ID, 'flow_title3', true); ?></p>
                </div>
                <div class="steptxt">
                    <span class="txt"><?php echo get_post_meta($post->ID, 'flow_msg3', true); ?></span>
                </div>
                <span class="stepline"></span>
            </div>
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
