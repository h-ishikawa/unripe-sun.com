<?php

require_once (dirname(__FILE__).'/../../lib/Model/News.php');

$News = new News();
$News->get(array());
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Unripe | ニュース管理</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" rel="stylesheet" href="/stylesheets/admins.css" media="all" charset="utf-8">
</head>
<body class="admins schedules">
  <div class="header container">
    <? require_once (dirname(__FILE__).'/../../partials/admins/header.php'); ?>
  </div>

  <div class="contents container">
    <form class="news" action="/lib/Model/News.php" method="POST">
      <table class="new">
        <tr>
          <td>休日</td>
          <td>
            <select name="year">
              <option value="2014" selected="selected">2014</option>
              <option value="2015">2015</option>
            </select>年
            <select name="month">
              <? for($i = 1; $i < 13; $i = $i + 1): ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <? endfor; ?>
            </select>月
            <select name="day">
              <? for($i = 1; $i < 32; $i = $i + 1): ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <? endfor; ?>
            </select>日
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

    <? foreach ($News->result as $result): ?>
    <table class="<?= @++$i % 2 ? 'odd' : 'even' ?>">
      <tr>
        <td><?= $result->id ?></td>
        <td><?= $result->date ?></td>
        <td><?= $result->title ?></td>
        <td>
          <form action="/lib/Model/News" method="POST" onsubmit="return confirm('お知らせ:<?= $result->id ?>を削除しますか？');">
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
    <? endforeach; ?>
  </div>
</body>
</html>
