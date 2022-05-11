<?php
namespace Helper;
class Unit{
  static function getSize($size){
    $whole = (int)$size;
    if(($size-$whole)==0){
      $size = (int)$size;
    }
    if($size >= 1024){
      return number_format($size/1024,2) . " GB";
    }
    return $size . " MB";
  }
}
?>