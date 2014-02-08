<h1 onclick="Javascript: location.href='/'">Unripe</h1>

<a class="stuff tomori"  href="/news"></a>
<a class="stuff koike"   href="/menus"></a>
<a class="stuff yoshino" href="/stuffs"></a>
<a class="stuff enomoto" href="/hair-meisters"></a>
<a class="stuff sakuma"  href="/goods"></a>
<a class="stuff shimizu" href="galleries"></a>

<? while ($result = $option[0]->fetchObject()): ?>
  <? if ($result->stuff == 1): ?>
  <p class="tweet tomori"><?= $result->tweet; ?></p>

  <? elseif ($result->stuff == 2): ?>
  <p class="tweet koike"><?= $result->tweet; ?></p>

  <? elseif ($result->stuff == 3): ?>
  <p class="tweet yoshino"><?= $result->tweet; ?></p>

  <? elseif ($result->stuff == 4): ?>
  <p class="tweet enomoto"><?= $result->tweet; ?></p>

  <? elseif ($result->stuff == 5): ?>
  <p class="tweet sakuma"><?= $result->tweet; ?></p>

  <? elseif ($result->stuff == 6): ?>
  <p class="tweet shimizu"><?= $result->tweet; ?></p>

  <? endif; ?>
<? endwhile; ?>
