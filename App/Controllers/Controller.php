<?php
namespace App\Controllers;
class Controller{
  function get($res,$arr,$tr){
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
}
?>