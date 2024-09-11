<?php
/*
Template Name: comfirm ~お問い合わせ確認~
*/

// セッション開始
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {


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

    // トークンの生成（CSRF対策）
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;

    // HTML出力前のエスケープ処理
    function escape($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
            <dt>お問い合わせ種別<br class="pc">（複数チェック可）</dt>

            <dd class="dd_comfirm">
    					<div>
    						<input id="checkbox01" type="checkbox" name="checkbox[]" value="着方教室 体験レッスン希望" <?php if(empty($_POST['checkbox'])||in_array("着方教室 体験レッスン希望",$_POST['checkbox'])) echo 'checked'?>>
    						<label for="checkbox01">着方教室 体験レッスン希望</label>
    					</div>
              <div>
  				  		<input id="checkbox02" type="checkbox" name="checkbox[]" value="出張着付け希望" <?php if(empty($_POST['checkbox'])||in_array("出張着付け希望",$_POST['checkbox'])) echo 'checked'?>>
  				  		<label for="checkbox02">出張着付け希望</label>
					    </div>
              <div>
  				  		<input id="checkbox03" type="checkbox" name="checkbox[]" value="その他" <?php if(empty($_POST['checkbox'])||in_array("その他",$_POST['checkbox'])) echo 'checked'?>>
  				  		<label for="checkbox03">その他</label>
					    </div>
            </dd>
          </dl>

          <dl>
            <dt>お名前※</dt>
            <dd class="contact_form_col2 dd_comfirm"><input type="hidden" name="name_sei" placeholder="姓"><input type="hidden" name="name_mei" placeholder="名" value="<?php echo escape($name_sei.$name_mei); ?>"></dd>
            <p><?php echo (escape($name_sei.$name_mei)); ?></p>
          </dl>
          <dl>
            <dt>フリガナ※</dt>
            <dd class="contact_form_col2 dd_comfirm"><input type="hidden" name="fname_sei" placeholder="セイ"><input type="hidden" name="fname_mei" placeholder="メイ" value="<?php echo escape($kana_sei.$kana_mei); ?>"></dd>
            <p><?php echo (escape($kana_sei.$kana_mei)); ?></p>

          </dl>
          <dl>
            <dt>メールアドレス※</dt>
            <dd class="dd_comfirm"><input type="hidden" name="email" value="<?php echo escape($to_mail); ?>"></dd>
            <p><?php echo (escape($to_mail)); ?></p>
          </dl>
          <dl>
            <dt>お電話番号※</dt>
            <dd class="dd_comfirm"><input type="hidden" name="tel" value="<?php echo escape($phone); ?>"></dd>
            <p><?php echo (escape($phone)); ?></p>
          </dl>
          <dl class="contact_form_checkbox">
            <dt>ご連絡方法</dt>
            <dd class="dd_comfirm">
				     <div><input id="radio01" type="radio" name="type" value="メール" <?php if($_POST['type'] == "メール"){echo 'checked="checked"';}?>><label for="radio01">メール</label></div>
             <div><input id="radio02" type="radio" name="type" value="電話" <?php if($_POST['type'] == "電話"){echo 'checked="checked"';}?>><label for="radio02">電話（時間のご指定がある場合は「お問い合わせ内容」にご記入ください）</label></div>
            </dd>
          </dl>
          <dl>
            <dt>お問い合わせ内容※</dt>
            <dd class="dd_comfirm"><input type="hidden" name="msg" value="<?php echo escape($msg); ?>"></dd>
            <p><?php echo nl2br(escape($msg)); ?></p>
          </dl>

          <input class="btn" type="button" value="修正" onclick="history.back(-1)">
          <input class="btn" type="submit" value="送信" name="submit"></input>
        </form>
      </main>
    </div>
