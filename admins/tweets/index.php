<?php

require_once (dirname(__FILE__).'/../../lib/Model_Tweet.php');
require_once (dirname(__FILE__).'/../../lib/Model/Tweet.php');

$Tweet = new Tweet();
$Tweet->get(array());
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Unripe | つぶやき管理</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" rel="stylesheet" href="/stylesheets/common.css" media="all" charset="utf-8">
<link type="text/css" rel="stylesheet" href="/stylesheets/admins.css" media="all" charset="utf-8">
</head>
<body class="admins tweets">
  <div class="header container">
    <? require_once (dirname(__FILE__).'/../../partials/admins/header.php'); ?>
  </div>

  <div class="contents container">
    <form action="/lib/Model/Tweet.php" method="post">
      <table class="new">
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
          <td>つぶやき</td>
          <td>
            <textarea class="tweet" name="tweet" rows="6" cols="60"></textarea>
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
        <th>スタッフ名</th>
        <th>つぶやき</th>
        <th>投稿日</th>
        <th></th>
      </tr>

      <? foreach ($Tweet->result as $result): ?>
      <tr>
        <td><?= $result->id ?></td>
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
        <td>
        <td><?= $result->tweet ?></td>
        <td><?= $result->created_at ?></td>
        <td>
          <form action="/lib/Model/Tweet.php" class="delete" method="post" onsubmit="return confirm('<?= @$result->tweet ?>を削除して宜しいですか？')">
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
