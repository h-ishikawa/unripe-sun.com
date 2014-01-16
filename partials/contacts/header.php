<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/contacts/sakuma.png">
    </div><!--

 --><div class="panel description">
        <h2>お問い合わせ</h2>
        <p class="point">下のフォームからお気軽にお問い合わせください！</p>
    </div>
