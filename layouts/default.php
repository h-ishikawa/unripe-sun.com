<?php

require(dirname(__FILE__) . '/../vendor/autoload.php');

$app = new App();
$request = $app->request();
?>

<!doctype html>
<html>
<head>
<meta name="google-site-verification" content="GtyAKOs87DCFtW5HzxTQAB-PMWUTzdSmP5KZi-P5F-s" />
<meta http-equiv="content-language" content="ja">
<meta charset="UTF-8">
<meta name="keywords" content="<?= @$settings->keywords ?>">
<meta name="description" content="<?= @$settings->description ?>">
<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/public/images/iphone.jpg"> 
<meta name="author" content="">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=1024px">
<title><?= @$settings->title ?> - Unripe（横浜の東急東横線反町駅そばの美容室）</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="/public/stylesheets/common.css">
<link rel="stylesheet" href="/public/stylesheets/lightbox.css">
<link rel="stylesheet" href="/public/javascripts/mobile-menu/styles.css">
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
<script type='text/javascript' src='/public/javascripts/mobile-menu/jquery.mobile-menu.js'></script>

<script>
  $(function(){
    $("body").mobile_menu({
      menu: ['#main-nav ul'],
      menu_width: 200,
      prepend_button_to: '#mobile-bar'
    });
  });
</script>

<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=337089699705595";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30871822-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body class="<?= $request->separatePath ?: 'home' ?>">
  <div class="header">
    <nav id="mobile-bar"></nav>
    <nav id="main-nav">
      <ul>
        <li><a href="/"          class="home">top</a></li>
        <li><a href="/news"      class="news">news</a></li>
        <li><a href="/menus"     class="menus">menu</a></li>
        <li><a href="/staffs"    class="staffs">staff</a></li>
        <li><a href="/meisters"  class="meisters">hair meister</a></li>
        <li><a href="/goods"     class="goods">products</a></li>
        <li><a href="/galleries" class="galleries">gallery</a></li>
        <li><a href="/accesses"  class="accesses">access</a></li>
        <li><a href="/recruits"  class="recruits">recruit</a></li>
        <li><a href="/contacts"  class="contacts">contact</a></li>
        <li><a href="http://unripe-sun.blogspot.jp"  class="panel" target="_blank">blog</a></li>
      </ul>
    </nav>
    
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

  <!-- top only -->
  <? if (!$request->separatePath): ?>
  <div class="snaps">
    <div id="snaps" class="container">
      <div class="panel themes">
        <h3><strong>Unripe</strong>にいらっしゃってくれた方々の<em>ヘアデザインスナップ</em>。</h3>
        <p>スタイリングの参考に。<br>
           ヘアカタログの代わりにも。<br>
           <strong>Unripe</strong>で生まれたスタイリングを是非ご覧ください。
        </p>
        <a href="/galleries">View more hair styles</a>
      </div><!--

   --><div class="panel slider">
        <!--
          <? while ($result = $option[3]->fetchObject()): ?>
          --><a class="panel" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?>
               <br>
               Staff: 
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
              <img src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" title="クリックで拡大">
            </a><!--
          <? endwhile; ?>
        -->
      </div>

      <a class="next" href="javascript: unripe.index.carousel.next();"></a>
      <a class="prev" href="javascript: unripe.index.carousel.prev();"></a>
    </div>
  </div>
  <? endif; ?>
  <!-- top only -->

  <a class="pageTop" href="#header">PAGE TOP</a></p>

  <div class="footer">
    <div id="footer" class="container">
      <?php require_once(dirname(__FILE__) . '/../templates/partials/footer.php'); ?>
    </div>
  </div>
</body>
</html>
