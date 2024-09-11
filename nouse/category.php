<!-- 投稿一覧 -->


<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メイン -->
    <main class="blogs scrollFade">
      <h1 class="ly_rightPageTtl">
        <span class="ly_rightPageTtl_ja">ブログ一覧</span>
        <span class="ly_rightPageTtl_en">Blog</span>
      </h1>
      <div class="blog_container wrapper">
        <div class="blog_list blog_mainCont">
          <!-- 記事のループ -->
          <?php get_template_part('loop'); ?>

          <!-- ページネーション -->
          <?php if(function_exists("pagenation")) pagenation($wp_query->max_num_pages); ?>
        </div>

        <!-- サイドバー -->
        <?php get_sidebar(); ?>
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
