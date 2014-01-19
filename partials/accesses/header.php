<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/'">Unripe</h1>

    <div class="panel stuff">
        <img src="/images/accesses/accesses.png">
    </div><!--

 --><div class="panel description">
        <h2>アクセス</h2>
        <p class="point">皆様のお越しをお待ちしております。</p>
    </div>
