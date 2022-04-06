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
  /**
   * get filtered data from request
   * @method data
   * @param array $arr | may be get or post request
   * @return array $data | a filtered secured data from request
   * @see Helper\Filter\Filter::filter_data_coming_from_req()
   */
  static function data($arr){
    $res = array();
    foreach($arr as $key=>$val){
      $res[$key] = self::filter_data_coming_from_req($val);
    }
    return $res;
  }
  static function filter_data_coming_from_req($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
?>