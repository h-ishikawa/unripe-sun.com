<?php

require_once (dirname(__FILE__).'/Config.php');

class Db
{
  private static $pdo = null;

  public static function getInstance() {
    $config = new Config();

    if (is_null(self::$pdo)) {
      self::$pdo = new PDO(sprintf(
        '%s:host=%s; port=%d; dbname=%s; charset=utf8;'
        , 'mysql'
        , $config->data()->db->host
        , 3306
        , $config->data()->db->database
      ), $config->data()->db->username, $config->data()->db->password);

      self::$pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    return self::$pdo;
  }
}
