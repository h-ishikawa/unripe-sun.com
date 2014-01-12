<?php

require_once (dirname(__FILE__).'/lib/Model_Tweet.php');
require_once (dirname(__FILE__).'/lib/Model/Tweet.php');
require_once (dirname(__FILE__).'/lib/Model_Snap.php');
require_once (dirname(__FILE__).'/lib/Model/Snap.php');
require_once (dirname(__FILE__)."/lib/Model_Schedule.php");
require_once (dirname(__FILE__)."/lib/Model/Schedule.php");
require_once (dirname(__FILE__).'/applications/Calendar.php');

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

$Snap = new Snap();
$Snap->get(array());

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

    	<div class="panel">
    		<div>
    			<h2>Concept</h2>
    				<p>横浜の東急東横線、反町駅のすぐ近くにある美容室、<strong>unripe</strong>（<em>アンライプ</em>）。<br />
               店内は光溢れ、スタッフの手作りのはり金細工や絵が飾られていて、とても<em>アットホーム</em>な雰囲気です。 <br />
               <em>オーガニックのシャンプー</em>や<em>トリートメント</em>製品も扱っています。<br />
               お客様とトコトン話ながら、一緒に<em>ヘアスタイル</em>を考えたいと思っています。<br />
               是非、<em>ヘアサロン</em><strong>unripe</strong>のComfortable Spaceに遊びに来て下さい！
            </p>
    		</div>   		
        <div class="panel news">
          <h3>NEWS</h3>
          <ul>
            <li class="title">2014年1月1日</li>
            <a href=""><li>新年の営業について</li></a>
            <li class="title">2014年1月15日</li>
            <a href=""><li>成人の日の予約について</li></a>
            <li class="title">2014年1月30日</li>
            <a href=""><li>新商品について</li></a>
          </ul>
        </div><!--

     --><div class="panel cut">
          <h3>カットメニュー</h3>
          <table>
          	<tbody>
          		<tr>
          			<th>メニュー</th>
          			<th>料金</th>
          		</tr>
          		<tr>
          			<td>カット</td>
          			<td>￥5,250-〜</td>
          		</tr>
          		<tr>
          			<td>トリートメント</td>
          			<td>￥3,675-〜</td>
          		</tr>
          		<tr>
          			<td>カラーリング</td>
          			<td>￥12,075-〜</td>
          		</tr>
          		<tr>
          			<td>カット&パーマ</td>
          			<td>￥12,600-〜</td>
          		</tr>
          		<tr>
          			<td>セットアップ</td>
          			<td>￥6,300-〜</td>
          		</tr>
          		<tr>
          			<td>前髪カット</td>
          			<td>￥1,050-〜</td>
          		</tr>
          	</tbody>
          </table>
          <p class="point">※店長・ディレクターカット・・・プラス￥525-<br />※オーナーカット・・・プラス￥1,050-<br />※ロング料金はかかりません。<br />※是非、あなたの大切なご家族、お友達をご紹介して頂いた方には<br />次回、全メニュー<span class="price-off">30%OFF</span>で施術させて頂きます。<img src="images/home/menu-details.png" alt="メニュー詳細ボタン" /></p>
        </div><!--

     --><div class="panel plan">
          <h3>小池のオススメプラン！</h3>
          <p>冬は乾燥の季節です。あなたの髪も乾燥していませんか？髪に保湿と潤いを与えて健康な髪を整えるサポートを致します。</p><p class="panel plan_img"><img src="images/home/test_img.jpg" alt="unripeプラン1" /><!--
          --><img src="images/home/test_img.jpg" alt="unripeプラン2" /></p>
        </div><!--

     --><div class="panel calendar">
          <h3>カレンダー</h3>
          <?= $Calendar->get() ?>

          <p>【 お休み 】</p>
          <p class="tomori"><span></span>戸森：
            <? foreach($holidays as $holiday): ?>
              <? if($holiday->stuff == 1): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p class="koike"><span></span>小池：
            <? foreach($holidays as $holiday): ?>
              <? if($holiday->stuff == 2): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p class="yoshino"><span></span>吉野：
            <? foreach($holidays as $holiday): ?>
              <? if($holiday->stuff == 3): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p class="enomoto"><span></span>榎本：
            <? foreach($holidays as $holiday): ?>
              <? if($holiday->stuff == 4): ?>
                <?= date("j", strtotime($holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>
        </div><!--

     --><div class="panel privilege">
          <h3>製品情報</h3>
          <p><img src="images/home/product01.jpg" alt="unripe製品1" /><img src="images/home/product02.jpg"／alt="unripe製品2" /><br />ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ<img src="images/home/menu-details.png" alt="メニュー詳細ボタン" /></p>
        </div>
    	</div><!--
    	
   --><div class="panel fb-like-box" data-href="https://www.facebook.com/pages/Unripe/209519589110505" data-height="600px" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>			

    </div>
  </div>

  <div class="snaps">
    <div id="snaps" class="container">
      <div class="panel themes">
        <h3><strong>Unripe</strong>にいらっしゃってくれた方々の<em>ヘアデザインスナップ</em>。</h3>
        <p>スタイリングの参考に。<br>
           ヘアカタログの代わりにも。<br>
           <strong>Unripe</strong>で生まれたスタイリングを是非ご覧ください。
        </p>
        <a href="">View more hair styles</a>
      </div><!--

   --><div class="panel slider">
        <!--
          <? foreach ($Snap->result as $result): ?>
          --><a class="panel" href="/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?>
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
              <img src="/images/uploads/thumbnails/<?= $result->file_path ?>" width="220" height="173">
            </a><!--
          <? endforeach; ?>
        -->
      </div>

      <a class="next" href="javascript: unripe.index.carousel.next();"></a>
      <a class="prev" href="javascript: unripe.index.carousel.prev();"></a>
    </div>
  </div>

  <a class="pageTop" href="#header">PAGE TOP</a></p>

  <div class="footer">
    <div id="footer" class="container">
      <? require_once('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
