<?php
require_once('../init.php');
if(!isset($_SESSION['name'])){
	header('Location:../index.php');
	die();
}
use App\Controllers\Users;
use Helper\Filter\Filter;
use Helper\Msg;
$d = Filter::data([
  'oldPwd'=>filter_input(INPUT_POST,'oldPwd'),
  'password'=>filter_input(INPUT_POST,'password'),
  'cpassword'=>filter_input(INPUT_POST,'cpassword'),
]);
if($d['cpassword'] === $d['password']){
  $data = Users::where('name','=',$name);
  if($data){
    if(password_verify($d['oldPwd'], $data['password'][0])){
      Users::update('password',password_hash($d['password'],PASSWORD_DEFAULT));
      echo 1;
      }else{
        echo "Incorrect Password";
      }
    }else{
      echo "User Not Found";
    }
}else{
  echo 'Passwords donot match';
}
?>