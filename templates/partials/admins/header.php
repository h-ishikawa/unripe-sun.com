<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', '', $uri);
?>

    <h1 class="panel" onclick="Javascript: location.href='/admins'">Unripe | 管理画面</h1><!--
 --><a class="link panel" href="/" target="_blank">Unripeウェブサイトへ</a>
    <div style="float:right; margin:0 0 15px;">
      <span class="panel">サインイン中：<?= $_SESSION['last_name'] ?> <?= $_SESSION['first_name'] ?></span><!--
   --><form class="panel" method="post" action="/admins/signin" style="margin:0 0 0 15px;">
        <input type="hidden" name="_METHOD" value="OUT">
        <input type="submit" value="サインアウト">
      </form>
    </div>

    <div class="navigation" style="clear:both;">
      <a href="/admins"           class="panel <?= $replaceUrl == 'admins' ? 'selected' : ''?>          ">管理TOP</a><!--
   --><a href="/admins/news"      class="panel <?= $replaceUrl == 'adminsnews' ? 'selected' : '' ?>     ">ニュース管理</a><!--
   --><a href="/admins/tweets"    class="panel <?= $replaceUrl == 'adminstweets' ? 'selected' : '' ?>   ">つぶやき管理</a><!--
   --><a href="/admins/snaps"     class="panel <?= $replaceUrl == 'adminssnaps' ? 'selected' : '' ?>    ">スナップ管理</a><!--
   --><a href="/admins/schedules" class="panel <?= $replaceUrl == 'adminsschedules' ? 'selected' : '' ?>">スケジュール管理</a><!--
   --><a href="/admins/coupons"   class="panel <?= $replaceUrl == 'adminscoupons' ? 'selected' : '' ?>  ">クーポン管理</a><!--
   --><a href="/admins/contacts"  class="panel <?= $replaceUrl == 'adminscontacts' ? 'selected' : '' ?> ">お問い合わせ管理</a>
    </div>
