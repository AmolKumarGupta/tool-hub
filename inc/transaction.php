<?php
require_once("../init.php");
use App\Controllers\Dists;
use Helper\Msg;
if(!isset($_SESSION['id'])){
  Msg::set('user_err','You should login first');
  header('location : ../login.php');
  exit();
}
$res = Dists::insert([
  "user_id"=>$id,
  "product_id"=>$_POST['prod_id']
]);
if(!$res){
  echo 'error in inserting data in auth';
  exit();
}
header('location:../product.php?i='.$_POST['prod_id']);
?>