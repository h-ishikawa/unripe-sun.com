<?php

require_once (dirname(__FILE__).'/../../lib/Model/Snap.php');

$Snap = new Snap();
$Snap->get(array());
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Unripe | スナップ管理</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" rel="stylesheet" href="/stylesheets/admins.css" media="all" charset="utf-8">
</head>
<body class="admins snaps">
  <div class="header container">
    <? require_once (dirname(__FILE__).'/../../partials/admins/header.php'); ?>
  </div>

  <div class="contents container">
    <form action="/lib/Model/Snap.php" method="post" enctype="multipart/form-data">
      <table class="new">
        <tr>
          <td>モデル名</td>
          <td>
              <input type="text" name="name" value="" />
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
          <td>性別</td>
          <td>
              <input type="radio" name="sex" value="1" checked="checked" />女性
              <input type="radio" name="sex" value="0" />男性
          </td>
        </tr>

        <tr>
          <td>画像</td>
          <td>
              <input type="file" name="file_path[]" multiple="multiple" />
          </td>
        </tr>

        <tr>
          <td>カテゴリー</td>
          <td>
            <select name="category">
              <option value="0">ロング</option>
              <option value="1">セミロング</option>
              <option value="2">ミディアム</option>
              <option value="3">ボブ</option>
              <option value="4">ショート</option>
              <option value="5">ベリーショート</option>
              <option value="6">ヘアセット</option>
              <option value="7">カラーリング</option>
              <option value="8">パーマ</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>メモ</td>
          <td>
            <textarea name="memo" rows="6" cols="60"></textarea>
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
        <th>モデル名</th>
        <th>性別</th>
        <th>画像</th>
        <th>カテゴリー</th>
        <th>メモ</th>
        <th></th>
      </tr>

      <? foreach ($Snap->result as $result): ?>
      <tr>
        <td><?= $result->id ?></td>
        <td><?= @$result->name ?></td>
        <td><?= @$result->sex ?></td>
        <td><img src="/images/uploads/thumbnails/<?= @$result->file_path ?>"></td>
        <td><?= @$result->category ?></td>
        <td><?= @$result->memo ?></td>
        <td><?= $result->created_at ?></td>
        <td>
          <form action="/lib/Model/Snap.php" class="update" method="post" onsubmit="return confirm('<?= @$result->name ?>さんを削除して宜しいですか？')">
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
