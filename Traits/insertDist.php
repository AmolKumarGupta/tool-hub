<?php
namespace Traits;
trait insertDist{
  public function insert($arr){
    $stmt = mysqli_prepare($this->conn,"insert into ". $this->table ." (`id`, `user_id`, `product_id`, `created_at`) VALUES (NULL, ?, ?, current_timestamp());");
    if(!$stmt){
      echo "error in stmt :". mysqli_error($this->conn);
    }
    mysqli_stmt_bind_param($stmt,"ss",$arr['user_id'],$arr['product_id']);
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