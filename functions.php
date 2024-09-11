<?php
//カスタムヘッダー画像の設置
$custome_header_defaults = array (
  'default-image' => get_bloginfo('template_url').'images/headers/logo.png',
  'header_text' => false, //ヘッダー画像上にテキストをかぶせる
);
//カスタムヘッダー機能を有効にする
add_theme_support('custom-header', $custome_header_defaults);

//カスタムメニュー使用
register_nav_menu('mainmenu', 'メインメニュー');
register_nav_menu('footermenu', 'フッターメニュー');

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');




/* ====================
カスタムフィールド
====================== */
// 投稿ページへ表示するカスタムボックスを定義する
add_action('admin_menu','add_custom_inputbox');
// 追加した表示項目のデータを更新、保存のためのアクションフック
add_action('save_post', 'save_custom_postdata');


// 入力項目がどの投稿タイプのページに表示されるのかの設定
function add_custom_inputbox() {
  // 第1引数:編集画面のhtmlに挿入されるid属性名
  // 第2引数:管理げマンに表示されるカスタムフィールド名
  // 第3引数:メタボックスの中に出力される関数名
  // 第4引数:管理画面に表示するカスタムフィールドの場所(postなら投稿, pageなら固定ページ)
  // 第5引数:采地される順序
  add_meta_box('top_id', 'トップページ入力欄', 'custom_area', 'page', 'normal');
  add_meta_box('table_id', '価格表入力欄', 'custom_area2', 'page', 'normal');
  add_meta_box('staff_id', 'スタッフ入力欄', 'custom_area3', 'page', 'normal');
  add_meta_box('about_id', 'サブページ入力欄', 'custom_area4', 'page', 'normal');
  add_meta_box('map_id', 'マップ入力欄', 'custom_area5', 'page', 'normal');
  add_meta_box('flow_id', '流れ入力欄', 'custom_area6', 'page', 'normal');
  add_meta_box('feature_id', '3つの特徴入力欄', 'custom_area7', 'page', 'normal');
  add_meta_box('move_id', 'ホームタイトル', 'custom_area8', 'page', 'normal');
  add_meta_box('head_id', 'ホームページ説明', 'custom_area9', 'page', 'normal');
  add_meta_box('sns_id', 'SNS', 'custom_area10', 'page', 'normal');




}

