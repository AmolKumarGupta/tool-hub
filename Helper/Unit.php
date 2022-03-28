<?php
namespace Helper;
class Unit{
  static function getSize($size){
    $whole = (int)$size;
    if(($size-$whole)==0){
      $size = (int)$size;
    }
    if($size >= 1024){
      return $size . " GB";
    }
    return $size . " MB";
  }
}
?>