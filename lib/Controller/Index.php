<?php

namespace Controller;

class Index
{
  public static function index ($template, $layout) {
    $app = new \App();
    $app->request();
    $dbh = \Db::getInstance();

    $dbh->beginTransaction();

    $sql = new \Model\Tweets();
    $sql->order('created_at', 'asc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $tweets = $sth;

    $sql = new \Model\Snaps();
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $snaps = $sth;

    $sql = new \Model\News();
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $news = $sth;

    $sql = new \Model\Schedules();
    $sql->order('date', 'asc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $schedules = $sth;

    $sql = new \Model\Coupons();
    $sql->where('target', '1');
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $coupon1 = $sth;

    $sql = new \Model\Coupons();
    $sql->where('target', '2');
    $sql->order('created_at', 'desc');
    $sth = $dbh->prepare($sql->select());
    $sth->execute($sql->values());
    $coupon2 = $sth;

    $dbh->commit();

    \View::html($template, $layout, array($tweets, $news, $schedules, $snaps, $coupon1, $coupon2), null);
  }
}
