<?php

require_once (dirname(__FILE__).'/../Model_Tweet.php');
require_once (dirname(__FILE__).'/../../applications/File.php');

class Tweet extends Model_Tweet
{
  static $table = 'tweets';

  public function post () {
    $post = (object) $_POST;

    parent::insert(array(
      'stuff' => htmlspecialchars(@$post->stuff, ENT_QUOTES, 'UTF-8')
      , 'tweet' => htmlspecialchars(@$post->tweet, ENT_QUOTES, 'UTF-8')
    ));
  }

  public function get ($query) {
    $queries = array();
    $queries = @$query;

    if (@$query['order']) {
      $order = array($query['order']);
      unset($queries['order']);
    }

    else {
      $order = array('created_at DESC');
    }

    parent::find(
      $queries, array(
        'order' => $order
        , 'limit' => 3
      )
    );
  }

  public function put () {
    $post = (object) $_POST;
  
    parent::update(array(
        'approval' => true
    ), array(
        'id' => $post->id
    ));
  }

  public function deleteById () {
    $post = (object) $_POST;
  
    parent::delete(array(
      'id' => $post->id
    ));
  }
}

if (@$_POST['_METHOD'] === 'POST') {
  $Tweet = new Tweet();
  $Tweet->post();

  header('Location: /admins/tweets');
}

else if (@$_POST['_METHOD'] === 'PUT') {
  $Tweet = new Tweet();
  $Tweet->put();

  header('Location: /admins/tweets');
}

else if (@$_POST['_METHOD'] === 'DELETE') {
  $Tweet = new Tweet();
  $Tweet->deleteById();

  header('Location: /admins/tweets');
}
