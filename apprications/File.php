<?

/*
 ** File
 */
class File 
{
  public function upload() {
    $file_name = $_FILES['file_path']['name'];
    $file_size = $_FILES['file_path']['size'];
    $file_type = $_FILES['file_path']['type'];
    $file_tmp = $_FILES['file_path']['tmp_name'];

    for($i = 0; $i < count($file_name); $i = $i + 1) {
      move_uploaded_file($file_tmp[$i], dirname(__FILE__)."/../images/uploads/".$file_name[$i]);
      $img = file_get_contents(dirname(__FILE__)."/../images/uploads/".$file_name[$i]);
      $im = imagecreatefromstring($img);
      $XX = imagesx($im);
      $YY = imagesy($im);
      $Xa = $XX / 300 ;
      $Ya = $YY / 200 ; 
      if ($Xa >= $Ya) {
        $X2 = 300;
        $Y2 = intval((300 / $XX) * $YY) ;
      }
      
      else {
        $Y2 = 200;
        $X2 = intval((200 / $YY) * $XX) ;
      }

      $output = imagecreatetruecolor($X2, $Y2);
      imagecopyresampled($output, $im, 0, 0, 0, 0, $X2, $Y2, $XX, $YY);
      imagejpeg($output ,dirname(__FILE__)."/../images/uploads/thumbnails/".$file_name[$i]);

      if (strrpos($file_name[$i], ".") === false) {
        $file_path = "";
      }
      
      else {
        $file_path = implode($file_name, ",");
      }
    }

    $this->path = $file_path;
  }
}
