<?php
namespace Helper\Filter;
class Filter{
  static function run(){
    if(isset($_GET['p'])){
      if($_GET['p'] == '0'){
        return array('price','=','0');
      }elseif($_GET['p'] == '1'){
        return array('price','>','0');
      }
    }
    elseif(isset($_GET['s'])){
      return false;
    }
    elseif(isset($_GET['s'])){
      return false;
    }
    else{
      return false;
    }
  }
}
?>