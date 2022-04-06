<?php
namespace App\Models;
use App\Models\Model;
class User extends Model{
  protected $table = 'users';

  function where($col,$oper,$val){
    $stmt = mysqli_prepare($this->conn,"select * from ". $this->table ." where `$col`". $oper ." ?");
    mysqli_stmt_bind_param($stmt,"s",$val);
    if(!$stmt){
      echo "error in stmt :". mysqli_error($this->conn);
    }
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    if(mysqli_num_rows($result)>0){
      return $result;
    }
    return false;
  }

  /**
   * 
   * 
   */
  function insert($arr){
    $stmt = mysqli_prepare($this->conn,"insert into ". $this->table ." (`id`, `name`, `email`, `password`, `bod`, `mobile`, `state`, `city`, `area`, `block`, `st_no`, `h_no`, `landmark`, `created_at`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, current_timestamp())");
    if(!$stmt){
      echo "error in stmt :". mysqli_error($this->conn);
    }

    mysqli_stmt_bind_param($stmt,"ssssdsssssss",$arr['name'],$arr['email'],password_hash($arr['password'],PASSWORD_DEFAULT),$arr['bod'],$arr['mobile'],$arr['state'],$arr['city'],$arr['area'],$arr['block'],$arr['st_no'],$arr['h_no'],$arr['landmark']);
    if(!$stmt){
      echo "error in stmt :". mysqli_error($this->conn);
    }

    $result = mysqli_stmt_execute($stmt);
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    return true;
  }
}