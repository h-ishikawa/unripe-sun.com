<?php
require_once (dirname(__FILE__).'/../lib/Model/Snap.php');

$Snap = new Snap();
$Snap->get(array());
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Unripe| スナップ写真一覧</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="viewport" content="width=device-width initial-scale=1.0" />
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/images/iphone.jpg"> 
<link type="text/css" rel="stylesheet" href="/stylesheets/common.css" media="all" charset="utf-8">
<link type="text/css" rel="stylesheet" href="/stylesheets/lightbox.css" media="all" charset="utf-8">
<script type='text/javascript' src='/javascripts/jquery/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='/javascripts/jquery/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/javascripts/jquery/lightbox-2.6.min.js'></script>
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
<body class="galleries">
  <div class="header">
    <div id="header" class="container">
      <? require_once('../partials/galleries/header.php') ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <? require_once('../partials/navigation.php') ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
      <? foreach ($Snap->result as $result): ?>
      <a class="panel" href="/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?>
        <br>
        Stuff: 
        <? if ($result->stuff == 1): ?>
          戸森
        <? elseif ($result->stuff == 2): ?>
          小池
        <? elseif ($result->stuff == 3): ?>
          吉野
        <? elseif ($result->stuff == 4): ?>
          榎本
        <? elseif ($result->stuff == 5): ?>
          佐久間
        <? elseif ($result->stuff == 6): ?>
          清水
        <? endif; ?>
        <br>
        Comment: <?= $result->memo ?>
      ">
        <img src="/images/uploads/thumbnails/<?= $result->file_path ?>" width="220px">
        <p>Name: <?= $result->name ?></p>
        <p>Stuff: 
        <? if ($result->stuff == 1): ?>
          戸森
        <? elseif ($result->stuff == 2): ?>
          小池
        <? elseif ($result->stuff == 3): ?>
          吉野
        <? elseif ($result->stuff == 4): ?>
          榎本
        <? elseif ($result->stuff == 5): ?>
          佐久間
        <? elseif ($result->stuff == 6): ?>
          清水
        <? endif; ?>
        </p>
        <p>Comment: <?= $result->memo ?></p>
      </a>
      <? endforeach; ?>
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
