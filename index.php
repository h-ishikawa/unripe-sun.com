<?php

require(dirname(__FILE__) . '/vendor/autoload.php');

$app = new App();
$app->request();

try {
  if (file_exists($app->template) === false || file_exists($app->routePath) === false) {
    throw new \Exception('this file is not exist.');
  }
}

catch (\Exception $e) {
  error_log($e->getMessage());
  $app->notfound();
}

$Controller = '\\Controller\\' . $app->route;

if ($app->method == 'POST') {
  $Controller::post($app->template, $app->layout);
  exit;
}

else if ($app->method == 'PUT') {
  $Controller::put($app->template, $app->layout);
  exit;
}

else if ($app->method == 'DELETE') {
  $Controller::delete($app->template, $app->layout);
  exit;
}

else if ($app->method == 'SEND') {
  $Controller::send($app->template, $app->layout);
  exit;
}

else if ($app->method == 'OUT') {
  $Controller::out($app->template, $app->layout);
  exit;
}

$Controller::index($app->template, $app->layout);
