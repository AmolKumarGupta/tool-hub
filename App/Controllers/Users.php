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
  static $arr = array("id"=>array(),"name"=>array(),"email"=>array(),"password"=>array(),"bod"=>array(),"mobile"=>array(),"state"=>array(),"city"=>array(),"area"=>array(),"block"=>array(),"st_no"=>array(),"h_no"=>array(),"landmark"=>array(),"created_at"=>array());
  static function make(){
    global $db;
    return (new User($db));
  }
}
?>