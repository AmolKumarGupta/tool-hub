<?php
require_once("../init.php");
use App\Controllers\Users;
use Helper\Filter\Filter;
//verification goes here

//logging in 
if(isset($_POST['log'])){
  $data=Filter::data($_POST);
  $cnt = Users::where('name','=',$data['name']);
  if($cnt){
    if(password_verify($data['password'], $cnt['password'][0])){
      $_SESSION['name']=$cnt['name'][0];
    }else{
      $_SESSION['user_err'] = "Password do not match";
      header("Location:../login.php");
      die();
    }
  }else{
    $_SESSION['user_err'] = "No Account exist with this name";
    header("Location:../login.php");
    die();
  }
}
header("Location:../index.php");
?>