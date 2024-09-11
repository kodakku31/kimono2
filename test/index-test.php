<!-- 2024/8/25まで使用していたindex.php -->
<!-- 冗長な部分が多かったので変更した。また、関数を使用してまとめた。不要なコメントを削除した。 -->

<?php
/*
Template Name:~トップページ~
*/
?>

<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メインコンテンツ -->
    <main class="home">
      <!-- mainvisual -->
      <div class="homeMv lyMv scrollFade">
        <div class="homeMv_textBox homeMovetext wrapper">
          <p class="font_kosakigake homeMovetext_jp">
            <?php echo get_post_meta($post->ID, 'homeMv_ja', true); ?>
            <!-- 木の香りや<br>手触りの良さを<br>大切にした着付け -->
          </p>
          <p class="font_garamond pc homeMovetext_en">
            <?php echo get_post_meta($post->ID, 'homeMv_en', true); ?>
            <!-- kimono with <br>the smell <br>and feel of wood -->
          </p>
        </div>
        <video class="homeMv_video" src="<?php echo get_post_meta($post->ID, 'homeMv', true); ?>" playsinline loop autoplay muted></video>
      </div>

      <!-- point -->
      <section class="ly_verticalBox scrollFade">
        <div class="ly_verticalBox_container wrapper vertical">
          <div class="ly_verticalBox_ttlBox">
            <h2 class="ly_verticalBox_ttl font_kosakigake">
              <?php echo get_post_meta($post->ID, 'top_title1', true); ?>
            </h2>
            <p class="ly_verticalBox_subTtl font_garamond">
              <?php echo get_post_meta($post->ID, 'top_title1_en', true); ?>
            </p>
          </div>

          <div class="ly_verticalBox_textBox">
            <?php echo get_post_meta($post->ID, 'top_about1', true); ?>
          </div>
        </div>
      </section>

      <!-- 背景 -->
      <div class="homeBg01 scrollFadeBottom02"></div>

      <!-- 特徴 -->
      <div class="homeClossLy wrapper">
        <section class="homeClossLy_sec scrollFadeBottom">
          <div class="homeClossLy_sec_inner">
            <figure class="homeClossLy_image">
              <picture>
                <source media="(max-width:767px)" srcset="">
                <img src="<?php echo get_post_meta($post->ID, 'top_img2', true); ?>" alt="">
              </picture>
            </figure>
            <div class="homeClossLy_contBox">
              <h2 class="secTtl vertical">
                <?php echo get_post_meta($post->ID, 'top_title2', true); ?>
                <!-- 専門的な指導 -->
                <span><?php echo get_post_meta($post->ID, 'top_title2_en', true); ?></span>
              </h2>
              <div class="homeClossLy_textBox first_content vertical">
                <?php echo get_post_meta($post->ID, 'top_about2', true); ?>
              </div>
            </div>
          </div>
          <p class="viewBtn contentBtn1 sp">
            <a href="#">View More</a>
          </p>
        </section>

        <section class="homeClossLy_sec scrollFadeBottom">
          <div class="homeClossLy_sec_inner">
            <figure class="homeClossLy_image">
              <picture>
                <source media="(max-width:767px)" srcset="">
                <img src="<?php echo get_post_meta($post->ID, 'top_img3', true); ?>" alt="">
              </picture>
            </figure>
            <div class="homeClossLy_contBox">
              <h2 class="secTtl vertical">
                <?php echo get_post_meta($post->ID, 'top_title3', true); ?>
                <!-- 手軽な出張着付け -->
                <span><?php echo get_post_meta($post->ID, 'top_title3_en', true); ?></span>
              </h2>
              <div class="homeClossLy_textBox second_content vertical">
                <?php echo get_post_meta($post->ID, 'top_about3', true); ?>
              </div>
            </div>
          </div>
          <p class="viewBtn contentBtn2 sp">
            <a href="#">View More</a>
          </p>
        </section>

        <section class="homeClossLy_sec scrollFadeBottom">
          <div class="homeClossLy_sec_inner">
            <figure class="homeClossLy_image">
              <picture>
                <source media="(max-width:767px)" srcset="">
                <img src="<?php echo get_post_meta($post->ID, 'top_img4', true); ?>" alt="">
              </picture>
            </figure>
            <div class="homeClossLy_contBox">
              <h2 class="secTtl vertical">
                <?php echo get_post_meta($post->ID, 'top_title4', true); ?>
                <span><?php echo get_post_meta($post->ID, 'top_title4_en', true); ?></span>
              </h2>
              <div class="homeClossLy_textBox third_content vertical">
                <?php echo get_post_meta($post->ID, 'top_about4', true); ?>
              </div>
            </div>
          </div>
          <p class="viewBtn contentBtn3 sp">
            <a href="#">View More</a>
          </p>
        </section>

      </div>

      <!-- 背景 -->
      <div class="homeBg02 scrollFadeBottom02"></div>

      <!-- 実例紹介 -->
      <div class="homeWorksWrap">
        <section class="homeWorks wrapper">
          <h2 class="homeWorks_ttl secTtl vertical scrollFade">実例紹介<span>Works</span></h2>
          <ul class="homeWorks_list homeWorks_slider scrollFadeBottom">

            <?php
              // 取得する内容を配列に記載します（不要箇所は省略可）
              $args = array(
                            'posts_per_page'   => 4, // 読み込みたい記事数（全件取得時は-1）
                            //'category'         => 1, // 読み込みたいカテゴリID（複数の場合は '1,2'）
                            //'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                            'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
                            //'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切り）
                            'post_type' => 'works', //カスタム投稿タイプ名
              );

              //配列で指定した内容で、記事情報を取得
              $the_query = new WP_Query( $args );

              // 取得した記事情報の表示
              if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示
              // ↓ ループ開始 ↓
              while ( $the_query->have_posts() ):
                $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
              ?>
              <!-- ループ骨格 -->
              <li>
                <a href="<?php the_permalink(); ?>">
                  <figure>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </figure>
                  <p class="homeWorks_contTtl font_kosakigake"><?php the_title(); ?></p>
                  <p class="homeWorks_day font_garamond"><?php the_time('Y.m.d'); ?></p>
                </a>
              </li>
              <?php
              endwhile; //  ループ終了 ↑
              else: // 記事情報がなかったら
              ?>
                <h2>投稿はありません。</h2>
              <?php
              endif;
              // 一覧情報取得に利用したループをリセットする
              wp_reset_postdata();
            ?>

          </ul>
          <p class="viewBtn scrollFade">
            <a href="/works/">View All</a>
          </p>
        </section>
      </div>

      <!-- ブログ -->
      <section class="homeBlog wrapper">
        <h2 class="homeBlog_ttl secTtl vertical scrollFade">ヘアスタイル<span>Hairstyle</span></h2>
        <ul class="homeBlog_list scrollFadeBottom">
          <?php
            // 取得する内容を配列に記載します（不要箇所は省略可）
            $args = array(
                          'posts_per_page'   => 6, // 読み込みたい記事数（全件取得時は-1）
                          //'category'         => 1, // 読み込みたいカテゴリID（複数の場合は '1,2'）
                          //'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                          'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
                          //'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切り）
                          'post_type' => 'hair', //カスタム投稿タイプ名
            );

            //配列で指定した内容で、記事情報を取得
            $the_query = new WP_Query( $args );

            // 取得した記事情報の表示
            if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示
            // ↓ ループ開始 ↓
            while ( $the_query->have_posts() ):
              $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
            ?>
            <!-- ループ骨格 -->
            <li>
              <a href="<?php the_permalink(); ?>">
                <figure>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </figure>
                <p class="homeBlog_contTtl font_kosakigake"><?php the_title(); ?></p>
                <time class="homeBlog_day font_garamond"><?php the_time('Y.m.d'); ?></time>
              </a>
            </li>
            <?php
            endwhile; //  ループ終了 ↑

            else: // 記事情報がなかったら
            ?>
              <h2>投稿はありません。</h2>
            <?php
            endif;
            // 一覧情報取得に利用したループをリセットする
            wp_reset_postdata();
          ?>
        </ul>

        <p class="viewBtn scrollFade">
          <a href="/hair/">View All</a>
        </p>
      </section>

    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
