<?php
require_once('../init.php');
if(!isset($_SESSION['name'])){
	header('Location:../index.php');
	die();
}
use App\Controllers\Users;
use Helper\Filter\Filter;

$pwd = filter_input(INPUT_POST,'pwd');
$d = Filter::data(['pwd'=>$pwd]);
$data = Users::where('name','=',$name);
if($data){
  if(password_verify($d['pwd'], $data['password'][0])){
    if(Users::deleteById($data['id'][0])){
      unset($_SESSION['name']);
      unset($_SESSION['id']);
      echo 1;
    }else{
      echo "Unable to delete,Try again";
    }
  }else{
    echo "Password do not match";
  }
}

?>