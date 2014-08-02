
<? require(dirname(__FILE__) . '/../../partials/pagination.php'); ?>

<table class="results">
  <tr>
    <th>お問い合わせ日</th>
    <th>ID</th>
    <th>氏名</th>
    <th>E-mail</th>
    <th>電話番号</th>
  </tr>
  <tr>
    <th colspan="5" style="background-color:#888;">内容</th>
  </tr>
</table>

<table class="results">
  
  <? while ($result = $option[1]->fetchObject()): ?>
  <tr style="border-top:5px solid #333;">
    <td><?= @$result->created_at ?></td>
    <td><?= @$result->id ?></td>
    <td><?= @$result->name ?></td>
    <td><?= @$result->email ?></td>
    <td><?= @$result->tel ?></td>
  </tr>
  <tr style="border-bottom:5px solid #333;">
    <td colspan="5"><?= nl2br(@$result->content) ?></td>
  </tr>
  <? endwhile; ?>
</table>
