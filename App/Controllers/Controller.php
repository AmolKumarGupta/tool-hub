<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Product;
class Controller{
  /**
   * fetch data from given query, can be used in all select query
   * @method get
   * @param mysqli_object $res 
   * @param array $arr  | given in child class
   * @param array $tr   | column of table
   * @return array $arr | Assocative Array of data from database
   */
  static function get($res,$arr,$tr){
    if(!$res){
      return false;
    }
    while($row=mysqli_fetch_assoc($res)){
      foreach($tr as $i){
        array_push($arr[$i],$row[$i]);
      }
    }
    return $arr;
  }
  /**
   * Insert Assocative Array into database table
   * @method insert
   * @param array $arr
   * @return boolean $res
   */
  static function insert($arr){
    global $db;
    $obj = new User($db);
    $res = $obj->insert($arr);
    return $res;
  }
}
?>