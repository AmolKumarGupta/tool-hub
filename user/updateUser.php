<?php
require_once('../init.php');
if(!isset($_SESSION['name'])){
	header('Location:../index.php');
	die();
}
use App\Controllers\Users;
use Helper\Filter\Filter;

if(isset($_GET['name'])){
  $data = Filter::data($_GET);
  $_SESSION['name'] = $data['name'];
  foreach($data as $col=>$val){
    Users::update($col,$val);
  }
  echo 'done';
}
?>