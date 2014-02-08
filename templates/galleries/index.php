<?php
$settings = (object) array(
    'title' => 'ニュース一覧'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
);
?>

<? while ($result = $option[0]->fetchObject()): ?>
<a class="panel" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?>
  <br>
  Stuff: 
  <? if ($result->stuff == 1): ?>
    戸森
  <? elseif ($result->stuff == 2): ?>
    小池
  <? elseif ($result->stuff == 3): ?>
    吉野
  <? elseif ($result->stuff == 4): ?>
    榎本
  <? elseif ($result->stuff == 5): ?>
    佐久間
  <? elseif ($result->stuff == 6): ?>
    清水
  <? endif; ?>
  <br>
  Comment: <?= $result->memo ?>
">
  <img src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" width="220px">
  <p>Name: <?= $result->name ?></p>
  <p>Stuff: 
  <? if ($result->stuff == 1): ?>
    戸森
  <? elseif ($result->stuff == 2): ?>
    小池
  <? elseif ($result->stuff == 3): ?>
    吉野
  <? elseif ($result->stuff == 4): ?>
    榎本
  <? elseif ($result->stuff == 5): ?>
    佐久間
  <? elseif ($result->stuff == 6): ?>
    清水
  <? endif; ?>
  </p>
  <p>Comment: <?= $result->memo ?></p>
</a>
<? endwhile; ?>
