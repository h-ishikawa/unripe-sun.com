<?php

//require_once (dirname(__FILE__).'/../lib/Model.php');
//require_once (dirname(__FILE__).'/../lib/Model/Information.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Unripe | 管理</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" rel="stylesheet" href="/stylesheets/common.css" media="all" charset="utf-8">
<link type="text/css" rel="stylesheet" href="/stylesheets/admins.css" media="all" charset="utf-8">
</head>
<body class="admins index">
  <div class="header container">
    <? require_once (dirname(__FILE__).'/../partials/admins/header.php'); ?>
  </div>

  <div class="contents container">
    <h2>つぶやき</h2>
    <a href="/admins/tweets"           >つぶやき管理ページへ</a>
    <h2>スナップ</h2>
    <a href="/admins/snaps"            >スナップ管理ページへ</a>
    <h2>スケジュール</h2>
    <a href="/admins/schedules"        >スケジュール管理ページへ</a>
  </div>
</body>
</html>
