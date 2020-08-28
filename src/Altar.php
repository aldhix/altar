<?php

namespace Aldhix\Altar;

class Altar
{
  public static function imagefit($file, $filename, $fit_size = 200)
   {
      $file = $file;
      $filename = $filename;
      $type = strtolower( $file['type']);
      
      switch ($type) {
        case 'image/jpeg':
          return self::imagefitjpeg($file,$filename,$fit_size);
          break;
        case 'image/png':
          return self::imagefitpng($file,$filename,$fit_size);
          break;
        default:
          return false;
          break;
      }
   }

   public static function imagefitjpeg($file, $filename, $fit_size = 200)
   {
      $file = $file;
      $filename = $filename;
    
      $orig_image = self::imagecreatetype($file);
      if($orig_image == null){
        return false;
      }

      list($width,$height) = getimagesize($file['tmp_name']);

      if(min($width,$height) > $fit_size){
        $scale = $fit_size/min($width,$height);
        $new_width = floor($width*$scale);
        $new_height = floor($height*$scale);
        $save_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($save_image, $orig_image,0,0,0,0, $new_width, $new_height, $width, $height);
        $x = 0;
        $y = 0;
        
        if($new_width > $height) {
            $x = floor( ( $new_width - $fit_size ) / 2 );
        } else {
            $y = floor( ( $new_height - $fit_size ) / 2 );
        }

        $save_image = imagecrop($save_image,['x' => $x, 'y' => $y    , 'width' => $fit_size, 'height' => $fit_size]);

        imagejpeg($save_image,$filename);
        imagedestroy($save_image);
        return true;
      } else {
        return false;
      }
   }

   public static function imagefitpng($file, $filename, $fit_size = 200)
   {
      $file = $file;
      $filename = $filename;
      $type = strtolower( $file['type']);
  
      $orig_image = self::imagecreatetype($file);
      if($orig_image == null){
        return false;
      }

      list($width,$height) = getimagesize($file['tmp_name']);

      if(min($width,$height) > $fit_size){

        $scale = $fit_size/min($width,$height);
        $new_width = floor($width*$scale);
        $new_height = floor($height*$scale);
        $save_image = imagecreatetruecolor($new_width, $new_height);

        /* Background Transparant */
        if($type == 'image/png'){
          imagesavealpha($save_image, true);
          $color = imagecolorallocatealpha($save_image, 0, 0, 0, 127);
          imagefill($save_image, 0, 0, $color);
        }

        imagecopyresampled($save_image, $orig_image,0,0,0,0, $new_width, $new_height, $width, $height);
        $x = 0;
        $y = 0;
        
        if($new_width > $height) {
            $x = floor( ( $new_width - $fit_size ) / 2 );
        } else {
            $y = floor( ( $new_height - $fit_size ) / 2 );
        }

        $save_image = imagecrop($save_image,['x' => $x, 'y' => $y    , 'width' => $fit_size, 'height' => $fit_size]);

        imagepng($save_image,$filename);
        imagedestroy($save_image);
        return true;
      } else {
        return false;
      }
   }

  public static function imageresize($file, $filename, $fit_size = 200)
  {
      $file = $file;
      $filename = $filename;
      $type = strtolower( $file['type']);
      
      switch ($type) {
        case 'image/jpeg':
          $orig_image = imagecreatefromjpeg($file['tmp_name']);
          break;
        case 'image/png':
          $orig_image = imagecreatefrompng($file['tmp_name']);
          break;
        default:
          return false;
          break;
      }

      list($width,$height) = getimagesize($file['tmp_name']);

      if(min($width,$height) > $fit_size){
        $scale = $fit_size/min($width,$height);
        $new_width = floor($width*$scale);
        $new_height = floor($height*$scale);
        
        $save_image = imagecreatetruecolor($new_width,$new_height);
        
        if($type == 'image/png'){
          imagesavealpha($save_image, true);
          $color = imagecolorallocatealpha($save_image, 0, 0, 0, 127);
          imagefill($save_image, 0, 0, $color);
        }

        imagecopyresampled($save_image, $orig_image,0,0,0,0, $new_width, $new_height, $width, $height);

        switch ($type) {
          case 'image/jpeg':
            imagejpeg($save_image,$filename);
            break;
          case 'image/png':
            imagepng($save_image,$filename);
            break;
          default:
            imagedestroy($save_image);
            return false;
            break;
        }
        imagedestroy($save_image);
        return true;
      } else {
        return false;
      }
   }

   public static function imagecreatetype($file)
   {
      $file = $file;
      $type = strtolower( $file['type']);

      switch ($type) {
        case 'image/jpeg':
          return imagecreatefromjpeg($file['tmp_name']);
          break;
        case 'image/png':
          return imagecreatefrompng($file['tmp_name']);
          break;
        default:
          return null;
          break;
      }
   }

}
