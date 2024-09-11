<?php
/*
Template Name: comfirm ~お問い合わせ確認~
*/

// セッション開始
session_start();

// 変数,定数を定義
$err_msg = array();
define('MSG01','入力必須です');
define('MSG02', 'Emailの形式で入力してください');
define('MSG03','メールアドレス（再入力）が合っていません');

// post送信されていた場合以下の処理を実行
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // $checkbox = filter_input(INPUT_POST,'checkbox',FILTER_DEFAULT,FILTER_REQUIRE_ARRAY)??[];
  $checkbox = $_POST['checkbox'];
  $type  = $_POST['type'] ?? '希望なし';
  $name_sei = $_POST['name_sei'];
  $name_mei = $_POST['name_mei'];
  $fname_sei = $_POST['fname_sei'];
  $fname_mei = $_POST['fname_mei'];
  $tel = $_POST['tel'];
  $to_email = $_POST['to_email'];
  $confirm_email = $_POST['confirm_email'];
  $msg = $_POST['msg'];

  // トークンの生成（CSRF対策）
  $token = bin2hex(random_bytes(32));
  $_SESSION['token'] = $token;

  // 関数を定義
  // HTML出力前のエスケープ処理
  function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

  //未入力チェック関数
  function validRequired($str, $key) {
    if($str === '') {//数値の0はOKにしてから文字はダメにする
      global $err_msg;
      $err_msg[$key] = MSG01;
    }
  }

  //email形式チェック関数
  function validEmail($str, $key) {
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $str)) {
      global $err_msg;
      $err_msg[$key] = MSG02;
    }
  }

  //同値チェック
  function validMatch($str1, $str2, $key) {
    if($str1 !== $str2) {
      global $err_msg;
      $err_msg[$key] = MSG03;
    }
  }

  //バリデーション関数実行
  //未入力チェック
  validRequired($name_sei, 'name_sei');
  validRequired($name_mei, 'name_mei');
  validRequired($fname_sei, 'fname_sei');
  validRequired($fname_mei, 'fname_mei');
  validRequired($to_email, 'to_email');
  validRequired($confirm_email, 'confirm_email');
  validRequired($tel, 'tel');
  validRequired($msg, 'msg');

  //email形式チェック
  validEmail($to_email, 'to_email');

  //同値チェック
  validMatch($to_email, $confirm_email, 'confirm_email');

  //sessionに変数を格納
  $_SESSION['checkbox'] = $checkbox;
  $_SESSION['type'] = $type;
  $_SESSION['name_sei'] = $name_sei;
  $_SESSION['name_mei'] = $name_mei;
  $_SESSION['fname_sei'] = $fname_sei;
  $_SESSION['fname_mei'] = $fname_mei;
  $_SESSION['to_email'] = $to_email;
  $_SESSION['confirm_email'] = $confirm_email;
  $_SESSION['tel'] = $tel;
  $_SESSION['msg'] = $msg;

  $_SESSION['err_msg'] = $err_msg;

  if (!empty($err_msg)) {
    header("Location:/contact/");
  }


} else {
    //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
    header(("location:/alert/"));
    exit;
}
?>

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

        <div class="ly_readBox">
          <p>
            下記の内容でメッセージを送信します。よろしければ「送信」ボタンを押してください。
          </p>
        </div>

        <form class="contact_form" action="<?php echo esc_url( get_home_url() ); ?>/contactdone/" method="post">
          <input type="hidden" name="token" value="<?php echo escape($token); ?>">
          <dl class="contact_form_checkbox">
            <dt>お問い合わせ種別</dt>

            <dd class="dd_comfirm">
            </dd>
            <p><?php echo ($checkbox !== NULL) ? implode(',', $checkbox) : '希望なし'; ?></p>
            <?php var_dump($checkbox); ?>
          </dl>

          <dl>
            <dt>お名前</dt>
            <dd class="contact_form_col2 dd_comfirm">
            </dd>
            <p><?php echo (escape($name_sei.$name_mei)); ?></p>
          </dl>

          <dl>
            <dt>フリガナ</dt>
            <dd class="contact_form_col2 dd_comfirm">
            </dd>
            <p><?php echo (escape($fname_sei.$fname_mei)); ?></p>
          </dl>

          <dl>
            <dt>メールアドレス</dt>
            <dd class="dd_comfirm">
            </dd>
            <p><?php echo (escape($to_email)); ?></p>
          </dl>

          <dl>
            <dt>お電話番号</dt>
            <dd class="dd_comfirm">
            </dd>
            <p><?php echo (escape($tel)); ?></p>
          </dl>

          <dl class="contact_form_checkbox">
            <dt>ご連絡方法</dt>
            <dd class="dd_comfirm">
            </dd>
            <p><?php echo $type; ?></p>
          </dl>

          <dl>
            <dt>お問い合わせ内容</dt>
            <dd class="dd_comfirm">
            </dd>
            <p><?php echo nl2br(escape($msg)); ?></p>
          </dl>

          <input class="btn" type="button" value="修正" onclick="history.back(-1)">
          <input class="btn" type="submit" value="送信" name="submit">

          <input type="hidden" name="checkbox" value="<?php echo ($checkbox !== NULL) ? implode(',', $checkbox) : '希望なし'; ?>">
          <input type="hidden" name="type" value="<?php echo $type ?>">
          <input type="hidden" name="name_sei" value="<?php echo $name_sei ?>">
          <input type="hidden" name="name_mei" value="<?php echo $name_mei ?>">
          <input type="hidden" name="fname_sei" value="<?php echo $fname_sei ?>">
          <input type="hidden" name="fname_mei" value="<?php echo $fname_mei ?>">
          <input type="hidden" name="tel" value="<?php echo $tel ?>">
          <input type="hidden" name="to_email" value="<?php echo $to_email ?>">
          <input type="hidden" name="confirm_email" value="<?php echo $confirm_email ?>">
          <input type="hidden" name="msg" value="<?php echo $msg ?>">
        </form>
      </div>
    </main>
