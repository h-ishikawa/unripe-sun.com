<?php

namespace Controller;

class File
{
  public static function index ($template, $layout) {
    $dbh = \Db::getInstance();

    $sql = new \Model\File();
    $sql->order('updated_at', 'desc');

    $dbh->beginTransaction();

    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());

    $dbh->commit();

    \View::html($template, $layout, array($sth), null);
  }

  public static function post ($template, $layout) {
    $app = new \App();
    $app->request();
    $dbh = \Db::getInstance();

    $file = \Middleware\File::upload(220, 170);

    $sql = new \Model\File();
    $sql
      ->set('file_path', @$file)
      ->set('created_at', null);

    try {
      $dbh->beginTransaction();

      $sth = $dbh->prepare($sql->insert());
      $sth->execute($sql->values());

      $dbh->commit();
    }

    catch (\PDOException $e) {
      error_log($e->getMessage());
      $dbh->rollback();
      $app->error();
    }

    catch (\ErrorException $e) {
      error_log($e->getMessage());
      $dbh->rollback();
      $app->error();
    }

    catch (\Exception $e) {
      error_log($e->getMessage());
      $app->error();
    }

    $app->redirect('/file');
  }
}
