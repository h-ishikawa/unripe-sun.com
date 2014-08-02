    <form class="news" action="/admins/news" method="POST">
      <table class="new">
        <tr>
          <td>日付</td>
          <td>
            <input class="date" type="date" name="date" value="">
          </td>
        </tr>

        <tr>
          <td>タイトル</td>
          <td>
            <input class="title" type="text" name="title" value="" placeholder="タイトルを入力してください">
          </td>
        </tr>

        <tr>
          <td>内容</td>
          <td>
            <textarea name="content" placeholder="お知らせ内容を入力してください。"></textarea>
          </td>
        </tr>

        <tr>
          <td>リンク（※貼りたい場合は入力してください）</td>
          <td>
            <input class="uri" type="text" name="uri" value="" placeholder="http://">
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
        <th>日付</th>
        <th>タイトル</th>
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
        <td><?= $result->date ?></td>
        <td><?= $result->title ?></td>
        <td class="delete">
          <form action="/admins/news" method="POST" onsubmit="return confirm('お知らせ:<?= $result->id ?>を削除しますか？');">
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
