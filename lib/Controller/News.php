<?php

namespace Controller;

class News
{
  public static function index ($template, $layout) {
    $app = new \App();
    $app->request();
    $dbh = \Db::getInstance();

    $dbh->beginTransaction();

    $sql = new \Model\News();
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());

    $dbh->commit();

    \View::html($template, $layout, array($sth), null);
  }
}
