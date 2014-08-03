<?php
$settings = (object) array(
  'title' => '常連者様クーポン'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
);
?>

<? while ($result = $option[0]->fetchObject()): ?>
<div>
  <h3><?= $result->title ?></h3>
  <p><?= nl2br($result->content) ?></p>
</div>
<? endwhile; ?>
