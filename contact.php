<?php
/*
Template Name: contact ~お問い合わせフォームメーラー2~
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
      <img
        src="<?php echo get_post_meta($post->ID, 'about_img1', true); ?>"
        alt=""
      />
    </div>

    <div class="ly_readBox">
      <p><?php echo get_post_meta($post->ID, 'about_msg1', true); ?></p>
    </div>

    <p class="contact_notes">※は必須項目です。</p>

    <form
      class="contact_form"
      action="https://ssl.form-mailer.jp/fm/service/Forms/confirm"
      method="post"
      name="form1"
      enctype="multipart/form-data"
      accept-charset="UTF-8"
    >
      <input type="hidden" name="key" value="d13a5ae8801977" />
      <!-- name -->
      <dl>
        <dt>お名前※</dt>
        <dd class="contact_form_col2 dd_contact">
          <input name="field_6997106_sei" type="text" placeholder="姓" /><input
            type="text"
            name="field_6997106_mei"
            placeholder="名"
          />
        </dd>
      </dl>

      <!-- email -->
      <dl>
        <dt>メールアドレス※</dt>
        <dd class="dd_contact"><input type="email" name="field_6997058" /></dd>
      </dl>

      <!-- address -->
      <dl>
        <dt>住所<br class="pc">※市町村までは必須</dt>
        <dd>
          <dl style="flex-direction: column;border-bottom: 0px;padding: 0px;">
            <dt>郵便番号</dt>
            <dd>
              <input name="field_6997061_zip" type="text" maxlength="7" placeholder="ハイフン不要" />
            </dd>
            <dt>都道府県</dt>
            <dd class="dd_contact">
              <select name="field_6997061_pref">
                <option value="">----</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
                <option value="その他">その他</option>
              </select>
            </dd>
            <dt>市区町村</dt>
            <dd class="dd_contact">
              <input name="field_6997061_city" type="text" />
            </dd>
            <dt>番地</dt>
            <dd class="dd_contact">
              <input name="field_6997061_block" type="text" />
            </dd>
            <dt>マンション・ビル名</dt>
            <dd class="dd_contact">
              <input name="field_6997061_building" type="text" />
            </dd>
          </dl>
        </dd>
      </dl>

      <!-- calendar date -->
      <dl>
        <dt>ご希望日</dt>
        <dd class="dd_contact">
          <input
            name="field_6998137"
            type="date"
            value=""
            pattern="\d{4}-\d{2}-\d{2}"
          />
        </dd>
      </dl>

      <!-- phone -->
      <dl>
        <dt>連絡先※</dt>
        <dd class="dd_contact">
          <input name="field_6997062" type="text" placeholder="ハイフン不要" />
        </dd>
      </dl>

      <!-- checkbox -->
      <dl class="contact_form_checkbox">
        <dt>お着物の種類<br class="pc">（複数チェック可）</dt>
        <dd class="dd_contact">
        <div>
          <input id="checkbox01" type="checkbox" name="field_6998154" value="0">
          <label for="checkbox01">訪問着・色無地・付下げなどのフォーマル着</label>
        </div>
        <div>
          <input id="checkbox02" type="checkbox" name="field_6998154" value="1">
          <label for="checkbox02">紬・小紋などの普段着</label>
        </div>
        <div>
          <input id="checkbox03" type="checkbox" name="field_6998154" value="2">
          <label for="checkbox03">振袖</label>
        </div>
        <div>
          <input id="checkbox04" type="checkbox" name="field_6998154" value="3">
          <label for="checkbox04">浴衣(女性)</label>
        </div>
        <div>
          <input id="checkbox05" type="checkbox" name="field_6998154" value="4">
          <label for="checkbox05">3歳 被布</label>
        </div>
        <div>
          <input id="checkbox06" type="checkbox" name="field_6998154" value="5">
          <label for="checkbox06">5歳羽織袴</label>
        </div>
        <div>
          <input id="checkbox07" type="checkbox" name="field_6998154" value="6">
          <label for="checkbox07">7歳 着物</label>
        </div>
        <div>
          <input id="checkbox08" type="checkbox" name="field_6998154" value="7">
          <label for="checkbox08">浴衣(男性)</label>
        </div>
        <div>
          <input id="checkbox09" type="checkbox" name="field_6998154" value="8">
          <label for="checkbox09">着物(男性)</label>
        </div>
        <div>
          <input id="checkbox10" type="checkbox" name="field_6998154" value="9">
          <label for="checkbox10">紋付袴(男性)</label>
        </div>
        <div>
          <input id="checkbox11" type="checkbox" name="field_6998154" value="10">
          <label for="checkbox11">卒業袴</label>
        </div>
        <div>
          <input id="checkbox12" type="checkbox" name="field_6998154" value="11">
          <label for="checkbox12">よく分からない</label>
        </div>
			</dd>
    </dl>


      <!-- textarea -->
      <dl>
        <dt>質問・要望</dt>
        <dd class="dd_contact"><textarea name="field_7262489"></textarea></dd>
      </dl>

      <p>
        <input name="submit" type="submit" value="確認画面へ" />
      </p>

      <input type="hidden" name="code" value="utf8" />
    </form>
  </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>
