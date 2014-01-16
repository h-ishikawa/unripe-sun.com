<?php
$post = (object) $_POST;
$postToken = $post->token;
$cookieToken = $_COOKIE['ONETIMETOKEN'];

session_start();
$_SESSION = array();

/**
 * token
 */
if(!isset($postToken) || !isset($cookieToken)) {
    setcookie('ONETIMETOKEN', '', time() - 3600, '/contacts/');
    header('HTTP/1.1 404 Not Found');
    return;
}

else if($postToken !== $cookieToken) {
    setcookie('ONETIMETOKEN', '', time() - 3600, '/contacts/');
    header('HTTP/1.1 404 Not Found');
    return;
}

setcookie('ONETIMETOKEN', '', time() - 3600, '/contacts/');

mb_language('ja');
mb_internal_encoding('UTF-8');

$to = 'sevens67@gmail.com';
$subject= 'サイトに問い合わせがありました。';
$bcc = "Bcc: ichicolo.com@gmail.com";

$name = 'お名前 : ' . $post->name;
$address = '住所 : ' . @$post->address;
$email = 'E-mailアドレス : ' . $post->email;
$tel = 'TEL : ' . @$post->tel;
$description = 'お問い合わせ内容 : ' . "\n" . preg_replace( '/<br \/>/', '', $post->description ) . "\n";
$bodyTextData = implode("\n\n", array($name, $address, $email, $tel, $description)); 

if (mail(
  $to
  , mb_encode_mimeheader($subject, 'ISO-2022-JP-MS')
  , mb_convert_encoding($bodyTextData, 'ISO-2022-JP-MS')
  , $bcc . "; Content-Type: text/html; charset=\"ISO-2022-JP\";\n"
  )) {
  $notification = 'success';

  /**
   * 返信
   */
  $replySubject = 'お問い合わせありがとうございます。';
  $description = 'お問い合わせ内容 : ' . "\n" . preg_replace( '/<br \/>/', '', $post->description ) . "\n" . 'このたびはお問い合わせいただき、誠にありがとうございます。' . "\n" . '改めてご連絡させていただきますので、今しばらくお待ちいただきますようよろしくお願いいたします。'. "\n";
  $bodyTextData = implode("\n\n", array($name, $address, $email, $tel, $description)); 

  mail(
    $post->email
    , mb_encode_mimeheader($replySubject, 'ISO-2022-JP-MS')
    , mb_convert_encoding($bodyTextData, 'ISO-2022-JP-MS')
    , "FROM:" . $to . "; Content-Type: text/html; charset=\"ISO-2022-JP\";\n"
    );
}

else {
  $notification = 'failed';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Unripe| 送信完了</title>
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
      <? require_once('../../partials/contacts/send/header.php') ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <? require_once('../../partials/navigation.php') ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
      <div class="<?= $notification ?> thanks">
        <p>お問い合わせを送信いたしました。</p>
        <p>このたびはお問い合わせいただき、誠にありがとうございました。</p>
      </div>

      <div class="<?= $notification ?> sorry">
        <p>お問い合わせの送信に失敗しました。</p>
        <p>お手数ですが、再度お試しください。</p>
      </div>

      <a class='back' href='/contacts'>お問い合わせページに戻る</a>
    </div>    
  </div>
  
  <a class="pageTop" href="#header">PAGE TOP</a></p>

  <div class="footer">
    <div id="footer" class="container">
      <? require_once('../../partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
