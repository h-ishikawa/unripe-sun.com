<?

/*
 ** config
 */
class Config
{
  public function data() {
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
