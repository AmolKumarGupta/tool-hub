<?php
namespace Traits\Model;

Trait pageLimit{
  function allWithLimit($starting){
      $sql = "SELECT * FROM ". $this->table ." LIMIT ". $starting ."," . LIMIT;
      $result = mysqli_query($this->conn,$sql);
      if(!$result){
        die("Error : ". mysqli_error($this->conn));
      }
      if(mysqli_num_rows($result)>0){
        return $result;
      }
      return false;
  }

  function whereWithLimit($col, $oper, $val,$starting){
    $stmt = mysqli_prepare($this->conn,"select * from ". $this->table ." where `$col` ".$oper." ? LIMIT ". $starting .",". LIMIT);
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

  function orderByWithLimit($col,$opt,$starting){
    $result = mysqli_query($this->conn,"select * from ". $this->table ." where price>0 order by ". $col ." ". $opt ." LIMIT ". $starting .",". LIMIT);
    if(!$result){
      die("Error in Model : ". mysqli_error($this->conn));
    }
    if(mysqli_num_rows($result)>0){
      return $result;
    }
    return false;
  }
}
?>