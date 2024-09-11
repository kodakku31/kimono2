'use strict';

// エラーメッセージの表示機能
function errorElement(form, msg) {
  form.className = "error-form"; //入力欄のクラス名を”error-form”に
  const newElement = document.createElement("div"); //新たにdiv要素を作成
  newElement.className = "error"; //div要素のクラス名を”error” に
  const newText = document.createTextNode(msg); //エラーメッセージのテキストを代入
  newElement.appendchild(newText); //div要素の中にエラーメッセージを挿入
  form.parentNode.insertBefore(newElement, form.next.nextSibling); //エラーメッセージをformの後ろに表示

}

// エラーメッセージのクリア機能
function removeElementByClass(className) {
  const elements = document.getElementsByClassName(className); //該当するクラス名を持つ要素を取得
  while (elements.length > 0) { //配列elementsの要素が１つ以上ある限り
    elements[0].parentNode.removeChild(elements[0]); //先頭の要素を削除する
  }
}

function removeClass(className) {
  const elements = document.getElementsByClassName(className); //該当するクラス名を持つ要素を取得
  while (elements.length > 0) { //配列elementsの要素が1つ以上ある限り
    elements[0].className = ""; //先頭のクラス名を削除する
  }
}

// メールアドレスの形式チェック

function validateMail(email) {
  if (email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/) == null) { //match関数は形式に合わない場合、nulllを返す
    return true;
  } else {
    return false;
  }
}

// バリデーション
function validate() {
  let flag = true; //フラグのデフォルトはtrue
  removeElementByClass("error"); //エラーメッセージの削除
  removeClass("error-form"); //class＝"erro-message"を取り除く

  // お名前の入力をチェック
  if (document.form.name.value == "") {
    errorElement(document.form.name, "※お名前が入力されていません");
    flag = false;
  }

  // メールアドレスの入力をチェック
  if (document.form.email.value == "") {
    errorElement(document.form.email, "※メールアドレスが入力されていません");
    flag = false;
  } else if (validateMail(document.form.email.value)) {
    // メールアドレスの形式をチェック
    errorElement(document.form.email, "※メールアドレスが正しくありません");
    flag = false;
  }

  // お問い合わせ内容を入力チェック
  if (document.form.message.value == "") {
    errorElement(document.form.message, "※メッセージが入力されていません");
    flag = false;
  } else if (document.form.message.value.length > 200) {
    // 200文字以下で入力れているかチェック
    errorElement(document.form.message, "※メッセージは200文字以下で入力してください");
    flag = false;
  }

  //電話番号入力チェック
  if (document.form.message.value == "") {
    errorElement(document.form.tel, "※電話番号が入力されていません");
    flag = false;
  } else if (document.form.tel > 30) { ////＊後で変更する
    //30文字以下で入力されているかチェック
    errorElement(document.form.tel, "電話番号は30文字以下で入力してください");
    flag = false;
  }

  //radioボタンチェック
  if ($('[name="type"]:checked').length == 0) {
    errorElement(document.form.type, "選択されていません");
    flag = false;
  }

  //checkboxのチェック
  if ($('[name="checkbox"]:checked').length == 0) {
    errorElement(document.form.checked, "１つ以上選択してください");
    flag = false;
  }


  return flag;
}
