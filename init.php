<?php
session_start();
require 'vendor/autoload.php';
// require('../vendor/autoload.php');
require_once('config/config.php');
require_once('config/db.php');
// require_once('autoload.php');
if(isset($_SESSION['id'])){
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];
}
use App\Db;
$db = new Db();
?>