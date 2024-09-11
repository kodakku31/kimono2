<?php
/*
Template Name: contactdone ~お問い合わせ完了~
*/

session_start();

//送信ボタンが押されたら
if(!empty($_SESSION['token']) && $_POST['token'] == $_SESSION['token']) {
  //フォームのボタンが押されたら,postされたデータを各変数に格納
  $checkbox = filter_input(INPUT_POST,'checkbox',FILTER_DEFAULT,FILTER_REQUIRE_ARRAY)??[];
  $checkbox = implode(',', $checkbox);//implode-配列の要素を結合して文字列にする
  $type = $_POST['type'];
  $name_sei = $_POST['name_sei'];
  $name_mei = $_POST['name_mei'];
  $kana_sei = $_POST['fname_sei'];
  $kana_mei = $_POST['fname_mei'];
  $phone = $_POST['tel'];
  $to_mail = $_POST['email'];
  $msg = $_POST['msg'];

  // メールの言語設定
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");


  // メール本文
  $message = "お問い合わせがありました。\n";
  $message .= "\n";
  $message .= "以下お問い合わせ内容です。\n";
  $message .= "---------------------------------------------\n";
  $message .= "<お問い合わせ種別>\n $checkbox\n";
  $message .= "<希望する連絡方法>\n $type\n";
  $message .= "<お名前>\n $name_sei $name_mei\n";
  $message .= "<フリガナ>\n $kana_sei $kana_mei\n";
  $message .= "<お電話番号>\n $phone\n";
  $message .= "<メールアドレス>\n $to_mail\n";
  $message .= "<お問い合わせ内容>\n $msg\n";
  $message .= "---------------------------------------------\n";


  // メール本文　ユーザー
  $message_user = "※このメールは自動的に返信されたメールです。\n";
  $message_user .= "\n";
  $message_user .= "この度はお問い合せ頂き誠にありがとうございました。\n";
  $message_user .= "改めて担当者よりご連絡をさせていただきます。\n";
  $message_user .= "\n";
  $message_user .= "以下お問い合わせ内容です。\n";
  $message_user .= "---------------------------------------------\n";
  $message_user .= "<お問い合わせ種別>\n $checkbox\n";
  $message_user .= "<お名前>\n $name_sei $name_mei\n";
  $message_user .= "<フリガナ>\n $kana_sei $kana_mei\n";
  $message_user .= "<お電話番号>\n $phone\n";
  $message_user .= "<メールアドレス>\n $to_mail\n";
  $message_user .= "<お問い合わせ内容>\n $msg\n";
  $message_user .= "\n";
  $message_user .= "和~なごみ~ 着方着物教室\n";
  $message_user .= "https://nagomi2022.com\n";
  $message_user .= "〒207-0022\n";
  $message_user .= "東京都東大和市桜ヶ丘4-286-1メゾンドアムール206号室\n";
  $message_user .= "TEL：090-9308-0607\n";
  $message_user .= "---------------------------------------------\n";

  // 送信元のメールアドレスを変数に格納
  $from_email = 'yamakotakota@icloud.com';
  //送信元の名前を変数に格納
  $from_name = '和~なごみ~ 着方教室 出張着付け';

  // mb_encode_mimeheaderに渡す前にUTF-8に変換しなくてはダメ
  $from_encoded = mb_convert_encoding($from_name, 'UTF-8', 'AUTO');
  //ヘッダ情報を変数に格納
  $headers = 'From: ' . mb_encode_mimeheader($from_encoded) . '<' . $from_email . '>';

  $addParam = '-f' . $from_email;

  mb_send_mail( $to_mail, '和~なごみ~ へのお問い合わせありがとうございます！', $message_user, $headers, $addParam);

} else {
  //トークンが一致しない場合、不正アクセス画面へ遷移する
  header(("Location:/alert/"));
  exit;
}
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

        <?php if(mb_send_mail( $from_email, 'お問い合わせがありました!', $message, $headers, $addParam)):?>
          <div class="">
            <p>
              お問い合わせの送信を完了いたしました。
            </p>
            <p>
              後ほど、担当者よりご連絡をさせていただきます。
              今しばらくお待ちくださいますよう宜しくお願い申し上げます。
            </p>
            <p>
              ※内容により、一部返答できない場合や
              回答に時間がかかる場合がございます。
              あらかじめご了承ください。
            </p>
            <a href="/" style="margin-top: 30px;display:block;">ホーム ></a>
          </div>
        <?php else: ?>
          <div>
            <p>
              送信失敗しました
            </p>
            <p>
              大変お手数ではございますが、
              お電話よりお問い合わせください。
            </p>
            <a href="/"  style="margin-top: 30px;display:block;">ホーム ></a>
          </div>
        <?php endif; ?>

      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
