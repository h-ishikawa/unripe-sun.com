<?php
$settings = (object) array(
    'title' => 'ニュース一覧'
  , 'keywords' => 'ニュース一覧,最新情報,Unripe,アンライプ,美容室,ヘアサロン,横浜,反町'
  , 'description' => '美容室unripe（アンライプ）のニュース一覧のページです。最新のunripe情報をお届け致します。unripe（アンライプ）は横浜の東急東横線反町駅のすぐ近くにある美容室です。'
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
