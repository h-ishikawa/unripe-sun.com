<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/menus/menu.png">
    </div><!--

 --><div class="panel description">
        <h2>メニュー</h2>
        <p class="point">※あなたの大切なご家族、お友達をご紹介して頂いた方には<br />次回、全メニュー<span class="price-off">30%OFF</span>で施術させて頂きます。</p>
    </div>
