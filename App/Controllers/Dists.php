<?php
namespace App\Controllers;
use App\Models\Dist;
/**
 * @author Amol Kumar Gupta
 * Dists class
 * @var array $tr 
 * @var array $arr
 */
class Dists extends Controller{
  static $tr = ['id','user_id','product_id','created_at'];
  static $arr = array("id"=>array(),"user_id"=>array(),"product_id"=>array(),"created_at"=>array());
  static function make(){
    global $db;
    return (new Dist($db));
  }
}
?>