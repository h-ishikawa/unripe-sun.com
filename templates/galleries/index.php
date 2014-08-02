<?php
$settings = (object) array(
    'title' => 'ギャラリー一覧'
  , 'keywords' => 'ギャラリー一覧,Unripe,アンライプ,美容室,ヘアサロン,横浜,反町'
  , 'description' => '美容室unripe（アンライプ）のギャラリー一覧のページです。unripe（アンライプ）は横浜の東急東横線反町駅のすぐ近くにある美容室です。'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
  , 'h2' => 'スナップ写真一覧'
  , 'point' => '当サロンのスタッフが担当したお客様のスナップ写真です。<br>スタイリングのご参考にご覧下さい！'
);
?>

<? while ($result = $option[0]->fetchObject()): ?>
<div class="panel snap_box">
<a class="panel" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" rel="lightbox" title="Name: <?= $result->name ?>
  <br>
  Staff: 
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
  <img src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" title="クリックで拡大">
</a>
<p>Name: <?= $result->name ?></p>
  <p>Staff: 
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
</div>
<? endwhile; ?>
