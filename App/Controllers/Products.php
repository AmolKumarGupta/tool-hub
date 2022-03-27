<?php
namespace App\Controllers;
use App\Models\Product;
class Products extends Controller{
  static $tr = ['id','name','description','short_note','size','price','type','img'];
  static $arr = array(
    "id"=>array(),
    "name"=>array(),
    "description"=>array(),
    "short_note"=>array(),
    "size"=>array(),
    "price"=>array(),
    "type"=>array(),
    "img"=>array(),
  );

  static function all(){
    global $db;
    $obj = new Product($db);
    $res = $obj->all();
    $arr = self::$arr;
    while($row=mysqli_fetch_assoc($res)){
      foreach(self::$tr as $i){
        array_push($arr[$i],$row[$i]);
      }
    }
    return $arr;
  }
}
?>