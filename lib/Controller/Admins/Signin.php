<?php

namespace Controller\Admins;

class Signin 
{
  public static function index ($template, $layout) {
    $layout = dirname(__FILE__) . '/../../../layouts/signin.php';
    \View::html($template, $layout, null, null);
  }

  public static function post ($template, $layout) {
    $app = new \App();
    $app->request();
    $post = $app->post;
    $dbh = \Db::getInstance();
    $errors = (object) array();

    $emails = array();
    $passwords = array();

    $inputPassword = hash_hmac(
      'sha256', $post->password, md5($post->email));

    $sql = new \Model\User();

    $dbh->beginTransaction();

    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $user = $dbh->prepare($sql->select());
    $user->execute($sql->values());

    $dbh->commit();

    while ($result = $sth->fetchObject()) {
      $emails[] = $result->email;
      $passwords[] = $result->password;
    }

    /**
     * email
     */
    if (empty($post->email) === true) {
      $errors->email = 'is-empty';
    }

    if (in_array($post->email, $emails)) {
      $index = array_keys($emails, $post->email)[0];
      $user = @$user->fetchAll()[$index];
    }

    else if (!in_array($post->email, $emails)) {
      $errors->email = 'incorrect';
    }

    /**
     * password
     */
    if(!@$errors->email){
      if (empty($post->password) === true) {
        $errors->password = 'is-empty';
      }

      else if ($inputPassword !== @$user['password']) {
        $errors->password = 'incorrect';
      }
    }

    try {
      if ((array) $errors) {
        throw new \Exception('input failed.');
      }
    }

    catch (\Exception $e) {
      error_log($e->getMessage());
      $layout = dirname(__FILE__) . '/../../../layouts/signin.php';
      \View::html($template, $layout, array($post, $errors), null);
      exit;
    }

    session_start();
    session_regenerate_id(true);
    $_SESSION = get_object_vars((object) $user);

    header('Location: /admins');
    exit;
  }

  public static function out ($template, $layout) {
    session_start();
    $_SESSION = array();
    setcookie("PHPSESSID", '', time() - 1800, '/');
    session_destroy();

    $layout = dirname(__FILE__) . '/../../../layouts/signin.php';
    \View::html($template, $layout, null, null);
    exit;
  }
}
