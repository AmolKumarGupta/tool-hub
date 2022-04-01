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
      if($_GET['s'] == 'l'){
        return array('price','ASC');
      }elseif($_GET['s'] == 'h'){
        return array('price','DESC');
      }
    }
    elseif(isset($_GET['c'])){
      return false;
    }
    else{
      return false;
    }
  }
  static function checkforcss($q,$val){
    if(isset($_GET[$q])){
      if($_GET[$q]==$val){
        return "filter-active";
      }
      return "";
    }
  }
}
?>