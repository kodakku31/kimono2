<?php
/*
Template Name: contactdone ~フォームメーラー完了~
*/

?>

<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メニュー -->
    <?php get_template_part('content', 'menu'); ?>

    <!-- メイン -->
    <main class="contact scrollFade">
      <h1 class="ly_rightPageTtl">
        <span class="ly_rightPageTtl_ja">お問い合わせ</span>
        <span class="ly_rightPageTtl_en">Contact</span>
      </h1>

      <div class="contact_container wrapper">
        <div class="ly_smallMv pc">
          <img src="<?php echo get_post_meta($post->ID, 'about_img1', true); ?>" alt="">
        </div>

        <div class="">
          <p>
            お問い合わせの送信を完了いたしました。
          </p>
          <p>
            後ほど、担当者よりご連絡をさせていただきます。
            今しばらくお待ちくださいますよう宜しくお願い申し上げます。
          </p>
          <p>
            ※一日経っても返答がなかった場合は、お手数ですが下記の電話番号までお電話ください。
            お電話にて対応させていただきます。<br>
            tel:<a href="tel:090-9308-0607" style="color: #0066cc;">090-9308-0607</a>山本
          </p>
          <a href="/" style="margin-top: 30px;display:block;">ホーム ></a>
        </div>
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
