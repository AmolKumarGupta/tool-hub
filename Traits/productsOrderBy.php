<?php
namespace Traits;
trait productsOrderBy{
  function orderBy($col,$opt='ASC'){
    $result = mysqli_query($this->conn,"select * from ". $this->table ." where price>0 order by ". $col ." ". $opt ."");
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