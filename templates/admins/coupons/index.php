    <form class="coupons" action="/admins/coupons" method="POST">
      <table class="new">
        <tr>
          <td>タイトル</td>
          <td>
            <input class="title" type="text" name="title" value="" placeholder="タイトルを入力してください">
          </td>
        </tr>

        <tr>
          <td>対象</td>
          <td>
            <select name="target">
              <option value="1">初回来店者様向け</option>
              <option value="2">常連様向け</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>内容</td>
          <td>
            <textarea name="content" placeholder="クーポンの内容を入力してください。" rows="15"></textarea>
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
    
    <table>
      <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>対象</th>
        <th></th>
      </tr>
    
      <tr>
        <td colspan="4">内容</td>
      </tr>
    </table>

    <? require(dirname(__FILE__) . '/../../partials/pagination.php'); ?>
    
    <? while ($result = $option[1]->fetchObject()): ?>
    <table class="lists <?= @++$i % 2 ? 'odd' : 'even' ?>">
      <tr>
        <td><?= $result->id ?></td>
        <td><?= $result->title ?></td>
        <td><?= $result->target ?></td>
        <td class="delete">
          <form action="/admins/coupons" method="POST" onsubmit="return confirm('クーポン:<?= $result->id ?>を削除しますか？');">
            <input type="hidden" name="id" value="<?= $result->id ?>">
            <input type="hidden" name="_METHOD" value="DELETE">
            <input type="submit" value="削除">
          </form>
        </td>
      </tr>
    
      <tr>
        <? if (@$result->uri): ?>
        <td colspan="4"><a href="<?= @$result->uri ?>"><?= nl2br($result->content) ?></a></td>
        <? else: ?>
        <td colspan="4"><?= nl2br($result->content) ?></td>
        <? endif; ?>
      </tr>
    </table>
    <? endwhile; ?>
