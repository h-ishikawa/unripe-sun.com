<?php

require(dirname(__FILE__) . '/../vendor/autoload.php');

$app = new App();
$request = $app->request();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="content-language" content="ja">
<meta charset="UTF-8">
<meta name="keywords" content="<?= @$settings->keywords ?>">
<meta name="description" content="<?= @$settings->description ?>">
<meta name="viewport" content="width=device-width initial-scale=1.0" />
<link rel="icon" href="/public/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/public/images/iphone.jpg"> 
<meta name="robots" content="noindex, nofollow">
<meta name="author" content="">
<title><?= @$settings->title ?> - Unripe</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="/public/stylesheets/common.css">
<link rel="stylesheet" href="/public/stylesheets/lightbox.css">
<? if (!empty($settings->stylesheets[0])): ?>
<? foreach ($settings->stylesheets as $stylesheet): ?>
<link rel="stylesheet" href="/public/stylesheets/<?= $stylesheet ?>.css" />
<? endforeach; ?>
<? endif; ?>

<? if (!empty($settings->scripts[0])): ?>
<? foreach ($settings->scripts as $script): ?>
<script src="/public/javascripts/<?= $script ?>.js"></script>
<? endforeach; ?>
<? endif; ?>
<script type='text/javascript' src='/public/javascripts/jquery/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='/public/javascripts/jquery/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/public/javascripts/jquery/lightbox-2.6.min.js'></script>
<script type='text/javascript' src='/public/javascripts/unripe.js'></script>
<script type='text/javascript' src='/public/javascripts/unripe/index.js'></script>
<script type='text/javascript' src='/public/javascripts/unripe/scroll.js'></script>
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

<body class="<?= $request->separatePath ?: 'home' ?>">
  <div class="header">
    <div id="header" class="container">
      <? if ($app->route == 'Index'): ?>
      <?php require_once(dirname(__FILE__) . '/../templates/partials/home/header.php'); ?>
      <? else: ?>
      <?php require_once(dirname(__FILE__) . '/../templates/partials/header.php'); ?>
      <? endif; ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <?php require_once(dirname(__FILE__) . '/../templates/partials/navigation.php'); ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
      <?= $content ?>
    </div>
  </div>

  <a class="pageTop" href="#header">PAGE TOP</a></p>

  <div class="footer">
    <div id="footer" class="container">
      <?php require_once(dirname(__FILE__) . '/../templates/partials/footer.php'); ?>
    </div>
  </div>
</body>
</html>
