<?php

namespace Controller;

require(dirname(__FILE__) . '/../../vendor/autoload.php');

class Admins
{
  public static function index ($template, $layout) {
    $layout = dirname(__FILE__) . '/../../layouts/admin.php';
    \Middleware\Auth::authorization();
    \View::html($template, $layout, null, null);
  }
}
