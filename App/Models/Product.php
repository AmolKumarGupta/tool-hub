<?php
namespace App\Models;
use App\Models\Model;
class Product extends Model{
  protected $table='products';

  // function where($col , $val){
  //   $sql = "select * from ". $this->table ." where `$col`=?";
  //   if($stmt = mysqli_prepare($this->conn, $sql)){
  //     mysqli_stmt_bind_param($stmt,"d", $val);
  //     mysqli_stmt_execute($stmt);
  //     // mysqli_stmt_bind_result($stmt,$id,$name,$des,$sh,$size,$price,$type,$img,$rating,$dev,$link);
  //     // while(mysqli_stmt_fetch($stmt)){
  //     //   echo $id;
  //     // }
  //     $res = mysqli_stmt_get_result($stmt);
  //     while($row = mysqli_fetch_assoc($res)){
  //       var_dump($row);
  //     }
  //   }
  // }
}
?>