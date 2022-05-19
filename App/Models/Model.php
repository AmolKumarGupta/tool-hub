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
    return false;
  }
  /**
   * 
   */
  function where($col,$oper,$val){
    $stmt = mysqli_prepare($this->conn,"select * from ". $this->table ." where `$col` ".$oper." ? ");
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
   */
  function orderBy($col,$opt='ASC'){
    $result = mysqli_query($this->conn,"select * from ". $this->table ." order by ". $col ." ". $opt ."");
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    if(mysqli_num_rows($result)>0){
      return $result;
    }
    return false;
  }
  function count(){
    $res = mysqli_query($this->conn, 'select count(*) from '. $this->table);
    if(!$res){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    return $res;
  }
  /**
   * Update data for all 
   */
  function update($col,$val){
    $stmt = mysqli_prepare( $this->conn,"update ". $this->table ." set `$col` = ? where id = ? ");
    if(!$stmt){
      echo "error in stmt1 :". mysqli_error($this->conn);
      die();
    }
    mysqli_stmt_bind_param($stmt,'ss',$val,$_SESSION['id']);
    if(!$stmt){
      echo "error in stmt2 :". mysqli_error($this->conn);
      die();
    }
    $result = mysqli_stmt_execute($stmt);
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    return true;
  }
  function delete($col,$val){
    $result = mysqli_query($this->conn,"DELETE FROM ". $this->table ." WHERE ". $col ." = ". $val);
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    return true;
  }
} 