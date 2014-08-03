<?php

$settings = (object) array(
    'title' => 'サインイン'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('abc', 'cdf', 'ghi')
  , 'stylesheets' => array('abc', 'cdf', 'ghi')
);

?>

<form method="post" action="/admins/signin">
  <div class="is-empty incorrect">
    <p class="error <?= @$option[1]->email ?>">このメールアドレスは登録されていません。</p>
    <p class="error <?= @$option[1]->password ?>">メールアドレスかパスワードが間違っています。</p>
  </div>
  <p>メールアドレスとパスワードを入力してサインインしてください。</p>
  <div class="input">
    <span class="panel">メールアドレス</span><!--
 --><input class="panel" type="email" name="email" value="<?= @$option[0]->email ?>" required autofocus>
  </div>
  <div class="input">
    <span class="panel">パスワード</span><!--
 --><input class="panel" type="password" name="password" required pattern="^[0-9A-Za-z]+$">
  </div>
  <input type="submit" value="サインイン">
</form>
