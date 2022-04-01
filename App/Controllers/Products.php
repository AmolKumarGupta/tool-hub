<?php
namespace App\Controllers;
use App\Models\Product;
/**
 * @author Amol Kumar Gupta
 * Products class
 * @var array $tr 
 * @var array $arr
 */
class Products extends Controller{
  static $tr = ['id','name','description','short_note','size','price','type','img','rating','developer','dwn_link'];
  static $arr = array(
    "id"=>array(),
    "name"=>array(),
    "description"=>array(),
    "short_note"=>array(),
    "size"=>array(),
    "price"=>array(),
    "type"=>array(),
    "img"=>array(),
    "rating"=>array(),
    "developer"=>array(),
    "dwn_link"=>array(),
  );
  /**
   * @method all
   * @return array $res 
   * it is a normal method to get data from database with columns as index
   */
  static function all(){
    global $db;
    $obj = new Product($db);
    $res = $obj->all();
    return self::get($res,self::$arr,self::$tr);
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
    global $db;
    $obj = new Product($db);
    $res = $obj->where($col, $oper,$val);
    return self::get($res,self::$arr,self::$tr);
  }
  /**
   * @method orderBy
   * @param string $col ,any table column
   * @param string $opt ,ASC or DESC
   * @return array $res
   * Get data in a Ordered way  
   */
  static function orderBy($col,$opt){
    global $db;
    $obj = new Product($db);
    $res = $obj->orderBy($col,$opt);
    return self::get($res,self::$arr,self::$tr);
  }
  
}
?>