<?php

session_start();

$session = $_SESSION;
$name = htmlspecialchars(@$session['name']);
$address = htmlspecialchars(@$session['address']);
$email = htmlspecialchars(@$session['email']);
$confirm_email = htmlspecialchars(@$session['confirm_email']);
$tel = htmlspecialchars(@$session['tel']);
$description = htmlspecialchars(@$session['description']);

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Unripe| お問い合わせ</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="viewport" content="width=device-width initial-scale=1.0" />
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/images/iphone.jpg"> 
<link type="text/css" rel="stylesheet" href="/stylesheets/common.css" media="all" charset="utf-8">
<script type='text/javascript' src='/javascripts/jquery/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='/javascripts/jquery/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/javascripts/unripe.js'></script>
<script type='text/javascript' src='/javascripts/unripe/index.js'></script>
<script type='text/javascript' src='/javascripts/unripe/scroll.js'></script>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=337089699705595";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</head>
<body class="contacts">
  <div class="header">
    <div id="header" class="container">
      <? require_once('../partials/contacts/header.php') ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <? require_once('../partials/navigation.php') ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
      <form action="post.php" method="post">
        <div class="<?= @$session['error']->name ?>">
          <p>お名前<span>(必須)</span>：</p>
          <input placeholder="全角でご入力ください。" class="name" type="text" name="name" size="50" maxlength="20" value="<?= @$name ?>" />
          <span class="error is-empty">ご入力お願いいたします。</span>
        </div>

        <div>
          <p>ご住所：</p>
          <input placeholder="全角でご入力ください。" class="address" type="text" name="address" size="70" maxlength="50" value="<?= @$address ?>" />
        </div>

        <div class="<?= @$session['error']->email ?>">
          <p>E-mailアドレス<span>(必須)</span>：</p>
          <input placeholder="半角英数字でご入力ください。" class="email" type="text" name="email" size="50" maxlength="50" value="<?= @$email ?>" />
          <span class="error is-empty">ご入力お願いいたします。</span>
          <span class="error incorrect">このメールアドレスは無効です。</span>
        </div>

        <div class="<?= @$session['error']->confirm_email ?>">
          <p>E-mailアドレス確認用<span>(必須)</span>：</p>
          <input placeholder="半角英数字でご入力ください。" class="confirm_email" type="text" name="confirm_email" size="50" maxlength="100" value="<?= @$confirm_email ?>" />
          <span class="error is-empty">ご入力お願いいたします。</span>
          <span class="error incorrect">E-mailが一致していません。</span>
        </div>

        <div class="<?= @$session['error']->tel ?>">
          <p>電話番号：</p>
          <input placeholder="半角数字ハイフン無しでご入力ください。" class="tel" type="text" name="tel" size="50" maxlength="20" value="<?= @$tel ?>" />
          <span class="error incorrect">電話番号は半角数値のみをご入力ください。</span>
        </div>

        <div class="<?= @$session['error']->description ?>">
          <p>お問い合わせ内容<span>(必須)</span>：</p>
          <textarea placeholder="お問い合わせ内容をご入力ください。" class="description" name="description" rows="10" cols="70"><?= @$description ?></textarea>
          <span class="error is-empty">ご入力お願いいたします。</span>
          <span class="error incorrect">文字数がオーバーしています（800文字まで）。</span>
        </div>

        <input class="submit" type="submit" value="内容を確認する" />
        <input type="reset" value="リセット" />
      </form>
    </div>    
  </div>
  
  <a class="pageTop" href="#header">PAGE TOP</a></p>

  <div class="footer">
    <div id="footer" class="container">
      <? require_once('../partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
