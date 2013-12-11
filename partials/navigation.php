<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

    <a href="/"      class="panel <?= $replaceUrl == ' ' ? 'selected' : ''        ?>">home</a><!--
 --><a href="abouts" class="panle <?= $replaceUrl == ' abouts ' ? 'selected' : '' ?>">●●●</a><!--
 --><a href="">●●●</a><!--
 --><a href="">●●●</a><!--
 --><a href="">●●●</a>
