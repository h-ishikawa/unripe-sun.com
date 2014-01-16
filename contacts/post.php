<?php

$post = (object) $_POST;
$error = (object) array();

session_start();
$_SESSION = $_POST;
$_SESSION['error'] = $error;

/**
 * name
 */
if (empty($post->name) === true) {
    $error->name = 'is-empty';
}

/**
 * email
 */
if (empty($post->email) === true) {
    $error->email = 'is-empty';
}

else if (!preg_match('/^[a-zA-Z0-9_\.\-\+]+@[A-Za-z0-9_\.\-]+$/', $post->email)) {
    $error->email = 'incorrect';
}

/**
 * confirm_email
 */
if (empty($post->confirm_email) === true) {
    $error->confirm_email = 'is-empty';
}

else if ($post->email !== $post->confirm_email) {
    $error->confirm_email = 'incorrect';
}

/**
 * tel
 */
if (preg_match('/\D/', $post->tel)) {
    $error->tel = 'incorrect';
}

/**
 * description
 */
if (empty($post->description) === true) {
    $error->description = 'is-empty';
}

else if (mb_strlen($post->description, 'UTF-8') > 800) {
    $error->description = 'incorrect';
}

if ((array) $error) {
    header('Location: index.php');
    exit();
}

$name = htmlspecialchars($post->name, ENT_QUOTES);
$address = htmlspecialchars($post->address, ENT_QUOTES);
$email = htmlspecialchars($post->email, ENT_QUOTES);
$confirm_email = htmlspecialchars($post->confirm_email, ENT_QUOTES);
$tel = htmlspecialchars($post->tel, ENT_QUOTES);
$description = htmlspecialchars($post->description, ENT_QUOTES);
$token = sha1(uniqid(mt_rand(), true));

setcookie('ONETIMETOKEN', $token, time() + 1800, '/contacts/')

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Unripe| お問い合わせ内容確認</title>
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
      <? require_once('../partials/contacts/post/header.php') ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <? require_once('../partials/navigation.php') ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
      <p class="title">入力頂いた内容をご確認頂き、問題が無ければ送信下さい。</p>
      <p>お名前：<?= $name ?></p>
      <p>ご住所：<?= $address ?></p>
      <p>E-mailアドレス：<?= $email ?></p>
      <p>電話番号：<?= $tel ?></p>
      <p>お問い合わせ内容：<br><?= nl2br($description) ?></p>

      <form action="send/index.php" method="post">
        <input type="hidden" value="<?= $name ?>" name="name"/>
        <input type="hidden" value="<?= $address ?>" name="address"/>
        <input type="hidden" value="<?= $email ?>" name="email"/>
        <input type="hidden" value="<?= $tel ?>" name="tel"/>
        <input type="hidden" value="<?= $description ?>" name="description"/>
        <input type="hidden" value="<?= $token ?>" name="token"/>
        <input type="submit" value="送信する" />
        <input type="button" onclick="self.history.back()" value="入力画面に戻る" />
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
