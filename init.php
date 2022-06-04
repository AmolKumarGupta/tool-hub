<?php
session_start();
if(file_exists('vendor/autoload.php')){
  
  require 'vendor/autoload.php';
}else{
  require_once('autoload.php');
}
require_once('config/config.php');
require_once('config/db.php');

if(isset($_SESSION['id'])){
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];
}
use App\Db;
$db = new Db();
?>