<?php
$uri = $_SERVER['REQUEST_URI'];
$replaceUrl = preg_replace('/\//', ' ', $uri);
?>

<h1 onclick="Javascript: location.href='/'">UNRIPE</h1>
