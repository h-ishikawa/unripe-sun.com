<?php

namespace Controller;

class Staffs
{
  public static function index ($template, $layout) {
    $app = new \App();
    $app->request();
    $dbh = \Db::getInstance();

    $dbh->beginTransaction();

    $sql = new \Model\Schedules();
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $schedule = $sth;

    $sql = new \Model\Tweets();
    $sql->where('stuff', 1);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->selectOne());
    $sth->execute($sql->values());
    $tweet_tomori = $sth;

    $sql = new \Model\Snaps();
    $sql->where('stuff', 1);
    $sql->limit(2);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $snap_tomori = $sth;


    $sql = new \Model\Tweets();
    $sql->where('stuff', 2);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->selectOne());
    $sth->execute($sql->values());
    $tweet_koike = $sth;

    $sql = new \Model\Snaps();
    $sql->where('stuff', 2);
    $sql->limit(2);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $snap_koike = $sth;


    $sql = new \Model\Tweets();
    $sql->where('stuff', 3);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->selectOne());
    $sth->execute($sql->values());
    $tweet_yoshino = $sth;

    $sql = new \Model\Snaps();
    $sql->where('stuff', 3);
    $sql->limit(2);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $snap_yoshino = $sth;


    $sql = new \Model\Tweets();
    $sql->where('stuff', 4);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->selectOne());
    $sth->execute($sql->values());
    $tweet_enomoto = $sth;

    $sql = new \Model\Snaps();
    $sql->where('stuff', 4);
    $sql->limit(2);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $snap_enomoto = $sth;


    $sql = new \Model\Tweets();
    $sql->where('stuff', 5);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->selectOne());
    $sth->execute($sql->values());
    $tweet_sakuma = $sth;


    $sql = new \Model\Tweets();
    $sql->where('stuff', 6);
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->selectOne());
    $sth->execute($sql->values());
    $tweet_shimizu = $sth;

    $dbh->commit();

    \View::html($template
      , $layout
      , array(
        $schedule
        , $tweet_tomori
        , $snap_tomori
        , $tweet_koike
        , $snap_koike
        , $tweet_yoshino
        , $snap_yoshino
        , $tweet_enomoto
        , $snap_enomoto
        , $tweet_sakuma
        , $tweet_shimizu
      , ), null);
  }
}
