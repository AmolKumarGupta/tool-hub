<?php
namespace Traits;
trait insertProduct{
  public function insert($arr){
    $stmt = mysqli_prepare($this->conn,"insert into ". $this->table ."  (`id`, `name`, `description`, `short_note`, `size`, `price`, `type`, `img`, `rating`, `developer`, `dwn_link`) VALUES (NULL, ?, ?, ?, ?, ?, NULL, ?, ?, ?, ?)");
    // var_dump($stmt);
    if(!$stmt){
      echo "error in stmt1 :". mysqli_error($this->conn);
    }
    mysqli_stmt_bind_param($stmt,"sssssssss",$arr['name'],$arr['description'],$arr['shortnote'],$arr['size'],$arr['price'],$arr['imagelink'],$arr['rating'],$arr['developer_name'],$arr['dwn_link']);
    if(!$stmt){
      echo "error in stmt 2:". mysqli_error($this->conn);
    }

    $result = mysqli_stmt_execute($stmt);
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    return true;
  }
}