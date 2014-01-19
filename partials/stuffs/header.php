<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/stuffs/stuff.png">
    </div><!--

 --><div class="panel description">
        <h2>スタッフ</h2>
        <p class="point">Unripeでは、お客様と話し合いながらヘアスタイルを考えていきます。<br>リラックスして気軽にお話をする中で一緒に決めていきましょう。</p>
    </div>
