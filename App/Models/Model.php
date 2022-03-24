<?php
namespace App\Models;

class Model{
  protected $table;
  protected $conn;
  function __construct($db){
    $this->conn = $db->conn;
  }
  function all(){
    $sql = "SELECT * FROM ". $this->table;
    $result = mysqli_query($this->conn,$sql);
    if(!$result){
      die("Error : ". mysqli_error($this->conn));
    }
    if(mysqli_num_rows($result)>0){
      return $result;
    }
  }
}