<?php
require_once("../init.php");
use App\Controllers\Users;
use Helper\Filter\Filter;
//verification goes here

//Register
if(isset($_POST['reg'])){
  $data = Filter::data($_POST);
  $cnt = Users::where('name','=',$data['name']);
  if(!$cnt){
    echo "if in";
    Users::insert($data);
  }
}
header("Location:../index.php");
?>