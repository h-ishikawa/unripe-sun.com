<?php

require_once (dirname(__FILE__).'/../Model.php');

class News extends Model
{
  static $table = 'news';

  public function post () {
    $post = (object) $_POST;
    $postDate = sprintf(
      '%d-%d-%d'
      , $post->year
      , $post->month
      , $post->day);

    parent::insert(array(
      'title' => @$post->title
      , 'content' => @$post->content
      , 'uri' => @$post->uri
      , 'date' => @$postDate
    ));
  }

  public function get ($query) {
    $queries = array();
    $queries = $query;

    if (@$query['order']) {
      $order = array($query['order']);
      $queries = '';
      $queries = array();
    }

    else {
      $order = array('created_at DESC');
    }

    parent::find(
      $queries, array(
        'order' => $order
        , 'limit' => '10'
      )
    );
  }

  //public function put () {
  //  $post = (object) $_POST;
  //
  //  parent::update(array(
  //      'approval' => true
  //  ), array(
  //      'id' => $post->id
  //  ));
  //}

  public function deleteById () {
    $post = (object) $_POST;
  
    parent::delete(array(
        'id' => $post->id
    ));
  }
}

if (@$_POST['_METHOD'] === 'POST') {
  $News = new News();
  $News->post();

  header('Location: /admins/news');
}

//else if (@$_POST['_METHOD'] === 'PUT') {
//  $News = new News();
//  $News->put();
//
//  header('Location: /admins/news');
//}

else if (@$_POST['_METHOD'] === 'DELETE') {
  $News = new News();
  $News->deleteById();

  header('Location: /admins/news');
}
