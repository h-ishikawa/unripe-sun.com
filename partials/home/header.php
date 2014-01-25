<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

<h1 onclick="Javascript: location.href='/'">Unripe</h1>

<a class="stuff tomori"  href="/news"></a>
<a class="stuff koike"   href="/menus"></a>
<a class="stuff yoshino" href="/stuffs"></a>
<a class="stuff enomoto" href="/hair-meisters"></a>
<a class="stuff sakuma"  href="/goods"></a>
<a class="stuff shimizu" href="galleries"></a>

<? foreach ($Tweet_tomori->result as $result): ?>
  <p class="tweet tomori"><?= $result->tweet; ?></p>
<? endforeach; ?>

<? foreach ($Tweet_koike->result as $result): ?>
  <p class="tweet koike"><?= $result->tweet; ?></p>
<? endforeach; ?>

<? foreach ($Tweet_yoshino->result as $result): ?>
  <p class="tweet yoshino"><?= $result->tweet; ?></p>
<? endforeach; ?>

<? foreach ($Tweet_enomoto->result as $result): ?>
  <p class="tweet enomoto"><?= $result->tweet; ?></p>
<? endforeach; ?>

<? foreach ($Tweet_sakuma->result as $result): ?>
  <p class="tweet sakuma"><?= $result->tweet; ?></p>
<? endforeach; ?>

<? foreach ($Tweet_shimizu->result as $result): ?>
  <p class="tweet shimizu"><?= $result->tweet; ?></p>
<? endforeach; ?>
