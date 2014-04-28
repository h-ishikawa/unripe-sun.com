<?php
$settings = (object) array(
  'title' => '初回来店者様クーポン'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
);
?>

<? while ($result = $option[0]->fetchObject()): ?>
<div>
  <h3><?= $result->title ?></h3>
  <p><?= $result->content ?></p>
</div>
<? endwhile; ?>
