<?php

require_once (dirname(__FILE__).'/../Model.php');

class Schedule extends Model
{
  static $table = 'schedules';

  public function post () {
    $post = (object) $_POST;
    $postDate = sprintf(
      '%d-%d-%d'
      , $post->year
      , $post->month
      , $post->day);

    parent::insert(array(
      'stuff' => @$post->stuff
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
      $order = array('date ASC');
    }

    parent::find(
      $queries, array(
        'order' => $order
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
  $Schedule = new Schedule();
  $Schedule->post();

  header('Location: /admins/schedules');
}

else if (@$_POST['_METHOD'] === 'PUT') {
  $Schedule = new Schedule();
  $Schedule->put();

  header('Location: /admins/schedules');
}

else if (@$_POST['_METHOD'] === 'DELETE') {
  $Schedule = new Schedule();
  $Schedule->deleteById();

  header('Location: /admins/schedules');
}

