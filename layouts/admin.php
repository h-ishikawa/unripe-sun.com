<?php

require(dirname(__FILE__) . '/../vendor/autoload.php');

$app = new App();
$request = $app->request();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Unripe | 管理</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" rel="stylesheet" href="/public/stylesheets/admins.css" media="all" charset="utf-8">
</head>
<body class="admins index">
  <div class="header container">
    <? require_once (dirname(__FILE__).'/../templates/partials/admins/header.php'); ?>
  </div>

  <div class="contents container">
    <?= $content ?>
  </div>
</body>
</html>
