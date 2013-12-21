<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

<h1 onclick="Javascript: location.href='/'">Unripe</h1>

<a class="stuff tomori"  href=""></a>
<a class="stuff koike"   href=""></a>
<a class="stuff yoshino" href=""></a>
<a class="stuff enomoto" href=""></a>
<a class="stuff sakuma"  href=""></a>
<a class="stuff shimizu" href=""></a>

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
