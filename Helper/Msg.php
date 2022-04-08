<?php
namespace Helper;
class Msg{
  static function set($var, $msg){
    $_SESSION[$var] = $msg;
  }
  static function flash($var){
    if( isset($_SESSION[$var]) ){
      echo $_SESSION[$var];
      unset($_SESSION[$var]);
    }
  }
}
?>