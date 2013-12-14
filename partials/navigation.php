<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <div class="panel links">
      <a href="/stuffs"        class="panel <?= $replaceUrl == ' ' ? 'selected' : '' ?>              ">stuff</a><!--
   --><a href="/menus"         class="panel <?= $replaceUrl == ' menus ' ? 'selected' : '' ?>        ">menu</a><!--
   --><a href="/news"          class="panel <?= $replaceUrl == ' news ' ? 'selected' : '' ?>         ">news</a><!--
   --><a href="/hair-meisters" class="panel <?= $replaceUrl == ' hair-meisters ' ? 'selected' : '' ?>">hair meister</a><!--
   --><a href="/goods"         class="panel <?= $replaceUrl == ' goods ' ? 'selected' : '' ?>        ">goods</a><!--
   --><a href="/galleries"     class="panel <?= $replaceUrl == ' galleries ' ? 'selected' : '' ?>    ">gallery</a><!--
   --><a href="/accesses"      class="panel <?= $replaceUrl == ' accesses ' ? 'selected' : '' ?>     ">access</a><!--
   --><a href="/recruits"      class="panel <?= $replaceUrl == ' recruits ' ? 'selected' : '' ?>     ">recruit</a><!--
   --><a href="/contacts"      class="panel <?= $replaceUrl == ' contacts ' ? 'selected' : '' ?>     ">contact</a>
    </div><!--

 --><div class="panel properties">
      <a class="panel" href="/contacts"><img src="/images/mail.png" alt=""></a><!--
   --><a class="panel" href="http://www.facebook.com/pages/Unripe/209519589110505" target="_blank"><img src="/images/facebook.png" alt=""></a><!--
   --><a class="panel" href="/contacts" target="_blank"><img src="/images/blogger.png" alt=""></a><!--
   --><img class="panel cactus" src="/images/cactus.png" class="panel" alt="">
    </div>
