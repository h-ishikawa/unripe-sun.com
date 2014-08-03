<?php

namespace Middleware;

require(dirname(__FILE__) . '/../../vendor/autoload.php');

class Auth extends \Middleware
{
  public static function authorization() {
    session_start();

    if (isset($_SESSION['password']) === false) {
      header('Location: /admins/signin');
      exit;
    }
  }
}
