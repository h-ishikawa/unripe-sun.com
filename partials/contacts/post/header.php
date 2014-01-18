<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/contacts/sakuma.png">
    </div><!--

 --><div class="panel description">
        <h2>お問い合わせ　内容確認</h2>
        <p class="point">入力内容をご確認後、送信してください。</p>
    </div>
