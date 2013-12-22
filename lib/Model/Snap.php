<?php

require_once (dirname(__FILE__).'/../Model_Snap.php');
require_once (dirname(__FILE__).'/../../applications/File.php');

class Snap extends Model_Snap
{
  static $table = 'snaps';

  public function post () {
    $post = (object) $_POST;

    if ($_FILES['file_path']['name'][0]) {
      $File = new File();
      $File->upload();
    }

    parent::insert(array(
      'name' => @$post->name
      , 'sex' => @$post->sex
      , 'stuff' => @$post->stuff
      , 'file_path' => @$File->path
      , 'category' => @$post->category
      , 'memo' => @$post->memo
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
  $Snap = new Snap();
  $Snap->post();

  header('Location: /admins/snaps');
}

else if (@$_POST['_METHOD'] === 'PUT') {
  $Snap = new Snap();
  $Snap->put();

  header('Location: /admins/snaps');
}

else if (@$_POST['_METHOD'] === 'DELETE') {
  $Snap = new Snap();
  $Snap->deleteById();

  header('Location: /admins/snaps');
}
