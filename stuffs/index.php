<?php

require_once (dirname(__FILE__).'/../lib/Model/Tweet.php');
require_once (dirname(__FILE__).'/../lib/Model/Schedule.php');
require_once (dirname(__FILE__).'/../lib/Model/Snap.php');
require_once (dirname(__FILE__).'/../applications/Calendar.php');

$queries = array();
$queries['stuff'] = '1';
$Tweet_tomori = new Tweet();
$Tweet_tomori->getOne($queries);
$Snap_tomori = new Snap();
$Snap_tomori->get2($queries);

$queries['stuff'] = '2';
$Tweet_koike = new Tweet();
$Tweet_koike->getOne($queries);
$Snap_koike = new Snap();
$Snap_koike->get2($queries);

$queries['stuff'] = '3';
$Tweet_yoshino = new Tweet();
$Tweet_yoshino->getOne($queries);
$Snap_yoshino = new Snap();
$Snap_yoshino->get2($queries);

$queries['stuff'] = '4';
$Tweet_enomoto = new Tweet();
$Tweet_enomoto->getOne($queries);
$Snap_enomoto = new Snap();
$Snap_enomoto->get2($queries);

$queries['stuff'] = '5';
$Tweet_sakuma = new Tweet();
$Tweet_sakuma->getOne($queries);
$Snap_sakuma = new Snap();
$Snap_sakuma->get2($queries);

$queries['stuff'] = '6';
$Tweet_shimizu = new Tweet();
$Tweet_shimizu->getOne($queries);
$Snap_shimizu = new Snap();
$Snap_shimizu->get2($queries);

$Calendar = new Calendar();

$Schedule = new Schedule();
$Schedule->get(array());
foreach($Schedule->result as $result) {
  if (date("Yn") == date("Yn", strtotime($result->date))) {
    $holidays[] = $result;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Unripe| スタッフ</title>
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
<body class="stuffs">
  <div class="header">
    <div id="header" class="container">
      <? require_once('../partials/stuffs/header.php') ?>
    </div>
  </div>

  <div class="navigation">
    <div id="navigation" class="container">
      <? require_once('../partials/navigation.php') ?>
    </div>
  </div>

  <div class="contents">
    <div id="contents" class="container">
            
      
      <div class="panel m-detail">
          <h3>【Unripe代表】</h3>
          <p><img src="/images/stuffs/tomori.png" />
          </p>
        </div><!--

     --><div class="panel m-detail_s">
          <ul>
            <li>【戸森 賢一】 KENICHI TOMORI</li>
            <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
            <li>【今月の休み】
            <? foreach(@$holidays as $holiday): ?>
              <? if($holiday->stuff == 1): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
            </li>
            <li>【最近のつぶやき】
            <? foreach (@$Tweet_tomori->result as $result): ?>
              <?= $result->tweet; ?>
            <? endforeach; ?>
            </li>
            <li>【最新担当スナップ写真】
            <!--
            <? foreach (@$Snap_tomori->result as $result): ?>
         --><a class="panel" style="width:208px;" href="/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 戸森<br>Comment: <?= $result->memo ?>">
            <img style="display: block;margin: 0 auto;" src="/images/uploads/thumbnails/<?= $result->file_path ?>">
            </a><!--
            <? endforeach; ?>
            -->
            </li>
          </ul>
        </div><!--

     --><div class="panel m-detail_s">
          <ul>
            <li>【小池 宏徳】 HIRONORI KOIKE</li>
            <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
            </ul>
            <li>【今月の休み】
            <? foreach(@$holidays as $holiday): ?>
              <? if($holiday->stuff == 2): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
            </li>
            <li>【最近のつぶやき】
            <? foreach (@$Tweet_koike->result as $result): ?>
              <?= $result->tweet; ?>
            <? endforeach; ?>
            </li>
            <li>【最新担当スナップ写真】
            <!--
            <? foreach (@$Snap_koike->result as $result): ?>
         --><a class="panel" style="width:208px;" href="/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 小池<br>Comment: <?= $result->memo ?>">
            <img style="display: block;margin: 0 auto;" src="/images/uploads/thumbnails/<?= $result->file_path ?>">
            </a><!--
            <? endforeach; ?>
            -->
            </li>
        </div><!--

     --><div class="panel m-detail">
          <h3>【店長】</h3>
          <p><img src="/images/stuffs/koike.png" />
          </p>
        </div><!--

     --><div class="panel m-detail">
          <h3>【スタイリスト】</h3>
          <p><img src="/images/stuffs/yoshino.png" />
          </p>
        </div><!--

     --><div class="panel m-detail_s">
          <ul>
            <li>【吉野 憲太】 KENTA YOSHINO</li>
            <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
            <li>【今月の休み】
            <? foreach(@$holidays as $holiday): ?>
              <? if($holiday->stuff == 3): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
            </li>
            <li>【最近のつぶやき】
            <? foreach (@$Tweet_yoshino->result as $result): ?>
              <?= $result->tweet; ?>
            <? endforeach; ?>
            </li>
            <li>【最新担当スナップ写真】
            <!--
            <? foreach (@$Snap_yoshino->result as $result): ?>
         --><a class="panel" style="width:208px;" href="/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 吉野<br>Comment: <?= $result->memo ?>">
            <img style="display: block;margin: 0 auto;" src="/images/uploads/thumbnails/<?= $result->file_path ?>">
            </a><!--
            <? endforeach; ?>
            -->
            </li>
            </ul>
        </div><!--

     --><div class="panel m-detail_s">
          <ul>
            <li>【榎本 宮子】 MIYAKO ENOMOTO</li>
            <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
            <li>【今月の休み】
            <? foreach(@$holidays as $holiday): ?>
              <? if($holiday->stuff == 4): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
            </li>
            <li>【最近のつぶやき】
            <? foreach (@$Tweet_enomoto->result as $result): ?>
              <?= $result->tweet; ?>
            <? endforeach; ?>
            </li>
            <li>【最新担当スナップ写真】
            <!--
            <? foreach (@$Snap_enomoto->result as $result): ?>
         --><a class="panel" style="width:208px;" href="/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 榎本<br>Comment: <?= $result->memo ?>">
            <img style="display: block;margin: 0 auto;" src="/images/uploads/thumbnails/<?= $result->file_path ?>">
            </a><!--
            <? endforeach; ?>
            -->
            </li>
            </ul>
        </div><!--

     --><div class="panel m-detail">
          <h3>【スタイリスト】</h3>
          <p><img src="/images/stuffs/enomoto.png" />
          </p>
        </div><!--

     --><div class="panel m-detail">
          <h3>【スタイリスト】</h3>
          <p><img src="/images/stuffs/sakuma.png" />
          </p>
        </div><!--

     --><div class="panel m-detail_s">
          <ul>
            <li>【佐久間 聖子】 SEIKO SAKUMA</li>
            <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
            <li>【最近のつぶやき】
            <? foreach (@$Tweet_sakuma->result as $result): ?>
              <?= $result->tweet; ?>
            <? endforeach; ?>
            </li>
            </ul>
        </div><!--

     --><div class="panel m-detail_s">
          <ul>
            <li>【清水 圭太】 SHIMI</li>
            <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
            <li>【最近のつぶやき】
            <? foreach (@$Tweet_shimizu->result as $result): ?>
              <?= $result->tweet; ?>
            <? endforeach; ?>
            </li>
            </ul>
        </div><div class="panel m-detail">
          <h3>【スタイリスト】</h3>
          <p><img src="/images/stuffs/shimizu.png" />
          </p>
        </div>
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
