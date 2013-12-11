<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <h1 onclick="Javascript: location.href='/admins'">Unripe | 管理画面</h1>

    <a href="/admins"           class="panel <?= $replaceUrl == ' admins ' ? 'selected' : ''?>          ">管理TOP</a><!--
 --><a href="/admins/tweets"    class="panel <?= $replaceUrl == ' adminstweets ' ? 'selected' : '' ?>   ">つぶやき管理</a><!--
 --><a href="/admins/snaps"     class="panel <?= $replaceUrl == ' adminssnaps ' ? 'selected' : '' ?>    ">スナップ管理</a><!--
 --><a href="/admins/schedules" class="panel <?= $replaceUrl == ' adminsschedules ' ? 'selected' : '' ?>">スケジュール管理</a>
