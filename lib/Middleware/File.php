<?php

namespace Middleware;

class File 
{
  public static function upload($width, $height) {
    $file = '';

    if (empty($_FILES['file_path']['name'][0])) {
      return $file;
    }

    $file_name = $_FILES['file_path']['name'];
    $file_size = $_FILES['file_path']['size'];
    $file_type = $_FILES['file_path']['type'];
    $file_tmp = $_FILES['file_path']['tmp_name'];
    $new_file_name = array();

    foreach($file_name as $name) {
      $extension = explode('.', $name);
      $new_file_name[] = date("Ymd-His") . '-' . mt_rand() . '.' . $extension[count($extension) - 1];
    }

    for($i = 0; $i < count($file_name); $i = $i + 1) {
      move_uploaded_file($file_tmp[$i], dirname(__FILE__) . "/../../public/images/uploads/" . $new_file_name[$i]);
      $img = file_get_contents(dirname(__FILE__) . "/../../public/images/uploads/" . $new_file_name[$i]);
      $im = imagecreatefromstring($img);
      $XX = imagesx($im);
      $YY = imagesy($im);
      $Xa = $XX / $width ;
      $Ya = $YY / $height ; 
      if ($Xa >= $Ya) {
        $X2 = $width;
        $Y2 = intval(($width / $XX) * $YY) ;
      }
      
      else {
        $Y2 = $height;
        $X2 = intval(($height / $YY) * $XX) ;
      }

      $output = imagecreatetruecolor($X2, $Y2);
      imagecopyresampled($output, $im, 0, 0, 0, 0, $X2, $Y2, $XX, $YY);
      imagejpeg($output ,dirname(__FILE__) . "/../../public/images/uploads/thumbnails/" . $new_file_name[$i]);

      if (strrpos($new_file_name[$i], ".") === false) {
        $file_path = "";
      }
      
      else {
        $file_path = implode($new_file_name, ",");
      }
    }

    return $file_path;
  }
}

