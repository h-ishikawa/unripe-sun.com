<?php

namespace Controller\Admins;

class News
{
  public static function index ($template, $layout) {
    $layout = dirname(__FILE__) . '/../../../layouts/admin.php';
    $app = new \App();
    $app->request();
    $get = $app->get;
    $dbh = \Db::getInstance();

    $sql = new \Model\News();

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

  public static function post () {
    $app = new \App();
    $app->request();
    $post = $app->post;
    $dbh = \Db::getInstance();

    $sql = new \Model\News();
    $sql
      ->set('date', $post->date)
      ->set('title', @$post->title)
      ->set('content', $post->content)
      ->set('uri', $post->uri)
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

    $app->redirect('/admins/news');
  }

  static public function delete() {
    $app = new \App();
    $app->request();
    $post = $app->post;
    $dbh = \Db::getInstance();

    $sql = new \Model\News();
    $sql->where('id', $post->id);


    try {
      $dbh->beginTransaction();

      $sth = $dbh->prepare($sql->delete());
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

    $app->redirect('/admins/news');
  }
}
