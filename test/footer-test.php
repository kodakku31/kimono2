<!-- 2024/8/29まで使用していたfooter.php -->
<!-- jsの部分をmain.jsに移行した -->

<!-- footer(使い回し用) -->

<footer class="footer">
  <div class="footer_container font_kosakigake wrapper vertical">
    <nav class="footer_nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'footermenu',
          'container' => '',
          'menu_class' => '',
        ));
				?>
      <div class="footer_sns">
        <a href="https://www.facebook.com/profile.php?id=100093333042489" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icon_facebook.svg">
        </a>
        <a href="https://www.instagram.com/nagomi_kimono_life/" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icon_instagram.svg">
        </a>
      </div>
    </nav>
    <div>
      <small class="footer_copyright"><span>&copy;</span> 2023 nagomi</small>
      <a class="footer_privacy" href="/privacy/">Privacy Policy</a>
    </div>
  </div>
</footer>

<script>
//出張着付けのbtn1,btn2
const btn1 = document.querySelector('.btn1');
if (btn1) {
    btn1.addEventListener('click', function() {
        const priceTable1 = document.querySelector('.btn1_text');
        priceTable1.classList.toggle('hidden');
    });
}

const btn2 = document.querySelector('.btn2');
if (btn2) {
    btn2.addEventListener('click', function() {
        const priceTable2 = document.querySelector('.btn2_text');
        priceTable2.classList.toggle('hidden');
    });
}


//アコーディオン
const ANIMATION_TIMES = {
	duration: 250,
	easing: 'ease-out',
};

document.addEventListener('DOMContentLoaded', function () {
	const accordions = document.querySelectorAll('.accordion');
	accordions.forEach((accordion) => {
		// __title 取得
		const title = accordion.querySelector('.accordion__title');

		// __content 取得
		const content = accordion.querySelector('.accordion__content');

		// アニメーションを保持しておくための変数
		let animation = null;

		// 現在のアニメーション状況を保持する変数
		let nowAnimation = '';

		// 各種リセット
		const resetAnimation = () => {
			animation = null;
			nowAnimation = '';
			accordion.style.height = '';
		};

		title.addEventListener('click', (e) => {
			// すぐに open 属性が切り替わらないようにする
			e.preventDefault();

			// .accordion 全体の高さを取得 (アニメーション中かもしれないのでクリック時点で取得)
			const accordionHeight = accordion.offsetHeight;

			// __title の高さを取得
			const titleHeight = title.offsetHeight;

			// アニメーション中であればキャンセルさせる
			if (animation) {
				animation.cancel(); // 普通にreturnで終了すれば、アニメーション完了まで動き続ける
			}

			// オープン / クローズ 処理
			if (nowAnimation === 'closing' || !accordion.open) {
				// open属性を最初にセット
				accordion.open = true;

				// アニメーション状態の記憶
				nowAnimation = 'opening';
				// 現在の高さで一旦固定させる
				accordion.style.height = `${accordionHeight}px`;

				// コンテンツの高さを取得。（openを付けたあとで取得しないと iOSで０になる）
				const contentHeight = content.offsetHeight;

				// 現在の高さから __title + コンテンツ の高さまで広げる
				animation = accordion.animate(
					{
						height: `${titleHeight + contentHeight}px`,
					},
					ANIMATION_TIMES
				);

				// アニメーション完了時の処理を登録
				animation.onfinish = () => {
					accordion.open = true;
					resetAnimation();
				};

				// アイコンのアニメーション用クラスの切り替え(これもタイミングに気をつけないと動かないときがある)
				accordion.classList.add('is-opened');
			} else if (nowAnimation === 'opening' || accordion.open) {
				// アニメーション状態の記憶
				nowAnimation = 'closing';
				// 現在の高さで一旦固定させる
				accordion.style.height = `${accordionHeight}px`;

				// 現在の高さから __title の高さまで縮める
				animation = accordion.animate(
					{
						height: `${titleHeight}px`,
					},
					ANIMATION_TIMES
				);

				// アニメーション完了時の処理を登録
				animation.onfinish = () => {
					accordion.open = false;
					resetAnimation();
				};

				// アイコンのアニメーション用クラスを削除
				accordion.classList.remove('is-opened');
			}
		});
	});
});
</script>
</body>
</html>
