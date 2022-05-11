<?php
namespace Helper\Buyable;
use Helper\Unit;
class Buyable{
  /**
   * used to find whether product is free or premium
   * @method is
   * @param int price of the product
   * @return bool TRUE if product is premium
   */
  static function is($price){
    if($price==0){
      return false;
    }
    return true;
  }
  /**
   * used to find whether user already buy that product HARDCODED
   */
  static function isBought($user_id, $prod_id){
    global $db;
    $sql = "select * from auth_dist where user_id='$user_id' AND product_id='$prod_id'";
    $res = mysqli_query($db->conn,$sql);
    if(!$res){
      echo "error:".mysqli_error($db->conn);
    }
    $row = mysqli_fetch_assoc($res);
    if($row>0){
      return true;
    }
    return false;
  }
}
?>