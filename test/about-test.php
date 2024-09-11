<!-- 2024/8/25まで使用していたabout.php -->
<!-- 以下の点が冗長だったため変更した。スタッフメンバーの情報を出力する処理を関数 render_staff_member() にまとめ、共通部分をループで処理するようにしました。 -->

<?php
/*
Template Name:~私たちについて~
*/
?>

<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メイン -->
    <main class="about">
      <h1 class="ly_rightPageTtl">
        <span class="ly_rightPageTtl_ja">私たちについて</span>
        <span class="ly_rightPageTtl_en">About us</span>
      </h1>


      <div class="about_container wrapper scrollFade">
        <div class="ly_smallMv pc">
          <img src="<?php echo get_post_meta($post->ID, 'about_img1', true); ?>" alt="">
        </div>
        <p class="ly_catch">
          <?php echo get_post_meta($post->ID, 'about_title1', true); ?>
        </p>
        <div class="ly_readBox ly_readBox_about">
          <p>
            <?php echo get_post_meta($post->ID, 'about_msg1', true); ?>
          </p>
        </div>

        <section class="aboutStaff">
          <h2 class="ly_secTtl scrollFade">スタッフ<span>Saff</span></h2>
          <ul class="aboutStaff_list">
            <li>
              <div class="aboutStaff_contBox scrollFadeBottom">
                <div class="aboutStaff_contBox_img">
                  <picture>
                    <source media="" srcset="">
                      <img src="<?php echo get_post_meta($post->ID, 'staff_img1', true); ?>" alt="">
                  </picture>
                  <p class="aboutStaff_position"><?php echo get_post_meta($post->ID, 'staff_position1', true); ?></p>
                  <p class="aboutStaff_name"><?php echo get_post_meta($post->ID, 'staff_name1', true); ?></p>
                </div>
                <div class="aboutStaff_contBox_msg">
                  <?php echo get_post_meta($post->ID, 'staff_about1', true); ?>
                </div>
              </div>
            </li>

            <li>
              <div class="aboutStaff_contBox scrollFadeBottom">
                <div class="aboutStaff_contBox_img">
                  <picture>
                    <source media="" srcset="">
                      <img src="<?php echo get_post_meta($post->ID, 'staff_img2', true); ?>" alt="">
                  </picture>
                  <p class="aboutStaff_position"><?php echo get_post_meta($post->ID, 'staff_position2', true); ?></p>
                  <p class="aboutStaff_name"><?php echo get_post_meta($post->ID, 'staff_name2', true); ?></p>
                </div>
                <div class="aboutStaff_contBox_msg">
                  <?php echo get_post_meta($post->ID, 'staff_about2', true); ?>
                </div>
              </div>
            </li>

            <li>
              <div class="aboutStaff_contBox scrollFadeBottom">
                <div class="aboutStaff_contBox_img">
                  <picture>
                    <source media="" srcset="">
                      <img src="<?php echo get_post_meta($post->ID, 'staff_img3', true); ?>" alt="">
                  </picture>
                  <p class="aboutStaff_position"><?php echo get_post_meta($post->ID, 'staff_position3', true); ?></p>
                  <p class="aboutStaff_name"><?php echo get_post_meta($post->ID, 'staff_name3', true); ?></p>
                </div>
                <div class="aboutStaff_contBox_msg">
                  <?php echo get_post_meta($post->ID, 'staff_about3', true); ?>
                </div>
              </div>
            </li>

            <li>
              <div class="aboutStaff_contBox scrollFadeBottom">
                <div class="aboutStaff_contBox_img">
                  <picture>
                    <source media="" srcset="">
                      <img src="<?php echo get_post_meta($post->ID, 'staff_img4', true); ?>" alt="">
                  </picture>
                  <p class="aboutStaff_position"><?php echo get_post_meta($post->ID, 'staff_position4', true); ?></p>
                  <p class="aboutStaff_name"><?php echo get_post_meta($post->ID, 'staff_name4', true); ?></p>
                </div>
                <div class="aboutStaff_contBox_msg">
                  <?php echo get_post_meta($post->ID, 'staff_about4', true); ?>
                </div>
              </div>
            </li>
          </ul>
        </section>

        <section class="map">
          <h2 class="ly_secTtl scrollFade">マップ<span>Map</span></h2>
          <div class="map_box scrollFadeBottom">
            <div class="map_img">
              <iframe src="<?php echo get_post_meta($post->ID, 'about_map', true); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="map_info">
              <?php if (have_posts()) : //wordpressループ
                while (have_posts()) : the_post(); //繰り返し処理開始?>
                  <div class="map_text">
                    <?php the_content(); ?>
                  </div>
                <?php endwhile; //繰り返し処理終了
                else : //ここから記事が見つからなかった場合の処理?>
                  <div class="post">
                    <p>準備中</p>
                  </div>
              <?php endif; //eordpressループ終了 ?>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>