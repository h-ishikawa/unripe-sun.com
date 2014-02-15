<?php
$settings = (object) array(
    'title' => 'ニュース一覧'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
  , 'h2' => 'ニュース一覧'
  , 'point' => 'Unripeでの最新情報やお店についてのお知らせをお届けします。'
);
?>

<? while ($result = $option[0]->fetchObject()): ?>
<table class="<?= @++$i % 2 ? 'odd' : 'even' ?>">
  <tr>
    <td class="date"><?= $result->date ?></td>
    <td class="title"><?= $result->title ?></td>
  </tr>

  <tr>
    <? if (@$result->uri): ?>
    <td class="content" colspan="2"><a href="<?= @$result->uri ?>"><?= nl2br($result->content) ?></a></td>
    <? else: ?>
    <td class="content" colspan="2"><?= nl2br($result->content) ?></td>
    <? endif; ?>
  </tr>
</table>
<? endwhile; ?>
