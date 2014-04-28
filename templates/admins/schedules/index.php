<form action="/admins/schedules" method="post">
  <table class="new">
    <tr>
      <td>休日</td>
      <td>
        <input class="date" type="date" name="date" value="">
      </td>
    </tr>

    <tr>
      <td>スタッフ名</td>
      <td>
        <select name="stuff">
          <option value="1">戸森</option>
          <option value="2">小池</option>
          <option value="3">吉野</option>
          <option value="4">榎本</option>
          <option value="5">佐久間</option>
          <option value="6">清水</option>
        </select>
      </td>
    </tr>


    <tr>
      <td class="buttons" colspan="2">
        <input type="hidden" name="_METHOD" value="POST">
        <input class="submit" type="submit" value="登録する">
        <input class="reset" type="reset" value="リセット">
      </td>
    </tr>
  </table>
</form>

<table class="results">
  <tr>
    <th>ID</th>
    <th>休日</th>
    <th>スタッフ名</th>
    <th>投稿日</th>
    <th></th>
  </tr>

  <? require(dirname(__FILE__) . '/../../partials/pagination.php'); ?>
  
  <? while ($result = $option[1]->fetchObject()): ?>
  <tr>
    <td><?= $result->id ?></td>
    <td><?= $result->date ?></td>
    <td>
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
    </td>
    <td><?= $result->created_at ?></td>
    <td class="delete">
      <form action="/admins/schedules" class="delete" method="post" onsubmit="return confirm('<?= @$result->id ?>を削除して宜しいですか？')">
        <input type="hidden" name="_METHOD" value="DELETE">
        <input type="hidden" name="id" value="<?= $result->id ?>">
        <input type="submit" value="削除する">
      </form>
    </td>
  </tr>
  <? endwhile; ?>
</table>
