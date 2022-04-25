<?php
namespace App\Controllers;
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
   * @method all
   * @return array $res 
   * it is a normal method to get data from database with columns as index
   */
  static function all(){
    $obj = static::make();
    $res = $obj->all();
    return static::get($res,static::$arr,static::$tr);
  }
  /**
   * @method where
   * @param string $col
   * @param string $oper  
   * @param string $val
   * @return array $res
   * Get data for specific column 
   */
  static function where($col, $oper, $val){
    $obj = static::make();
    $res = $obj->where($col, $oper,$val);
    return static::get($res,static::$arr,static::$tr);
  }
  
  /**
   * @method orderBy
   * @param string $col ,any table column
   * @param string $opt ,ASC or DESC
   * @return array $res
   * Get data in a Ordered way  
   */
  static function orderBy($col,$opt){
    $obj = static::make();
    $res = $obj->orderBy($col,$opt);
    return static::get($res,static::$arr,static::$tr);
  }
  /**
   * Insert Assocative Array into database table
   * @method insert
   * @param array $arr
   * @return boolean $res
   */
  static function insert($arr){
    $obj = static::make();
    $res = $obj->insert($arr);
    return $res;
  }
  /**
   * update data
   * 
   */
  static function update($col,$val){
    $obj = static::make();
    $res = $obj->update($col,$val);
  }
}
?>