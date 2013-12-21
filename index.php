<?php

require_once (dirname(__FILE__).'/lib/Model_Tweet.php');
require_once (dirname(__FILE__).'/lib/Model/Tweet.php');

$queries = array();
$queries['stuff'] = '1';
$queries['order'] = 'created_at ASC';
$Tweet_tomori = new Tweet();
$Tweet_tomori->get($queries);

$queries['stuff'] = '2';
$Tweet_koike = new Tweet();
$Tweet_koike->get($queries);

$queries['stuff'] = '3';
$Tweet_yoshino = new Tweet();
$Tweet_yoshino->get($queries);

$queries['stuff'] = '4';
$Tweet_enomoto = new Tweet();
$Tweet_enomoto->get($queries);

$queries['stuff'] = '5';
$Tweet_sakuma = new Tweet();
$Tweet_sakuma->get($queries);

$queries['stuff'] = '6';
$Tweet_shimizu = new Tweet();
$Tweet_shimizu->get($queries);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Unripe| top</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="viewport" content="width=device-width initial-scale=1.0" />
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/images/iphone.jpg"> 
<link type="text/css" rel="stylesheet" href="/stylesheets/common.css" media="all" charset="utf-8">
<script type='text/javascript' src='/javascripts/jquery/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/javascripts/jquery/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/javascripts/unripe.js'></script>
<script type='text/javascript' src='/javascripts/unripe/index.js'></script>
</head>
<body class="home">
  <div class="header">
    <div id="header" class="container">
      <? require_once('partials/home/header.php') ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <? require_once('partials/navigation.php') ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
      <a class="pageTop" href="#header">PAGE TOP</a></p>
    </div>
  </div>

  <div class="footer">
    <div id="footer" class="container">
      <? require_once('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
