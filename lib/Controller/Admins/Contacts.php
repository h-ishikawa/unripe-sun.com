<?php

namespace Controller\Admins;

class Contacts
{
  public static function index ($template, $layout) {
    $layout = dirname(__FILE__) . '/../../../layouts/admin.php';
    $app = new \App();
    $app->request();
    $get = $app->get;
    $dbh = \Db::getInstance();

    $sql = new \Model\Contacts();

    $dbh->beginTransaction();

    /*
     ** pagination
     */
    $counter = $dbh->prepare($sql->count());
    $counter->execute($sql->values());

    $pagination = new \Middleware\Pagination(array(
      'page' => @$get->page
      , 'limit' => @$get->limit
      , 'counts' => $counter->fetchObject()->count
    ));

    $sql->limit(array(intval($pagination->start) - 1, intval($pagination->limit)));
    /*
     ** /pagination
     */

    $sql->order('updated_at', 'desc');

    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());

    $dbh->commit();

    \View::html($template, $layout, array($get, $sth), $pagination);
  }
}
