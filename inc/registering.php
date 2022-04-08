<?php
require_once("../init.php");
use App\Controllers\Users;
use Helper\Filter\Filter;
use Helper\Msg;
//verification goes here

//Register
if(isset($_POST['reg'])){
  $data = Filter::data($_POST);
  $cnt = Users::where('name','=',$data['name']);
  if(!$cnt){
    Users::insert($data);
  }
  else{
    Msg::set();
    $_SESSION['user_err'] = "Account Already Exists.";
    header("Location:../register.php");
    die();
  }
}
header("Location:../index.php");
?>