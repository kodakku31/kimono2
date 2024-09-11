<?php
/*
Template Name: contact ~お問い合わせ~
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

        <div class="ly_readBox">
          <p>
            <?php echo get_post_meta($post->ID, 'about_msg1', true); ?>
          </p>
        </div>

        <p class="contact_notes">※は必須項目です。</p>

        <form class="contact_form" action="<?php echo esc_url( get_home_url() ); ?>/comfirm/" method="post" onsubmit="return validate()">
          <dl class="contact_form_checkbox">
			  	<dt>お問い合わせ種別<br class="pc">（複数チェック可）</dt>
			  	<dd class="dd_contact">
					<div>
						<input id="checkbox01" type="checkbox" name="checkbox[]" value="着方教室 体験レッスン希望">
						<label for="checkbox01">着方教室 体験レッスン希望</label>
					</div>
              <div>
				  		<input id="checkbox02" type="checkbox" name="checkbox[]" value="出張着付け希望">
				  		<label for="checkbox02">出張着付け希望</label>
					</div>
              <div>
				  		<input id="checkbox03" type="checkbox" name="checkbox[]" value="その他">
				  		<label for="checkbox03">その他</label>
					</div>
			  	</dd>
          </dl>
          <dl>
            <dt>お名前※</dt>
            <dd class="contact_form_col2 dd_contact"><input type="text" name="name_sei" placeholder="姓"><input type="text" name="name_mei" placeholder="名"></dd>
          </dl>
          <dl>
            <dt>フリガナ※</dt>
            <dd class="contact_form_col2 dd_contact"><input type="text" name="fname_sei" placeholder="セイ"><input type="text" name="fname_mei" placeholder="メイ"></dd>
          </dl>
          <dl>
            <dt>メールアドレス※</dt>
            <dd class="dd_contact"><input type="email" name="email"></dd>
          </dl>
          <dl>
            <dt>メールアドレス（再入力）※</dt>
            <dd class="dd_contact"><input type="email" name="email_confirm"></dd>
          </dl>
          <dl>
            <dt>お電話番号※</dt>
            <dd class="dd_contact"><input type="tel" name="tel"></dd>
          </dl>
          <dl class="contact_form_checkbox">
            <dt>ご連絡方法</dt>
            <dd class="dd_contact">
              <div><input id="radio01" type="radio" name="type" value="メール"><label for="radio01">メール</label></div>
              <div><input id="radio02" type="radio" name="type" value="電話"><label for="radio02">電話（時間のご指定がある場合は「お問い合わせ内容」にご記入ください）</label></div>
            </dd>
          </dl>
          <dl>
            <dt>お問い合わせ内容※</dt>
            <dd class="dd_contact"><textarea name="msg"></textarea></dd>
          </dl>
          <input type="submit" value="入力内容を確認する">
        </form>
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
