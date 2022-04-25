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
  static $arr = array("id"=>array(),"name"=>array(),"description"=>array(),"short_note"=>array(),"size"=>array(),"price"=>array(),"type"=>array(),"img"=>array(),"rating"=>array(),"developer"=>array(),"dwn_link"=>array());
  static function make(){
    global $db;
    return (new Product($db));
  }
}
?>