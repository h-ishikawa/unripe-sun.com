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
<meta name="robots" content="noindex, nofollow">
<meta name="author" content="">
<title><?= @$settings->title ?> - Cust</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="/public/stylesheets/common.css">
<? if (!empty($settings->stylesheets[0])): ?>
<? foreach (@$settings->stylesheets as $stylesheet): ?>
<link rel="stylesheet" href="/public/stylesheets/<?= $stylesheet ?>.css" />
<? endforeach; ?>
<? endif; ?>

<? if (!empty($settings->scripts[0])): ?>
<? foreach (@$settings->scripts as $script): ?>
<script src="/public/javascripts/<?= $script ?>.js"></script>
<? endforeach; ?>
<? endif; ?>
</head>

<body class="<?= $request->separatePath ?: 'home' ?>">
<header>
  <div class="container">
    <?php require_once(dirname(__FILE__) . '/../templates/partials/signin/header.php'); ?>
  </div>
</header>

<article>
  <div class="container">
    <?= $content ?>
  </div>
</article>
</body>
</html>
