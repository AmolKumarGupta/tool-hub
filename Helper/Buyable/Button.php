<?php
namespace Helper\Buyable;
use Helper\Unit;
class Button{
  static function check($price,$size){
    if($price==0){
      return Unit::getSize($size);
    }
    $whole = (int)$price;
    if(($price-$whole)==0){
      $price = number_format($price);
      return '&#8377 '. $price;
    }
    $price=number_format($price,2);
    return '&#8377 '. $price;
  }
}
?>