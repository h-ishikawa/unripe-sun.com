<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/menus/yoshino.png">
    </div><!--

 --><div class="panel description">
        <h2>スナップ写真一覧</h2>
        <p class="point">当サロンのスタッフが担当したお客様のスナップ写真です。<br>スタイリングのご参考にご覧下さい！</p>
    </div>