// 管理画面に表示される内容
function custom_area() {
  global $post;
  echo '<トップページ><br><br>';
  echo 'top_about 題名 :<br> <input type="text" name="top_title1" value="'.get_post_meta($post->ID, 'top_title1', true).'"><br>';
  echo 'top_about 題名(英語) :<br> <input type="text" name="top_title1_en" value="'.get_post_meta($post->ID, 'top_title1_en', true).'"><br>';
  echo 'top_about 内容 :<br> <textarea name="top_about1" rows="5" cols="50">'.get_post_meta($post->ID, 'top_about1', true).'</textarea><br><br>';

  echo '<特徴1><br><br>';
  echo '特徴1 題名 :<br> <input type="text" name="top_title2" value="'.get_post_meta($post->ID, 'top_title2', true).'"><br>';
  echo '特徴1 題名(英語) :<br> <input type="text" name="top_title2_en" value="'.get_post_meta($post->ID, 'top_title2_en', true).'"><br>';
  echo '特徴1 内容 :<br> <textarea name="top_about2" rows="5" cols="50">'.get_post_meta($post->ID, 'top_about2', true).'</textarea><br><br>';
  echo '画像url1 :<br> <textarea name="top_img2" rows="5" cols="50">'.get_post_meta($post->ID, 'top_img2', true).'</textarea><br><br>';

  echo '<特徴2><br><br>';
  echo '特徴2 題名 :<br> <input type="text" name="top_title3" value="'.get_post_meta($post->ID, 'top_title3', true).'"><br>';
  echo '特徴2 題名(英語) :<br> <input type="text" name="top_title3_en" value="'.get_post_meta($post->ID, 'top_title3_en', true).'"><br>';
  echo '特徴2 内容 :<br> <textarea name="top_about3" rows="5" cols="50">'.get_post_meta($post->ID, 'top_about3', true).'</textarea><br><br>';
  echo '画像url2 :<br> <textarea name="top_img3" rows="5" cols="50">'.get_post_meta($post->ID, 'top_img3', true).'</textarea><br><br>';

  echo '<特徴3><br><br>';
  echo '特徴3 題名 :<br> <input type="text" name="top_title4" value="'.get_post_meta($post->ID, 'top_title4', true).'"><br>';
  echo '特徴3 題名(英語) :<br> <input type="text" name="top_title4_en" value="'.get_post_meta($post->ID, 'top_title4_en', true).'"><br>';
  echo '特徴3 内容 :<br> <textarea name="top_about4" rows="5" cols="50">'.get_post_meta($post->ID, 'top_about4', true).'</textarea><br><br>';
  echo '画像url3 :<br> <textarea name="top_img4" rows="5" cols="50">'.get_post_meta($post->ID, 'top_img4', true).'</textarea><br><br>';

}
function custom_area2() {
  global $post;

  // thead
  echo '<題名><br>';
  echo '題名左 :<br> <input type="text" name="thead_td" value="'.get_post_meta($post->ID, 'thead_td', true).'"><br>';
  echo '題名中 :<br> <input type="text" name="thead_th1" value="'.get_post_meta($post->ID, 'thead_th1', true).'"><br>';
  echo '題名右 :<br> <input type="text" name="thead_th2" value="'.get_post_meta($post->ID, 'thead_th2', true).'"><br><br>';
  // plan1
  echo '<プラン1><br>';
  echo 'プラン名 :<br> <input type="text" name="plan" value="'.get_post_meta($post->ID, 'plan', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail" value="'.get_post_meta($post->ID, 'detail', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost" value="'.get_post_meta($post->ID, 'cost', true).'"><br><br>';
  // plan2
  echo '<プラン2><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2" value="'.get_post_meta($post->ID, 'plan2', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2" value="'.get_post_meta($post->ID, 'detail2', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2" value="'.get_post_meta($post->ID, 'cost2', true).'"><br><br>';
  // plan3
  echo '<プラン3><br>';
  echo 'プラン名 :<br> <input type="text" name="plan3" value="'.get_post_meta($post->ID, 'plan3', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail3" value="'.get_post_meta($post->ID, 'detail3', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost3" value="'.get_post_meta($post->ID, 'cost3', true).'"><br><br>';
  // plan4
  echo '<プラン4><br>';
  echo 'プラン名 :<br> <input type="text" name="plan4" value="'.get_post_meta($post->ID, 'plan4', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail4" value="'.get_post_meta($post->ID, 'detail4', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost4" value="'.get_post_meta($post->ID, 'cost4', true).'"><br><br>';
  // plan5
  echo '<プラン5><br>';
  echo 'プラン名 :<br> <input type="text" name="plan5" value="'.get_post_meta($post->ID, 'plan5', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail5" value="'.get_post_meta($post->ID, 'detail5', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost5" value="'.get_post_meta($post->ID, 'cost5', true).'"><br><br>';
  // plan6
  echo '<プラン6><br>';
  echo 'プラン名 :<br> <input type="text" name="plan6" value="'.get_post_meta($post->ID, 'plan6', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail6" value="'.get_post_meta($post->ID, 'detail6', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost6" value="'.get_post_meta($post->ID, 'cost6', true).'"><br><br>';
  // plan7
  echo '<プラン7><br>';
  echo 'プラン名 :<br> <input type="text" name="plan7" value="'.get_post_meta($post->ID, 'plan7', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail7" value="'.get_post_meta($post->ID, 'detail7', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost7" value="'.get_post_meta($post->ID, 'cost7', true).'"><br><br>';
  // plan8
  echo '<プラン8><br>';
  echo 'プラン名 :<br> <input type="text" name="plan8" value="'.get_post_meta($post->ID, 'plan8', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail8" value="'.get_post_meta($post->ID, 'detail8', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost8" value="'.get_post_meta($post->ID, 'cost8', true).'"><br><br>';
  // plan9
  echo '<プラン9><br>';
  echo 'プラン名 :<br> <input type="text" name="plan9" value="'.get_post_meta($post->ID, 'plan9', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail9" value="'.get_post_meta($post->ID, 'detail9', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost9" value="'.get_post_meta($post->ID, 'cost9', true).'"><br><br>';
  // plan10
  echo '<プラン10><br>';
  echo 'プラン名 :<br> <input type="text" name="plan10" value="'.get_post_meta($post->ID, 'plan10', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail10" value="'.get_post_meta($post->ID, 'detail10', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost10" value="'.get_post_meta($post->ID, 'cost10', true).'"><br><br>';
   // plan11
  echo '<プラン11><br>';
  echo 'プラン名 :<br> <input type="text" name="plan11" value="'.get_post_meta($post->ID, 'plan11', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail11" value="'.get_post_meta($post->ID, 'detail11', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost11" value="'.get_post_meta($post->ID, 'cost11', true).'"><br><br>'; 

  // thead2
  echo '<題名><br>';
  echo '題名左 :<br> <input type="text" name="thead2_td" value="'.get_post_meta($post->ID, 'thead2_td', true).'"><br>';
  echo '題名中 :<br> <input type="text" name="thead2_th1" value="'.get_post_meta($post->ID, 'thead2_th1', true).'"><br>';
  echo '題名右 :<br> <input type="text" name="thead2_th2" value="'.get_post_meta($post->ID, 'thead2_th2', true).'"><br><br>';
  // plan2_1
  echo '<プラン2_1><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_1" value="'.get_post_meta($post->ID, 'plan2_1', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_1" value="'.get_post_meta($post->ID, 'detail2_1', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_1" value="'.get_post_meta($post->ID, 'cost2_1', true).'"><br><br>';
  // plan2_2
  echo '<プラン2_2><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_2" value="'.get_post_meta($post->ID, 'plan2_2', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_2" value="'.get_post_meta($post->ID, 'detail2_2', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_2" value="'.get_post_meta($post->ID, 'cost2_2', true).'"><br><br>';
  // plan2_3
  echo '<プラン2_3><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_3" value="'.get_post_meta($post->ID, 'plan2_3', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_3" value="'.get_post_meta($post->ID, 'detail2_3', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_3" value="'.get_post_meta($post->ID, 'cost2_3', true).'"><br><br>';
  // plan2_4
  echo '<プラン2_4><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_4" value="'.get_post_meta($post->ID, 'plan2_4', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_4" value="'.get_post_meta($post->ID, 'detail2_4', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_4" value="'.get_post_meta($post->ID, 'cost2_4', true).'"><br><br>';
  // plan2_5
  echo '<プラン2_5><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_5" value="'.get_post_meta($post->ID, 'plan2_5', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_5" value="'.get_post_meta($post->ID, 'detail2_5', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_5" value="'.get_post_meta($post->ID, 'cost2_5', true).'"><br><br>';
  // plan2_6
  echo '<プラン2_6><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_6" value="'.get_post_meta($post->ID, 'plan2_6', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_6" value="'.get_post_meta($post->ID, 'detail2_6', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_6" value="'.get_post_meta($post->ID, 'cost2_6', true).'"><br><br>';
  // plan2_7
  echo '<プラン2_7><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_7" value="'.get_post_meta($post->ID, 'plan2_7', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_7" value="'.get_post_meta($post->ID, 'detail2_7', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_7" value="'.get_post_meta($post->ID, 'cost2_7', true).'"><br><br>';
  // plan2_8
  echo '<プラン2_8><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_8" value="'.get_post_meta($post->ID, 'plan2_8', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_8" value="'.get_post_meta($post->ID, 'detail2_8', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_8" value="'.get_post_meta($post->ID, 'cost2_8', true).'"><br><br>';
  // plan2_9
  echo '<プラン2_9><br>';
  echo 'プラン名 :<br> <input type="text" name="plan2_9" value="'.get_post_meta($post->ID, 'plan2_9', true).'"><br>';
  echo '内容 :<br> <input type="text" name="detail2_9" value="'.get_post_meta($post->ID, 'detail2_9', true).'"><br>';
  echo '価格 :<br> <input type="text" name="cost2_9" value="'.get_post_meta($post->ID, 'cost2_9', true).'"><br><br>';

}

function custom_area3() {
  global $post;

  echo '<スタッフ1><br>';
  echo '名前 :<br> <input type="text" name="staff_name1" value="'.get_post_meta($post->ID, 'staff_name1', true).'"><br>';
  echo '資格や役職 :<br> <input type="text" name="staff_position1" value="'.get_post_meta($post->ID, 'staff_position1', true).'"><br>';
  echo '画像 :<br> <input type="text" name="staff_img1" value="'.get_post_meta($post->ID, 'staff_img1', true).'"><br>';
  echo '内容 :<br> <textarea name="staff_about1" rows="5" cols="50">'.get_post_meta($post->ID, 'staff_about1', true).'</textarea><br><br>';

  echo '<スタッフ2><br>';
  echo '名前 :<br> <input type="text" name="staff_name2" value="'.get_post_meta($post->ID, 'staff_name2', true).'"><br>';
  echo '資格や役職 :<br> <input type="text" name="staff_position2" value="'.get_post_meta($post->ID, 'staff_position2', true).'"><br>';
  echo '画像 :<br> <input type="text" name="staff_img2" value="'.get_post_meta($post->ID, 'staff_img2', true).'"><br>';
  echo '内容 :<br> <textarea name="staff_about2" rows="5" cols="50">'.get_post_meta($post->ID, 'staff_about2', true).'</textarea><br><br>';

  echo '<スタッフ3><br>';
  echo '名前 :<br> <input type="text" name="staff_name3" value="'.get_post_meta($post->ID, 'staff_name3', true).'"><br>';
  echo '資格や役職 :<br> <input type="text" name="staff_position3" value="'.get_post_meta($post->ID, 'staff_position3', true).'"><br>';
  echo '画像 :<br> <input type="text" name="staff_img3" value="'.get_post_meta($post->ID, 'staff_img3', true).'"><br>';
  echo '内容 :<br> <textarea name="staff_about3" rows="5" cols="50">'.get_post_meta($post->ID, 'staff_about3', true).'</textarea><br><br>';

  echo '<スタッフ4><br>';
  echo '名前 :<br> <input type="text" name="staff_name4" value="'.get_post_meta($post->ID, 'staff_name4', true).'"><br>';
  echo '資格や役職 :<br> <input type="text" name="staff_position4" value="'.get_post_meta($post->ID, 'staff_position4', true).'"><br>';
  echo '画像 :<br> <input type="text" name="staff_img4" value="'.get_post_meta($post->ID, 'staff_img4', true).'"><br>';
  echo '内容 :<br> <textarea name="staff_about4" rows="5" cols="50">'.get_post_meta($post->ID, 'staff_about4', true).'</textarea><br><br>';

  echo '<スタッフ5><br>';
  echo '名前 :<br> <input type="text" name="staff_name5" value="'.get_post_meta($post->ID, 'staff_name5', true).'"><br>';
  echo '資格や役職 :<br> <input type="text" name="staff_position5" value="'.get_post_meta($post->ID, 'staff_position5', true).'"><br>';
  echo '画像 :<br> <input type="text" name="staff_img5" value="'.get_post_meta($post->ID, 'staff_img5', true).'"><br>';
  echo '内容 :<br> <textarea name="staff_about5" rows="5" cols="50">'.get_post_meta($post->ID, 'staff_about5', true).'</textarea><br><br>';

  echo '<スタッフ6><br>';
  echo '名前 :<br> <input type="text" name="staff_name6" value="'.get_post_meta($post->ID, 'staff_name6', true).'"><br>';
  echo '資格や役職 :<br> <input type="text" name="staff_position6" value="'.get_post_meta($post->ID, 'staff_position6', true).'"><br>';
  echo '画像 :<br> <input type="text" name="staff_img6" value="'.get_post_meta($post->ID, 'staff_img6', true).'"><br>';
  echo '内容 :<br> <textarea name="staff_about6" rows="5" cols="50">'.get_post_meta($post->ID, 'staff_about6', true).'</textarea><br><br>';

}
function custom_area4() {
  global $post;

  echo '<画像URL1> :<br> <input type="text" name="about_img1" value="'.get_post_meta($post->ID, 'about_img1', true).'"><br><br>';
  echo 'タイトル英語 :<br> <input type="text" name="subtitle_en" value="'.get_post_meta($post->ID, 'subtitle_en', true).'"><br><br>';
  echo '<メッセージ1><br>';
  echo 'タイトル :<br> <textarea name="about_title1" rows="5" cols="50">'.get_post_meta($post->ID, 'about_title1', true).'</textarea><br><br>';
  echo '内容 :<br> <textarea name="about_msg1" rows="5" cols="50">'.get_post_meta($post->ID, 'about_msg1', true).'</textarea><br><br>';
  echo '<メッセージ2><br>';
  echo 'タイトル :<br> <input size="50" type="text" name="about_title2" value="'.get_post_meta($post->ID, 'about_title2', true).'"><br>';
  echo '内容 :<br> <textarea name="about_msg2" rows="5" cols="50">'.get_post_meta($post->ID, 'about_msg2', true).'</textarea><br>';
  echo '<メッセージ3><br>';
  echo 'タイトル :<br> <input size="50" type="text" name="about_title3" value="'.get_post_meta($post->ID, 'about_title3', true).'"><br>';
  echo '内容上 :<br> <textarea name="about_msg3_1" rows="5" cols="50">'.get_post_meta($post->ID, 'about_msg3_1', true).'</textarea><br>';
  echo '内容下 :<br> <textarea name="about_msg3_2" rows="5" cols="50">'.get_post_meta($post->ID, 'about_msg3_2', true).'</textarea><br>';
  echo '<メッセージ4><br>';
  echo 'タイトル :<br> <input size="50" type="text" name="about_title4" value="'.get_post_meta($post->ID, 'about_title4', true).'"><br>';
  echo '内容 :<br> <textarea name="about_msg4" rows="5" cols="50">'.get_post_meta($post->ID, 'about_msg4', true).'</textarea><br>';
  echo '<メッセージ5><br>';
  echo 'タイトル :<br> <input size="50" type="text" name="about_title5" value="'.get_post_meta($post->ID, 'about_title5', true).'"><br>';
  echo '内容 :<br> <textarea name="about_msg5" rows="5" cols="50">'.get_post_meta($post->ID, 'about_msg5', true).'</textarea><br>';
}
function custom_area5() {
  global $post;

  echo '<マップ><br>';
  echo 'src情報 :<br> <input type="text" name="about_map" value="'.get_post_meta($post->ID, 'about_map', true).'"><br>';
}
function custom_area6() {
  global $post;

  echo '<ステップ1><br>';
  echo 'タイトル :<br> <input type="text" name="flow_title1" value="'.get_post_meta($post->ID, 'flow_title1', true).'"><br>';
  echo '内容 :<br> <textarea name="flow_msg1" rows="5" cols="50">'.get_post_meta($post->ID, 'flow_msg1', true).'</textarea><br><br>';
  echo '<ステップ2><br>';
  echo 'タイトル :<br> <input type="text" name="flow_title2" value="'.get_post_meta($post->ID, 'flow_title2', true).'"><br>';
  echo '内容 :<br> <textarea name="flow_msg2" rows="5" cols="50">'.get_post_meta($post->ID, 'flow_msg2', true).'</textarea><br><br>';
  echo '<ステップ3><br>';
  echo 'タイトル :<br> <input type="text" name="flow_title3" value="'.get_post_meta($post->ID, 'flow_title3', true).'"><br>';
  echo '内容 :<br> <textarea name="flow_msg3" rows="5" cols="50">'.get_post_meta($post->ID, 'flow_msg3', true).'</textarea><br><br>';
}
function custom_area7() {
  global $post;

  echo '<特徴1><br>';
  echo 'タイトル :<br> <input type="text" name="feature_title1" value="'.get_post_meta($post->ID, 'feature_title1', true).'"><br>';
  echo '内容 :<br> <textarea name="feature_msg1" rows="5" cols="50">'.get_post_meta($post->ID, 'feature_msg1', true).'</textarea><br>';
  echo '画像URL :<br> <input type="text" name="feature_img1" value="'.get_post_meta($post->ID, 'feature_img1', true).'"><br><br>';

  echo '<特徴2><br>';
  echo 'タイトル :<br> <input type="text" name="feature_title2" value="'.get_post_meta($post->ID, 'feature_title2', true).'"><br>';
  echo '内容 :<br> <textarea name="feature_msg2" rows="5" cols="50">'.get_post_meta($post->ID, 'feature_msg2', true).'</textarea><br>';
  echo '画像URL :<br> <input type="text" name="feature_img2" value="'.get_post_meta($post->ID, 'feature_img2', true).'"><br><br>';

  echo '<特徴3><br>';
  echo 'タイトル :<br> <input type="text" name="feature_title3" value="'.get_post_meta($post->ID, 'feature_title3', true).'"><br>';
  echo '内容 :<br> <textarea name="feature_msg3" rows="5" cols="50">'.get_post_meta($post->ID, 'feature_msg3', true).'</textarea><br>';
  echo '画像URL :<br> <input type="text" name="feature_img3" value="'.get_post_meta($post->ID, 'feature_img3', true).'"><br><br>';
}
function custom_area8() {
  global $post;
  echo '動画url :<br> <textarea name="homeMv" rows="5" cols="50">'.get_post_meta($post->ID, 'homeMv', true).'</textarea><br><br>';
  echo 'タイトルjp :<br> <textarea name="homeMv_ja" rows="5" cols="50">'.get_post_meta($post->ID, 'homeMv_ja', true).'</textarea><br><br>';
  echo 'タイトルen :<br> <textarea name="homeMv_en" rows="5" cols="50">'.get_post_meta($post->ID, 'homeMv_en', true).'</textarea><br><br>';
}
function custom_area9() {
  global $post;
  echo 'アイコンurl :<br> <input type="text" name="icon" value="'.get_post_meta($post->ID, 'icon', true).'"><br>';
  echo 'サイト説明 :<br> <textarea name="description" rows="5" cols="50">'.get_post_meta($post->ID, 'description', true).'</textarea><br>';
  echo 'サイトサムネイル :<br> <input type="text" name="thumbnail" value="'.get_post_meta($post->ID, 'thumbnail', true).'"><br><br>';
}
function custom_area10() {
  global $post;
  echo 'facebook url :<br> <input type="text" name="facebook" value="'.get_post_meta($post->ID, 'facebook', true).'"><br>';
  echo 'instagram url :<br> <input type="text" name="instagram" value="'.get_post_meta($post->ID, 'instagram', true).'"><br>';
}









// 投稿ボタンを石多彩のデータ更新と保存
function save_custom_postdata($post_id) {
  $about_msg = '';
  $table = '';
  $staff = '';
  $other_about = '';
  $iframe = '';
  $flow = '';
  $feature = '';

  // top----------------------------------
  //top_title1
  // カスタムフィールドに入力された情報を取り出す
  if(isset($_POST['top_title1'])) {
    $about_msg = $_POST['top_title1'];
  }
  // 内容が変わっていた場合,保存していた情報を更新
  if($about_msg != get_post_meta($post_id, 'top_title1', true)) {
    update_post_meta($post_id, 'top_title1', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title1', get_post_meta($post_id, 'top_title1', true));
  }
  //top_title2
  if(isset($_POST['top_title2'])) {
    $about_msg = $_POST['top_title2'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title2', true)) {
    update_post_meta($post_id, 'top_title2', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title2', get_post_meta($post_id, 'top_title2', true));
  }
  //top_title3
  if(isset($_POST['top_title3'])) {
    $about_msg = $_POST['top_title3'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title3', true)) {
    update_post_meta($post_id, 'top_title3', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title3', get_post_meta($post_id, 'top_title3', true));
  }
  //top_title4
  if(isset($_POST['top_title4'])) {
    $about_msg = $_POST['top_title4'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title4', true)) {
    update_post_meta($post_id, 'top_title4', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title4', get_post_meta($post_id, 'top_title4', true));
  }

  //top_title1_en
  if(isset($_POST['top_title1_en'])) {
    $about_msg = $_POST['top_title1_en'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title1_en', true)) {
    update_post_meta($post_id, 'top_title1_en', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title1_en', get_post_meta($post_id, 'top_title1_en', true));
  }
  //top_title2_en
  if(isset($_POST['top_title2_en'])) {
    $about_msg = $_POST['top_title2_en'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title2_en', true)) {
    update_post_meta($post_id, 'top_title2_en', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title2_en', get_post_meta($post_id, 'top_title2_en', true));
  }
  //top_title3_en
  if(isset($_POST['top_title3_en'])) {
    $about_msg = $_POST['top_title3_en'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title3_en', true)) {
    update_post_meta($post_id, 'top_title3_en', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title3_en', get_post_meta($post_id, 'top_title3_en', true));
  }
  //top_title4_en
  if(isset($_POST['top_title4_en'])) {
    $about_msg = $_POST['top_title4_en'];
  }
  if($about_msg != get_post_meta($post_id, 'top_title4_en', true)) {
    update_post_meta($post_id, 'top_title4_en', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_title4_en', get_post_meta($post_id, 'top_title4_en', true));
  }

  // top_about1
  if(isset($_POST['top_about1'])) {
    $about_msg = $_POST['top_about1'];
  }
  if($about_msg != get_post_meta($post_id, 'top_about1', true)) {
    update_post_meta($post_id, 'top_about1', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_about1', get_post_meta($post_id, 'top_about1', true));
  }

  // top_about2
  if(isset($_POST['top_about2'])) {
    $about_msg = $_POST['top_about2'];
  }
  if($about_msg != get_post_meta($post_id, 'top_about2', true)) {
    update_post_meta($post_id, 'top_about2', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_about2', get_post_meta($post_id, 'top_about2', true));
  }

  //top_about3
  if(isset($_POST['top_about3'])) {
    $about_msg = $_POST['top_about3'];
  }
  if($about_msg != get_post_meta($post_id, 'top_about3', true)) {
    update_post_meta($post_id, 'top_about3', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_about3', get_post_meta($post_id, 'top_about3', true));
  }

  //top_about4
  if(isset($_POST['top_about4'])) {
    $about_msg = $_POST['top_about4'];
  }
  if($about_msg != get_post_meta($post_id, 'top_about4', true)) {
    update_post_meta($post_id, 'top_about4', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_about4', get_post_meta($post_id, 'top_about4', true));
  }
  //top_img2
  if(isset($_POST['top_img2'])) {
    $about_msg = $_POST['top_img2'];
  }
  if($about_msg != get_post_meta($post_id, 'top_img2', true)) {
    update_post_meta($post_id, 'top_img2', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_img2', get_post_meta($post_id, 'top_img2', true));
  }
  //top_img3
  if(isset($_POST['top_img3'])) {
    $about_msg = $_POST['top_img3'];
  }
  if($about_msg != get_post_meta($post_id, 'top_img3', true)) {
    update_post_meta($post_id, 'top_img3', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_img3', get_post_meta($post_id, 'top_img3', true));
  }
  //top_img4
  if(isset($_POST['top_img4'])) {
    $about_msg = $_POST['top_img4'];
  }
  if($about_msg != get_post_meta($post_id, 'top_img4', true)) {
    update_post_meta($post_id, 'top_img4', $about_msg);
  } elseif($about_msg == '') {
    delete_post_meta($post_id, 'top_img4', get_post_meta($post_id, 'top_img4', true));
  }

  // table----------------------------------
  // thead_td
  if(isset($_POST['thead_td'])) {
    $table = $_POST['thead_td'];
  }
  if($table != get_post_meta($post_id, 'thead_td', true)) {
    update_post_meta($post_id, 'thead_td', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'thead_td', get_post_meta($post_id, 'thead_td', true));
  }

  // thead_th1
  if(isset($_POST['thead_th1'])) {
    $table = $_POST['thead_th1'];
  }
  if($table != get_post_meta($post_id, 'thead_th1', true)) {
    update_post_meta($post_id, 'thead_th1', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'thead_th1', get_post_meta($post_id, 'thead_th1', true));
  }

  //thead_th2
  if(isset($_POST['thead_th2'])) {
    $table = $_POST['thead_th2'];
  }
  if($table != get_post_meta($post_id, 'thead_th2', true)) {
    update_post_meta($post_id, 'thead_th2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'thead_th2', get_post_meta($post_id, 'thead_th2', true));
  }

  // table1
  // plan
  if(isset($_POST['plan'])) {
    $table = $_POST['plan'];
  }
  if($table != get_post_meta($post_id, 'plan', true)) {
    update_post_meta($post_id, 'plan', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan', get_post_meta($post_id, 'plan', true));
  }

  //detail
  if(isset($_POST['detail'])) {
    $table = $_POST['detail'];
  }
  if($table != get_post_meta($post_id, 'detail', true)) {
    update_post_meta($post_id, 'detail', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail', get_post_meta($post_id, 'detail', true));
  }

  //cost
  if(isset($_POST['cost'])) {
    $table = $_POST['cost'];
  }
  if($table != get_post_meta($post_id, 'cost', true)) {
    update_post_meta($post_id, 'cost', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost', get_post_meta($post_id, 'cost', true));
  }

  // table2
  // plan2
  if(isset($_POST['plan2'])) {
    $table = $_POST['plan2'];
  }
  if($table != get_post_meta($post_id, 'plan2', true)) {
    update_post_meta($post_id, 'plan2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2', get_post_meta($post_id, 'plan2', true));
  }

  //detail2
  if(isset($_POST['detail2'])) {
    $table = $_POST['detail2'];
  }
  if($table != get_post_meta($post_id, 'detail2', true)) {
    update_post_meta($post_id, 'detail2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2', get_post_meta($post_id, 'detail2', true));
  }

  //cost2
  if(isset($_POST['cost2'])) {
    $table = $_POST['cost2'];
  }
  if($table != get_post_meta($post_id, 'cost2', true)) {
    update_post_meta($post_id, 'cost2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2', get_post_meta($post_id, 'cost2', true));
  }

  // table3
  // plan3
  if(isset($_POST['plan3'])) {
    $table = $_POST['plan3'];
  }
  if($table != get_post_meta($post_id, 'plan3', true)) {
    update_post_meta($post_id, 'plan3', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan3', get_post_meta($post_id, 'plan3', true));
  }

  //detail3
  if(isset($_POST['detail3'])) {
    $table = $_POST['detail3'];
  }
  if($table != get_post_meta($post_id, 'detail3', true)) {
    update_post_meta($post_id, 'detail3', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail3', get_post_meta($post_id, 'detail3', true));
  }

  //cost3
  if(isset($_POST['cost3'])) {
    $table = $_POST['cost3'];
  }
  if($table != get_post_meta($post_id, 'cost3', true)) {
    update_post_meta($post_id, 'cost3', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost3', get_post_meta($post_id, 'cost3', true));
  }

  // table4
  // plan4
  if(isset($_POST['plan4'])) {
    $table = $_POST['plan4'];
  }
  if($table != get_post_meta($post_id, 'plan4', true)) {
    update_post_meta($post_id, 'plan4', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan4', get_post_meta($post_id, 'plan4', true));
  }

  //detail4
  if(isset($_POST['detail4'])) {
    $table = $_POST['detail4'];
  }
  if($table != get_post_meta($post_id, 'detail4', true)) {
    update_post_meta($post_id, 'detail4', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail4', get_post_meta($post_id, 'detail4', true));
  }

  //cost4
  if(isset($_POST['cost4'])) {
    $table = $_POST['cost4'];
  }
  if($table != get_post_meta($post_id, 'cost4', true)) {
    update_post_meta($post_id, 'cost4', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost4', get_post_meta($post_id, 'cost4', true));
  }

  // table5
  // plan5
  if(isset($_POST['plan5'])) {
    $table = $_POST['plan5'];
  }
  if($table != get_post_meta($post_id, 'plan5', true)) {
    update_post_meta($post_id, 'plan5', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan5', get_post_meta($post_id, 'plan5', true));
  }

  //detail5
  if(isset($_POST['detail5'])) {
    $table = $_POST['detail5'];
  }
  if($table != get_post_meta($post_id, 'detail5', true)) {
    update_post_meta($post_id, 'detail5', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail5', get_post_meta($post_id, 'detail5', true));
  }

  //cost5
  if(isset($_POST['cost5'])) {
    $table = $_POST['cost5'];
  }
  if($table != get_post_meta($post_id, 'cost5', true)) {
    update_post_meta($post_id, 'cost5', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost5', get_post_meta($post_id, 'cost5', true));
  }

  // table6
  // plan6
  if(isset($_POST['plan6'])) {
    $table = $_POST['plan6'];
  }
  if($table != get_post_meta($post_id, 'plan6', true)) {
    update_post_meta($post_id, 'plan6', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan6', get_post_meta($post_id, 'plan6', true));
  }

  //detail6
  if(isset($_POST['detail6'])) {
    $table = $_POST['detail6'];
  }
  if($table != get_post_meta($post_id, 'detail6', true)) {
    update_post_meta($post_id, 'detail6', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail6', get_post_meta($post_id, 'detail6', true));
  }

  //cost6
  if(isset($_POST['cost6'])) {
    $table = $_POST['cost6'];
  }
  if($table != get_post_meta($post_id, 'cost6', true)) {
    update_post_meta($post_id, 'cost6', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost6', get_post_meta($post_id, 'cost6', true));
  }

  // table7
  // plan7
  if(isset($_POST['plan7'])) {
    $table = $_POST['plan7'];
  }
  if($table != get_post_meta($post_id, 'plan7', true)) {
    update_post_meta($post_id, 'plan7', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan7', get_post_meta($post_id, 'plan7', true));
  }

  //detail7
  if(isset($_POST['detail7'])) {
    $table = $_POST['detail7'];
  }
  if($table != get_post_meta($post_id, 'detail7', true)) {
    update_post_meta($post_id, 'detail7', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail7', get_post_meta($post_id, 'detail7', true));
  }

  //cost7
  if(isset($_POST['cost7'])) {
    $table = $_POST['cost7'];
  }
  if($table != get_post_meta($post_id, 'cost7', true)) {
    update_post_meta($post_id, 'cost7', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost7', get_post_meta($post_id, 'cost7', true));
  }
  // table8
  // plan8
  if(isset($_POST['plan8'])) {
    $table = $_POST['plan8'];
  }
  if($table != get_post_meta($post_id, 'plan8', true)) {
    update_post_meta($post_id, 'plan8', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan8', get_post_meta($post_id, 'plan8', true));
  }

  //detail8
  if(isset($_POST['detail8'])) {
    $table = $_POST['detail8'];
  }
  if($table != get_post_meta($post_id, 'detail8', true)) {
    update_post_meta($post_id, 'detail8', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail8', get_post_meta($post_id, 'detail8', true));
  }

  //cost8
  if(isset($_POST['cost8'])) {
    $table = $_POST['cost8'];
  }
  if($table != get_post_meta($post_id, 'cost8', true)) {
    update_post_meta($post_id, 'cost8', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost8', get_post_meta($post_id, 'cost8', true));
  }
  // table9
  // plan9
  if(isset($_POST['plan9'])) {
    $table = $_POST['plan9'];
  }
  if($table != get_post_meta($post_id, 'plan9', true)) {
    update_post_meta($post_id, 'plan9', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan9', get_post_meta($post_id, 'plan9', true));
  }

  //detail9
  if(isset($_POST['detail9'])) {
    $table = $_POST['detail9'];
  }
  if($table != get_post_meta($post_id, 'detail9', true)) {
    update_post_meta($post_id, 'detail9', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail9', get_post_meta($post_id, 'detail9', true));
  }

  //cost9
  if(isset($_POST['cost9'])) {
    $table = $_POST['cost9'];
  }
  if($table != get_post_meta($post_id, 'cost9', true)) {
    update_post_meta($post_id, 'cost9', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost9', get_post_meta($post_id, 'cost9', true));
  }
  // table10
  // plan10
  if(isset($_POST['plan10'])) {
    $table = $_POST['plan10'];
  }
  if($table != get_post_meta($post_id, 'plan10', true)) {
    update_post_meta($post_id, 'plan10', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan10', get_post_meta($post_id, 'plan10', true));
  }

  //detail10
  if(isset($_POST['detail10'])) {
    $table = $_POST['detail10'];
  }
  if($table != get_post_meta($post_id, 'detail10', true)) {
    update_post_meta($post_id, 'detail10', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail10', get_post_meta($post_id, 'detail10', true));
  }

  //cost10
  if(isset($_POST['cost10'])) {
    $table = $_POST['cost10'];
  }
  if($table != get_post_meta($post_id, 'cost10', true)) {
    update_post_meta($post_id, 'cost10', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost10', get_post_meta($post_id, 'cost10', true));
  }
    // table11
  // plan11
  if(isset($_POST['plan11'])) {
    $table = $_POST['plan11'];
  }
  if($table != get_post_meta($post_id, 'plan11', true)) {
    update_post_meta($post_id, 'plan11', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan11', get_post_meta($post_id, 'plan11', true));
  }

  //detail11
  if(isset($_POST['detail11'])) {
    $table = $_POST['detail11'];
  }
  if($table != get_post_meta($post_id, 'detail11', true)) {
    update_post_meta($post_id, 'detail11', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail11', get_post_meta($post_id, 'detail11', true));
  }

  //cost11
  if(isset($_POST['cost11'])) {
    $table = $_POST['cost11'];
  }
  if($table != get_post_meta($post_id, 'cost11', true)) {
    update_post_meta($post_id, 'cost11', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost11', get_post_meta($post_id, 'cost11', true));
  }



  // thead2_td
  if(isset($_POST['thead2_td'])) {
    $table = $_POST['thead2_td'];
  }
  if($table != get_post_meta($post_id, 'thead2_td', true)) {
    update_post_meta($post_id, 'thead2_td', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'thead2_td', get_post_meta($post_id, 'thead2_td', true));
  }

  // thead2_th1
  if(isset($_POST['thead2_th1'])) {
    $table = $_POST['thead2_th1'];
  }
  if($table != get_post_meta($post_id, 'thead2_th1', true)) {
    update_post_meta($post_id, 'thead2_th1', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'thead2_th1', get_post_meta($post_id, 'thead2_th1', true));
  }

  //thead2_th2
  if(isset($_POST['thead2_th2'])) {
    $table = $_POST['thead2_th2'];
  }
  if($table != get_post_meta($post_id, 'thead2_th2', true)) {
    update_post_meta($post_id, 'thead2_th2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'thead2_th2', get_post_meta($post_id, 'thead2_th2', true));
  }

  // table2_1
  // plan2_1
  if(isset($_POST['plan2_1'])) {
    $table = $_POST['plan2_1'];
  }
  if($table != get_post_meta($post_id, 'plan2_1', true)) {
    update_post_meta($post_id, 'plan2_1', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_1', get_post_meta($post_id, 'plan2_1', true));
  }

  //detail2_1
  if(isset($_POST['detail2_1'])) {
    $table = $_POST['detail2_1'];
  }
  if($table != get_post_meta($post_id, 'detail2_1', true)) {
    update_post_meta($post_id, 'detail2_1', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_1', get_post_meta($post_id, 'detail2_1', true));
  }

  //cost2_1
  if(isset($_POST['cost2_1'])) {
    $table = $_POST['cost2_1'];
  }
  if($table != get_post_meta($post_id, 'cost2_1', true)) {
    update_post_meta($post_id, 'cost2_1', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_1', get_post_meta($post_id, 'cost2_1', true));
  }

  // table2_2
  // plan2_2
  if(isset($_POST['plan2_2'])) {
    $table = $_POST['plan2_2'];
  }
  if($table != get_post_meta($post_id, 'plan2_2', true)) {
    update_post_meta($post_id, 'plan2_2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_2', get_post_meta($post_id, 'plan2_2', true));
  }

  //detail2_2
  if(isset($_POST['detail2_2'])) {
    $table = $_POST['detail2_2'];
  }
  if($table != get_post_meta($post_id, 'detail2_2', true)) {
    update_post_meta($post_id, 'detail2_2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_2', get_post_meta($post_id, 'detail2_2', true));
  }

  //cost2_2
  if(isset($_POST['cost2_2'])) {
    $table = $_POST['cost2_2'];
  }
  if($table != get_post_meta($post_id, 'cost2_2', true)) {
    update_post_meta($post_id, 'cost2_2', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_2', get_post_meta($post_id, 'cost2_2', true));
  }

  // table2_3
  // plan2_3
  if(isset($_POST['plan2_3'])) {
    $table = $_POST['plan2_3'];
  }
  if($table != get_post_meta($post_id, 'plan2_3', true)) {
    update_post_meta($post_id, 'plan2_3', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_3', get_post_meta($post_id, 'plan2_3', true));
  }

  //detail2_3
  if(isset($_POST['detail2_3'])) {
    $table = $_POST['detail2_3'];
  }
  if($table != get_post_meta($post_id, 'detail2_3', true)) {
    update_post_meta($post_id, 'detail2_3', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_3', get_post_meta($post_id, 'detail2_3', true));
  }

  //cost2_3
  if(isset($_POST['cost2_3'])) {
    $table = $_POST['cost2_3'];
  }
  if($table != get_post_meta($post_id, 'cost2_3', true)) {
    update_post_meta($post_id, 'cost2_3', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_3', get_post_meta($post_id, 'cost2_3', true));
  }

  // table2_4
  // plan2_4
  if(isset($_POST['plan2_4'])) {
    $table = $_POST['plan2_4'];
  }
  if($table != get_post_meta($post_id, 'plan2_4', true)) {
    update_post_meta($post_id, 'plan2_4', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_4', get_post_meta($post_id, 'plan2_4', true));
  }

  //detail2_4
  if(isset($_POST['detail2_4'])) {
    $table = $_POST['detail2_4'];
  }
  if($table != get_post_meta($post_id, 'detail2_4', true)) {
    update_post_meta($post_id, 'detail2_4', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_4', get_post_meta($post_id, 'detail2_4', true));
  }

  //cost2_4
  if(isset($_POST['cost2_4'])) {
    $table = $_POST['cost2_4'];
  }
  if($table != get_post_meta($post_id, 'cost2_4', true)) {
    update_post_meta($post_id, 'cost2_4', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_4', get_post_meta($post_id, 'cost2_4', true));
  }

  // table2_5
  // plan2_5
  if(isset($_POST['plan2_5'])) {
    $table = $_POST['plan2_5'];
  }
  if($table != get_post_meta($post_id, 'plan2_5', true)) {
    update_post_meta($post_id, 'plan2_5', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_5', get_post_meta($post_id, 'plan2_5', true));
  }

  //detail2_5
  if(isset($_POST['detail2_5'])) {
    $table = $_POST['detail2_5'];
  }
  if($table != get_post_meta($post_id, 'detail2_5', true)) {
    update_post_meta($post_id, 'detail2_5', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_5', get_post_meta($post_id, 'detail2_5', true));
  }

  //cost2_5
  if(isset($_POST['cost2_5'])) {
    $table = $_POST['cost2_5'];
  }
  if($table != get_post_meta($post_id, 'cost2_5', true)) {
    update_post_meta($post_id, 'cost2_5', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_5', get_post_meta($post_id, 'cost2_5', true));
  }

  // table2_6
  // plan2_6
  if(isset($_POST['plan2_6'])) {
    $table = $_POST['plan2_6'];
  }
  if($table != get_post_meta($post_id, 'plan2_6', true)) {
    update_post_meta($post_id, 'plan2_6', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_6', get_post_meta($post_id, 'plan2_6', true));
  }

  //detail2_6
  if(isset($_POST['detail2_6'])) {
    $table = $_POST['detail2_6'];
  }
  if($table != get_post_meta($post_id, 'detail2_6', true)) {
    update_post_meta($post_id, 'detail2_6', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_6', get_post_meta($post_id, 'detail2_6', true));
  }

  //cost2_6
  if(isset($_POST['cost2_6'])) {
    $table = $_POST['cost2_6'];
  }
  if($table != get_post_meta($post_id, 'cost2_6', true)) {
    update_post_meta($post_id, 'cost2_6', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_6', get_post_meta($post_id, 'cost2_6', true));
  }

  // table2_7
  // plan2_7
  if(isset($_POST['plan2_7'])) {
    $table = $_POST['plan2_7'];
  }
  if($table != get_post_meta($post_id, 'plan2_7', true)) {
    update_post_meta($post_id, 'plan2_7', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_7', get_post_meta($post_id, 'plan2_7', true));
  }

  //detail2_7
  if(isset($_POST['detail2_7'])) {
    $table = $_POST['detail2_7'];
  }
  if($table != get_post_meta($post_id, 'detail2_7', true)) {
    update_post_meta($post_id, 'detail2_7', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_7', get_post_meta($post_id, 'detail2_7', true));
  }

  //cost2_7
  if(isset($_POST['cost2_7'])) {
    $table = $_POST['cost2_7'];
  }
  if($table != get_post_meta($post_id, 'cost2_7', true)) {
    update_post_meta($post_id, 'cost2_7', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_7', get_post_meta($post_id, 'cost2_7', true));
  }
  // table2_8
  // plan2_8
  if(isset($_POST['plan2_8'])) {
    $table = $_POST['plan2_8'];
  }
  if($table != get_post_meta($post_id, 'plan2_8', true)) {
    update_post_meta($post_id, 'plan2_8', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_8', get_post_meta($post_id, 'plan2_8', true));
  }

  //detail2_8
  if(isset($_POST['detail2_8'])) {
    $table = $_POST['detail2_8'];
  }
  if($table != get_post_meta($post_id, 'detail2_8', true)) {
    update_post_meta($post_id, 'detail2_8', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_8', get_post_meta($post_id, 'detail2_8', true));
  }

  //cost2_8
  if(isset($_POST['cost2_8'])) {
    $table = $_POST['cost2_8'];
  }
  if($table != get_post_meta($post_id, 'cost2_8', true)) {
    update_post_meta($post_id, 'cost2_8', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_8', get_post_meta($post_id, 'cost2_8', true));
  }
  // table2_9
  // plan2_9
  if(isset($_POST['plan2_9'])) {
    $table = $_POST['plan2_9'];
  }
  if($table != get_post_meta($post_id, 'plan2_9', true)) {
    update_post_meta($post_id, 'plan2_9', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'plan2_9', get_post_meta($post_id, 'plan2_9', true));
  }

  //detail2_9
  if(isset($_POST['detail2_9'])) {
    $table = $_POST['detail2_9'];
  }
  if($table != get_post_meta($post_id, 'detail2_9', true)) {
    update_post_meta($post_id, 'detail2_9', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'detail2_9', get_post_meta($post_id, 'detail2_9', true));
  }

  //cost2_9
  if(isset($_POST['cost2_9'])) {
    $table = $_POST['cost2_9'];
  }
  if($table != get_post_meta($post_id, 'cost2_9', true)) {
    update_post_meta($post_id, 'cost2_9', $table);
  } elseif($table == '') {
    delete_post_meta($post_id, 'cost2_9', get_post_meta($post_id, 'cost2_9', true));
  }

  //staff------------------------------------
  //staff_name1
  if(isset($_POST['staff_name1'])) {
    $staff = $_POST['staff_name1'];
  }
  if($staff != get_post_meta($post_id, 'staff_name1', true)) {
    update_post_meta($post_id, 'staff_name1', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_name1', get_post_meta($post_id, 'staff_name1', true));
  }

  //staff_position1
  if(isset($_POST['staff_position1'])) {
    $staff = $_POST['staff_position1'];
  }
  if($staff != get_post_meta($post_id, 'staff_position1', true)) {
    update_post_meta($post_id, 'staff_position1', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_position1', get_post_meta($post_id, 'staff_position1', true));
  }


  //staff_about1
  if(isset($_POST['staff_about1'])) {
    $staff = $_POST['staff_about1'];
  }
  if($staff != get_post_meta($post_id, 'staff_about1', true)) {
    update_post_meta($post_id, 'staff_about1', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_about1', get_post_meta($post_id, 'staff_about1', true));
  }

  //staff_img1
  if(isset($_POST['staff_img1'])) {
    $staff = $_POST['staff_img1'];
  }
  if($staff != get_post_meta($post_id, 'staff_img1', true)) {
    update_post_meta($post_id, 'staff_img1', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_img1', get_post_meta($post_id, 'staff_img1', true));
  }

  //staff_name2
  if(isset($_POST['staff_name2'])) {
    $staff = $_POST['staff_name2'];
  }
  if($staff != get_post_meta($post_id, 'staff_name2', true)) {
    update_post_meta($post_id, 'staff_name2', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_name2', get_post_meta($post_id, 'staff_name2', true));
  }

  //staff_position2
  if(isset($_POST['staff_position2'])) {
    $staff = $_POST['staff_position2'];
  }
  if($staff != get_post_meta($post_id, 'staff_position2', true)) {
    update_post_meta($post_id, 'staff_position2', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_position2', get_post_meta($post_id, 'staff_position2', true));
  }

  //staff_about2
  if(isset($_POST['staff_about2'])) {
    $staff = $_POST['staff_about2'];
  }
  if($staff != get_post_meta($post_id, 'staff_about2', true)) {
    update_post_meta($post_id, 'staff_about2', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_about2', get_post_meta($post_id, 'staff_about2', true));
  }

  //staff_img2
  if(isset($_POST['staff_img2'])) {
    $staff = $_POST['staff_img2'];
  }
  if($staff != get_post_meta($post_id, 'staff_img2', true)) {
    update_post_meta($post_id, 'staff_img2', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_img2', get_post_meta($post_id, 'staff_img2', true));
  }

  //staff_name3
  if(isset($_POST['staff_name3'])) {
    $staff = $_POST['staff_name3'];
  }
  if($staff != get_post_meta($post_id, 'staff_name3', true)) {
    update_post_meta($post_id, 'staff_name3', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_name3', get_post_meta($post_id, 'staff_name3', true));
  }

  //staff_position3
  if(isset($_POST['staff_position3'])) {
    $staff = $_POST['staff_position3'];
  }
  if($staff != get_post_meta($post_id, 'staff_position3', true)) {
    update_post_meta($post_id, 'staff_position3', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_position3', get_post_meta($post_id, 'staff_position3', true));
  }

  //staff_about3
  if(isset($_POST['staff_about3'])) {
    $staff = $_POST['staff_about3'];
  }
  if($staff != get_post_meta($post_id, 'staff_about3', true)) {
    update_post_meta($post_id, 'staff_about3', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_about3', get_post_meta($post_id, 'staff_about3', true));
  }

  //staff_img3
  if(isset($_POST['staff_img3'])) {
    $staff = $_POST['staff_img3'];
  }
  if($staff != get_post_meta($post_id, 'staff_img3', true)) {
    update_post_meta($post_id, 'staff_img3', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_img3', get_post_meta($post_id, 'staff_img3', true));
  }

  //staff_name4
  if(isset($_POST['staff_name4'])) {
    $staff = $_POST['staff_name4'];
  }
  if($staff != get_post_meta($post_id, 'staff_name4', true)) {
    update_post_meta($post_id, 'staff_name4', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_name4', get_post_meta($post_id, 'staff_name4', true));
  }

  //staff_position4
  if(isset($_POST['staff_position4'])) {
    $staff = $_POST['staff_position4'];
  }
  if($staff != get_post_meta($post_id, 'staff_position4', true)) {
    update_post_meta($post_id, 'staff_position4', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_position4', get_post_meta($post_id, 'staff_position4', true));
  }

  //staff_about4
  if(isset($_POST['staff_about4'])) {
    $staff = $_POST['staff_about4'];
  }
  if($staff != get_post_meta($post_id, 'staff_about4', true)) {
    update_post_meta($post_id, 'staff_about4', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_about4', get_post_meta($post_id, 'staff_about4', true));
  }

  //staff_img4
  if(isset($_POST['staff_img4'])) {
    $staff = $_POST['staff_img4'];
  }
  if($staff != get_post_meta($post_id, 'staff_img4', true)) {
    update_post_meta($post_id, 'staff_img4', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_img4', get_post_meta($post_id, 'staff_img4', true));
  }

  //staff_name5
  if(isset($_POST['staff_name5'])) {
    $staff = $_POST['staff_name5'];
  }
  if($staff != get_post_meta($post_id, 'staff_name5', true)) {
    update_post_meta($post_id, 'staff_name5', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_name5', get_post_meta($post_id, 'staff_name5', true));
  }

  //staff_position5
  if(isset($_POST['staff_position5'])) {
    $staff = $_POST['staff_position5'];
  }
  if($staff != get_post_meta($post_id, 'staff_position5', true)) {
    update_post_meta($post_id, 'staff_position5', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_position5', get_post_meta($post_id, 'staff_position5', true));
  }

  //staff_about5
  if(isset($_POST['staff_about5'])) {
    $staff = $_POST['staff_about5'];
  }
  if($staff != get_post_meta($post_id, 'staff_about5', true)) {
    update_post_meta($post_id, 'staff_about5', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_about5', get_post_meta($post_id, 'staff_about5', true));
  }

  //staff_img5
  if(isset($_POST['staff_img5'])) {
    $staff = $_POST['staff_img5'];
  }
  if($staff != get_post_meta($post_id, 'staff_img5', true)) {
    update_post_meta($post_id, 'staff_img5', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_img5', get_post_meta($post_id, 'staff_img5', true));
  }

  //staff_name6
  if(isset($_POST['staff_name6'])) {
    $staff = $_POST['staff_name6'];
  }
  if($staff != get_post_meta($post_id, 'staff_name6', true)) {
    update_post_meta($post_id, 'staff_name6', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_name6', get_post_meta($post_id, 'staff_name6', true));
  }

  //staff_position6
  if(isset($_POST['staff_position6'])) {
    $staff = $_POST['staff_position6'];
  }
  if($staff != get_post_meta($post_id, 'staff_position6', true)) {
    update_post_meta($post_id, 'staff_position6', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_position6', get_post_meta($post_id, 'staff_position6', true));
  }

  //staff_about6
  if(isset($_POST['staff_about6'])) {
    $staff = $_POST['staff_about6'];
  }
  if($staff != get_post_meta($post_id, 'staff_about6', true)) {
    update_post_meta($post_id, 'staff_about6', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_about6', get_post_meta($post_id, 'staff_about6', true));
  }

  //staff_img6
  if(isset($_POST['staff_img6'])) {
    $staff = $_POST['staff_img6'];
  }
  if($staff != get_post_meta($post_id, 'staff_img6', true)) {
    update_post_meta($post_id, 'staff_img6', $staff);
  } elseif($staff == '') {
    delete_post_meta($post_id, 'staff_img6', get_post_meta($post_id, 'staff_img6', true));
  }
  //about------------------------------------
  //トップページ以外のmsgや画像
  //about_img1
  if(isset($_POST['about_img1'])) {
    $other_about = $_POST['about_img1'];
  }
  if($other_about != get_post_meta($post_id, 'about_img1', true)) {
    update_post_meta($post_id, 'about_img1', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_img1', get_post_meta($post_id, 'about_img1', true));
  }

  //about_msg1
  if(isset($_POST['about_msg1'])) {
    $other_about = $_POST['about_msg1'];
  }
  if($other_about != get_post_meta($post_id, 'about_msg1', true)) {
    update_post_meta($post_id, 'about_msg1', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_msg1', get_post_meta($post_id, 'about_msg1', true));
  }
  //about_title1
  if(isset($_POST['about_title1'])) {
    $other_about = $_POST['about_title1'];
  }
  if($other_about != get_post_meta($post_id, 'about_title1', true)) {
    update_post_meta($post_id, 'about_title1', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_title1', get_post_meta($post_id, 'about_title1', true));
  }
  //about_msg2
  if(isset($_POST['about_msg2'])) {
    $other_about = $_POST['about_msg2'];
  }
  if($other_about != get_post_meta($post_id, 'about_msg2', true)) {
    update_post_meta($post_id, 'about_msg2', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_msg2', get_post_meta($post_id, 'about_msg2', true));
  }
  //about_title2
  if(isset($_POST['about_title2'])) {
    $other_about = $_POST['about_title2'];
  }
  if($other_about != get_post_meta($post_id, 'about_title2', true)) {
    update_post_meta($post_id, 'about_title2', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_title2', get_post_meta($post_id, 'about_title2', true));
  }
  //about_msg3_1
  if(isset($_POST['about_msg3_1'])) {
    $other_about = $_POST['about_msg3_1'];
  }
  if($other_about != get_post_meta($post_id, 'about_msg3_1', true)) {
    update_post_meta($post_id, 'about_msg3_1', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_msg3_1', get_post_meta($post_id, 'about_msg3_1', true));
  }
  //about_msg3_2
  if(isset($_POST['about_msg3_2'])) {
    $other_about = $_POST['about_msg3_2'];
  }
  if($other_about != get_post_meta($post_id, 'about_msg3_2', true)) {
    update_post_meta($post_id, 'about_msg3_2', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_msg3_2', get_post_meta($post_id, 'about_msg3_2', true));
  }

  //about_title3
  if(isset($_POST['about_title3'])) {
    $other_about = $_POST['about_title3'];
  }
  if($other_about != get_post_meta($post_id, 'about_title3', true)) {
    update_post_meta($post_id, 'about_title3', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_title3', get_post_meta($post_id, 'about_title3', true));
  }
  //about_msg4
  if(isset($_POST['about_msg4'])) {
    $other_about = $_POST['about_msg4'];
  }
  if($other_about != get_post_meta($post_id, 'about_msg4', true)) {
    update_post_meta($post_id, 'about_msg4', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_msg4', get_post_meta($post_id, 'about_msg4', true));
  }
  //about_title4
  if(isset($_POST['about_title4'])) {
    $other_about = $_POST['about_title4'];
  }
  if($other_about != get_post_meta($post_id, 'about_title4', true)) {
    update_post_meta($post_id, 'about_title4', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_title4', get_post_meta($post_id, 'about_title4', true));
  }
  //about_msg5
  if(isset($_POST['about_msg5'])) {
    $other_about = $_POST['about_msg5'];
  }
  if($other_about != get_post_meta($post_id, 'about_msg5', true)) {
    update_post_meta($post_id, 'about_msg5', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_msg5', get_post_meta($post_id, 'about_msg5', true));
  }
  //about_title5
  if(isset($_POST['about_title5'])) {
    $other_about = $_POST['about_title5'];
  }
  if($other_about != get_post_meta($post_id, 'about_title5', true)) {
    update_post_meta($post_id, 'about_title5', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'about_title5', get_post_meta($post_id, 'about_title5', true));
  }
  //subtitle_en
  if(isset($_POST['subtitle_en'])) {
    $other_about = $_POST['subtitle_en'];
  }
  if($other_about != get_post_meta($post_id, 'subtitle_en', true)) {
    update_post_meta($post_id, 'subtitle_en', $other_about);
  } elseif($other_about == '') {
    delete_post_meta($post_id, 'subtitle_en', get_post_meta($post_id, 'subtitle_en', true));
  }



  //about_map------------------------------------
  if(isset($_POST['about_map'])) {
    $iframe = $_POST['about_map'];
  }
  if($iframe != get_post_meta($post_id, 'about_map', true)) {
    update_post_meta($post_id, 'about_map', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'about_map', get_post_meta($post_id, 'about_map', true));
  }

  //flow------------------------------------
  //flow_title1
  if(isset($_POST['flow_title1'])) {
    $iframe = $_POST['flow_title1'];
  }
  if($iframe != get_post_meta($post_id, 'flow_title1', true)) {
    update_post_meta($post_id, 'flow_title1', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'flow_title1', get_post_meta($post_id, 'flow_title1', true));
  }
  //flow_msg1
  if(isset($_POST['flow_msg1'])) {
    $iframe = $_POST['flow_msg1'];
  }
  if($iframe != get_post_meta($post_id, 'flow_msg1', true)) {
    update_post_meta($post_id, 'flow_msg1', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'flow_msg1', get_post_meta($post_id, 'flow_msg1', true));
  }
  //flow_title2
  if(isset($_POST['flow_title2'])) {
    $iframe = $_POST['flow_title2'];
  }
  if($iframe != get_post_meta($post_id, 'flow_title2', true)) {
    update_post_meta($post_id, 'flow_title2', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'flow_title2', get_post_meta($post_id, 'flow_title2', true));
  }
  //flow_msg2
  if(isset($_POST['flow_msg2'])) {
    $iframe = $_POST['flow_msg2'];
  }
  if($iframe != get_post_meta($post_id, 'flow_msg2', true)) {
    update_post_meta($post_id, 'flow_msg2', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'flow_msg2', get_post_meta($post_id, 'flow_msg2', true));
  }
  //flow_title3
  if(isset($_POST['flow_title3'])) {
    $iframe = $_POST['flow_title3'];
  }
  if($iframe != get_post_meta($post_id, 'flow_title3', true)) {
    update_post_meta($post_id, 'flow_title3', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'flow_title3', get_post_meta($post_id, 'flow_title3', true));
  }
  //flow_msg3
  if(isset($_POST['flow_msg3'])) {
    $iframe = $_POST['flow_msg3'];
  }
  if($iframe != get_post_meta($post_id, 'flow_msg3', true)) {
    update_post_meta($post_id, 'flow_msg3', $iframe);
  } elseif($iframe == '') {
    delete_post_meta($post_id, 'flow_msg3', get_post_meta($post_id, 'flow_msg3', true));
  }

  //feature------------------------------------
  //feature_title1
  if(isset($_POST['feature_title1'])) {
    $feature = $_POST['feature_title1'];
  }
  if($feature != get_post_meta($post_id, 'feature_title1', true)) {
    update_post_meta($post_id, 'feature_title1', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_title1', get_post_meta($post_id, 'feature_title1', true));
  }
  //feature_msg1
  if(isset($_POST['feature_msg1'])) {
    $feature = $_POST['feature_msg1'];
  }
  if($feature != get_post_meta($post_id, 'feature_msg1', true)) {
    update_post_meta($post_id, 'feature_msg1', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_msg1', get_post_meta($post_id, 'feature_msg1', true));
  }
  //feature_img1
  if(isset($_POST['feature_img1'])) {
    $feature = $_POST['feature_img1'];
  }
  if($feature != get_post_meta($post_id, 'feature_img1', true)) {
    update_post_meta($post_id, 'feature_img1', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_img1', get_post_meta($post_id, 'feature_img1', true));
  }
  //feature_title2
  if(isset($_POST['feature_title2'])) {
    $feature = $_POST['feature_title2'];
  }
  if($feature != get_post_meta($post_id, 'feature_title2', true)) {
    update_post_meta($post_id, 'feature_title2', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_title2', get_post_meta($post_id, 'feature_title2', true));
  }
  //feature_msg2
  if(isset($_POST['feature_msg2'])) {
    $feature = $_POST['feature_msg2'];
  }
  if($feature != get_post_meta($post_id, 'feature_msg2', true)) {
    update_post_meta($post_id, 'feature_msg2', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_msg2', get_post_meta($post_id, 'feature_msg2', true));
  }
  //feature_img2
  if(isset($_POST['feature_img2'])) {
    $feature = $_POST['feature_img2'];
  }
  if($feature != get_post_meta($post_id, 'feature_img2', true)) {
    update_post_meta($post_id, 'feature_img2', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_img2', get_post_meta($post_id, 'feature_img2', true));
  }
  //feature_title3
  if(isset($_POST['feature_title3'])) {
    $feature = $_POST['feature_title3'];
  }
  if($feature != get_post_meta($post_id, 'feature_title3', true)) {
    update_post_meta($post_id, 'feature_title3', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_title3', get_post_meta($post_id, 'feature_title3', true));
  }
  //feature_msg3
  if(isset($_POST['feature_msg3'])) {
    $feature = $_POST['feature_msg3'];
  }
  if($feature != get_post_meta($post_id, 'feature_msg3', true)) {
    update_post_meta($post_id, 'feature_msg3', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_msg3', get_post_meta($post_id, 'feature_msg3', true));
  }
  //feature_img3
  if(isset($_POST['feature_img3'])) {
    $feature = $_POST['feature_img3'];
  }
  if($feature != get_post_meta($post_id, 'feature_img3', true)) {
    update_post_meta($post_id, 'feature_img3', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'feature_img3', get_post_meta($post_id, 'feature_img3', true));
  }
  //homeMv------------------------------------
  //homeMv_ja
  if(isset($_POST['homeMv_ja'])) {
    $feature = $_POST['homeMv_ja'];
  }
  if($feature != get_post_meta($post_id, 'homeMv_ja', true)) {
    update_post_meta($post_id, 'homeMv_ja', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'homeMv_ja', get_post_meta($post_id, 'homeMv_ja', true));
  }
  //homeMv_en
  if(isset($_POST['homeMv_en'])) {
    $feature = $_POST['homeMv_en'];
  }
  if($feature != get_post_meta($post_id, 'homeMv_en', true)) {
    update_post_meta($post_id, 'homeMv_en', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'homeMv_en', get_post_meta($post_id, 'homeMv_en', true));
  }
  //homeMv
  if(isset($_POST['homeMv'])) {
    $feature = $_POST['homeMv'];
  }
  if($feature != get_post_meta($post_id, 'homeMv', true)) {
    update_post_meta($post_id, 'homeMv', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'homeMv', get_post_meta($post_id, 'homeMv', true));
  }

  //description------------------------------------
  // description
  if(isset($_POST['description'])) {
    $feature = $_POST['description'];
  }
  if($feature != get_post_meta($post_id, 'description', true)) {
    update_post_meta($post_id, 'description', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'description', get_post_meta($post_id, 'description', true));
  }
  // icon
  if(isset($_POST['icon'])) {
    $feature = $_POST['icon'];
  }
  if($feature != get_post_meta($post_id, 'icon', true)) {
    update_post_meta($post_id, 'icon', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'icon', get_post_meta($post_id, 'icon', true));
  }
  // thumbnail
  if(isset($_POST['thumbnail'])) {
    $feature = $_POST['thumbnail'];
  }
  if($feature != get_post_meta($post_id, 'thumbnail', true)) {
    update_post_meta($post_id, 'thumbnail', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'thumbnail', get_post_meta($post_id, 'thumbnail', true));
  }

  //sns------------------------------------
  // facebook
  if(isset($_POST['facebook'])) {
    $feature = $_POST['facebook'];
  }
  if($feature != get_post_meta($post_id, 'facebook', true)) {
    update_post_meta($post_id, 'facebook', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'facebook', get_post_meta($post_id, 'facebook', true));
  }
  // instagram
  if(isset($_POST['instagram'])) {
    $feature = $_POST['instagram'];
  }
  if($feature != get_post_meta($post_id, 'instagram', true)) {
    update_post_meta($post_id, 'instagram', $feature);
  } elseif($feature == '') {
    delete_post_meta($post_id, 'instagram', get_post_meta($post_id, 'instagram', true));
  }




}




/* ====================
ページネーション
====================== */
function pagenation($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1; //表示するページ数(5ページを表示)

  global $paged; //現在のページ値
  if(empty($paged)) $paged = 1; //デフォルトのページ

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages; //全ページ数を取得
    if(!$pages) { //全ページ数が空の場合は,1とする
      $pages = 1;
    }
  }

  if(1 != $pages) { //全ページが1でない場合はページネーションを表示する
    echo "<ul class=\"pagenation\">\n";

    //prev: 現在のページ値が１より大きい場合は表示
    if ($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>prev</a></li>\n";

    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        // 三項演算子での条件分岐
        echo ($paged == $i) ? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
      }
    }
    // next: 総ページ数より現在のページ値が小さい場合は表示
    if ($paged < $pages) echo "<li class=\"next\"><a href='".get_pagenum_link($paged + 1)."'>next</a></li>\n";

    echo "</ul>\n";
  }
}

/* ====================
カスタム投稿タイプを追加
====================== */
add_action( 'init', 'create_post_type' );

function create_post_type() {
//実例
  register_post_type(
    'works',
    array(
      'label' => '実例',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'works-cat',
    'works',
    array(
      'label' => '実例カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'works-tag',
    'works',
    array(
      'label' => '実例タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
//ヘアスタイル
  register_post_type(
    'hair',
    array(
      'label' => 'ヘアスタイル',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'hair-cat',
    'hair',
    array(
      'label' => 'ヘアカテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'hair-tag',
    'hair',
    array(
      'label' => 'ヘアタグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );


}




/* ====================
カスタムウィジェット
====================== */
// ウィジェットエリアを作成する関数がどれなのかを登録する
add_action('widgets_init', 'my_widgets_area');

// ウィジェット事態の作成するクラスがどれなのかを登録する
//sidebarはウィジェット自体が既に作られているから、ウィジェットエリアだけを作れはok
//add_action('widget_init', create_function('', 'return register_widget("my_widgets_item1");'));
add_action('widget_init', function(){register_widget('my_widgets_item1');});

// ウィジェットエリアを作成する
function my_widgets_area() {

  register_sidebar(array(
    'name' => 'メリットエリア',
    'id' => 'widget_merit',
    'before_widget' => '<div>',
    'after_widget' => '</div>\n',
  ));

  register_sidebar(array( //register_sidebarを使って配列で情報を渡す
    'name' => 'my_sidebar',
    'id' => 'my_sidebar',
    'before_widget' => '<div class="blog_aside_cont">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="blog_aside_contTtl font_garamond">',
    'after_title' => '</h2>',
    'before_sidebar' => '<ul class="blog_aside_contList">', //ulにクラス追加
    'after_sidebar' => '</ul>',
  ));
}

// ウィジェット事態を作成する
class my_widgets_item1 extends wp_widget {

  //初期化(管理画面で表示するウィジェットの名前を設定する)
  function __construct() {
    parent::wp_widget(false, $name = 'メリットウィジェット');
  }

  // ウィジェットの入力項目を作成する処理
  function form($instance) {
    $title = esc_attr($instance['title']);
    $body = esc_attr($instance['body']);
?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">
        <?php echo 'タイトル:'; ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text"
      name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('body'); ?>">
        <?php echo '内容:'; ?>
      </label>
      <textarea class="widefat" id="<?php echo $this->get_field_id('body'); ?>" name="<?php echo $this->get_field_name('body'); ?>" rows="16" cols="20">
        <?php echo $body ?>
      </textarea>
    </p>
<?php
  }

  // ウィジェットに入力された情報を保持する処理
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']); //サニタイズ
    $instance['body'] = trim($new_instance['body']); //サニタイズ

    return $instance;
  }

  // 管理画面から入力されたウィジェットを画面に表示する処理
  function widget($args, $instance) {
    // 配列を変数に展開
    extract($args);

    // ウィジェットから入力された情報を取得
    $title = apply_filters('widget_title', $instance['title']);
    $bosy = apply_filters('widget_body', $instance['body']);

    // ウィジェットから入力された情報がある場合,htmlを表示する
    if($title) {
?>
    <section class="panel">
        <h2><?php echo $title; ?></h2>
        <p>
          <?php echo $body; ?>
        </p>
    </section>
<?php
    }
  }
}
?>
