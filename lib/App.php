<?php

class App
{
  public function request() {
    $server = (object) $_SERVER;
    $get = (object) $_GET;
    $post = (object) $_POST;


    /*
     ** mode
     */
    if (preg_match("/localhost/", $server->SERVER_NAME)) {
      $mode = 'localhost';
    }

    else {
      $mode = 'production';
    }

    $this->mode = $mode;


    /*
     ** method
     */
    $method = $server->REQUEST_METHOD;

    if (@$post->_METHOD) {
      $method = @$post->_METHOD;
    }

    $this->method = $method;


    /*
     ** get
     */
    $this->get = $get;


    /*
     ** post
     */
    $this->post = $post;


    /*
     ** uri
     */
    $separatePath = preg_replace('/\//', ' ', @$this->get->url);
    $separatePath = $separatePath == ' ' ? 'index' : $separatePath;

    $this->separatePath = $separatePath;


    /*
     ** layout
     */
    $this->layout = dirname(__FILE__) . '/../layouts/default.php';


    /*
     ** template
     */
    $url = @$get->url ? @$get->url . '/' : '';
    $this->template = dirname(__FILE__) . '/../templates/' . $url . 'index.php';


    /*
     ** route
     */
    $routes = array();
    $routings = explode('/', @$get->url);
    
    if (empty($routings[0])) {
      $routings[0] = 'index';
    }
    
    foreach ($routings as $route) {
      $routes[] = (ucfirst($route));
    }

    $routesPath = implode('/', $routes);
    $routes = implode('\\', $routes);

    $this->route = $routes;
    $this->routePath = dirname(__FILE__) . '/Controller/' . $routesPath . '.php';


    return $this;
  }

  public function notfound() {
    header("HTTP/1.1 404 Not Found");
    include_once(dirname(__FILE__) . '/../public/404.php');
    exit;
  }

  public function error() {
    header('HTTP/1.1 500 Internal Server Error');
    include_once(dirname(__FILE__) . '/../public/500.php');
    exit;
  }

  public function redirect($url) {
    header('Location: ' . $url);
    exit;
  }

  public function log() {
    $server = (object) $_SERVER;
    $this->ip = $server->REMOTE_ADDR;
    $this->browser = $server->HTTP_USER_AGENT;
    return $this;
  }
}
