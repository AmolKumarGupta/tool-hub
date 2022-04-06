<?php
namespace App\Controllers;
use App\Models\User;
/**
 * @author Amol Kumar Gupta
 * Users class
 * @var array $tr 
 * @var array $arr
 */
class Users extends Controller{
  static $tr = ['id','name','email','password','bod','mobile','state','city','area','block','st_no','h_no','landmark','created_at'];
  static $arr = array(
    "id"=>array(),
    "name"=>array(),
    "email"=>array(),
    "password"=>array(),
    "bod"=>array(),
    "mobile"=>array(),
    "state"=>array(),
    "city"=>array(),
    "area"=>array(),
    "block"=>array(),
    "st_no"=>array(),
    "h_no"=>array(),
    "landmark"=>array(),
    "created_at"=>array(),
  );
  /**
   * it is a normal method to get data from database with columns as index
   * @method all
   * @return array $res 
   */
  static function all(){
    global $db;
    $obj = new User($db);
    $res = $obj->all();
    return self::get($res,self::$arr,self::$tr);
  }
  /**
   * Get data for specific column 
   * @method where
   * @param string $col
   * @param string $oper  
   * @param string $val
   * @return array $res
   */
  static function where($col, $oper, $val){
    global $db;
    $obj = new User($db);
    $res = $obj->where($col, $oper,$val);
    return self::get($res,self::$arr,self::$tr);
  }
  /**
   * Get data in a Ordered way  
   * @method orderBy
   * @param string $col ,any table column
   * @param string $opt ,ASC or DESC
   * @return array $res
   */
  static function orderBy($col,$opt){
    global $db;
    $obj = new User($db);
    $res = $obj->orderBy($col,$opt);
    return self::get($res,self::$arr,self::$tr);
  }
  
}
?>