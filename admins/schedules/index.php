<?php

require_once (dirname(__FILE__).'/../../lib/Model.php');
require_once (dirname(__FILE__).'/../../lib/Model/Schedule.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Unripe | スケジュール管理</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" rel="stylesheet" href="/stylesheets/common.css" media="all" charset="utf-8">
<link type="text/css" rel="stylesheet" href="/stylesheets/admins.css" media="all" charset="utf-8">
</head>
<body class="admins schedules">
  <div class="header container">
    <? require_once (dirname(__FILE__).'/../../partials/admins/header.php'); ?>
  </div>

  <div class="contents container">
    <form action="/lib/Model/Schedule.php" method="post">
      <table class="new">
        <tr>
          <td>休日</td>
          <td>
            <select name="year">
              <option value="2014">2014</option>
              <option value="2015">2015</option>
            </select>年
            <select name="month">
              <? for($i = 1; i < 13; i = i + 1): ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <? endfor; ?>
            </select>月
            <select name="day">
              <? for($i = 1; i < 31; i = i + 1): ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <? endfor; ?>
            </select>日
          </td>
        </tr>

        <tr>
          <td>スタッフ名</td>
          <td>
            <select name="stuff">
              <option value="0">戸森</option>
              <option value="1">小池</option>
              <option value="2">吉野</option>
              <option value="3">榎本</option>
              <option value="4">佐久間</option>
              <option value="5">清水</option>
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

      <? foreach ($Tweet->result as $result): ?>
      <tr>
        <td><?= $result->id ?></td>
        <td><?= $result->date ?></td>
        <td><?= $result->stuff ?></td>
        <td><?= $result->created_at ?></td>
        <td>
          <form action="/lib/Model/Tweet.php" class="delete" method="post" onsubmit="return confirm('<?= @$result->id ?>を削除して宜しいですか？')">
            <input type="hidden" name="_METHOD" value="DELETE">
            <input type="hidden" name="id" value="<?= $result->id ?>">
            <input type="submit" value="削除する">
          </form>
        <td>
      </tr>
      <? endforeach; ?>
    </table>
  </div>
</body>
</html>
