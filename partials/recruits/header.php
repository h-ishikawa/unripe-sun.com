<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/recruits/recruit.png">
    </div><!--

 --><div class="panel description">
        <h2>求人募集</h2>
        <p class="point">あなたもUnripeで働きませんか？ご連絡をお待ちしています。</p>
    </div>
