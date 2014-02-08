<?php

$settings = (object) array(
    'title' => 'File'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('abc', 'cdf', 'ghi')
  , 'stylesheets' => array('abc', 'cdf', 'ghi')
);

?>

<form action="/file" method="post" enctype="multipart/form-data">
  <div class="input">
    <span class="panel">画像</span><!--
 --><input type="file" name="file_path[]" multiple="multiple">
  </div>
  <input type="submit" value="登録">
</form>

<div>
<? while ($result = $option[0]->fetchObject()): ?>
  <div>
  <? $path = explode( ",", $result->file_path ); foreach ($path as $row): ?>
  <? if ($row): ?>
  <img src="/public/images/uploads/thumbnails/<?= $row ?>" alt="">
  <? else: ?>
  <? endif; ?>
  <? endforeach; ?>
  </div>
<? endwhile; ?>
</div>
