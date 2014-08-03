<?php

require(dirname(__FILE__) . '/../vendor/autoload.php');

class Config
{
  public function data() {
    $app = new App();
    $request = $app->request();

    /*
     ** production
     */
    if ($request->mode == 'production') {
      return (object) array(
        'db' => (object) array(
          'host' => 'sddb0040027077.cgidb'
          , 'database' => 'sddb0040027077'
          , 'username' => 'sd_dba_MTYxNDUy'
          , 'password' => 'JuzmWh4U'
        )
      );
    }

    /*
     ** development
     */
    else if ($request->mode == 'localhost') {
      return (object) array(
        'db' => (object) array(
          'host' => 'localhost'
          , 'database' => 'unripe_development'
          , 'username' => 'root'
          , 'password' => 'root'
        )
      );
    }
  }
}
