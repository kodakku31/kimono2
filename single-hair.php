<!-- カスタム投稿タイプhairのsingleページ -->
<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メイン -->
    <main class="blogs scrollFade">
      <h1 class="ly_rightPageTtl">
        <span class="ly_rightPageTtl_ja">ヘアスタイル</span>
        <span class="ly_rightPageTtl_en">Hair</span>
      </h1>
      <div class="blog_container wrapper">
        <div class="blog_list blog_mainCont">
          <!-- 記事 -->
          <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post(); ?>
              <article class="blog_listCont">
                <time class="blog_time font_garamond"><?php the_time('Y.m.d'); ?></time>
                <h2 class="blog_ttl font_kosakigake">
                  <a href="#"><?php the_title(); ?></a>
                </h2>
                <?php the_content(); ?>
              </article>
            <?php endwhile; //end while have_post ?>

            <div class="pagenation">
              <ul style="display:flex;">
                <li class="prev"><?php previous_post_link('%link', 'prev'); ?></li>
                <li class="next"><?php next_post_link('%link', 'next'); ?></li>
              </ul>
            </div>

          <?php else: ?>
            <h2 class="blog_ttl">記事が見つかりませんでした。</h2>
            <p>検索で見つかるかもしれません。</p>
            <?php get_serch_form(); ?>

          <?php endif; //end have_posts?>

        </div>
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
