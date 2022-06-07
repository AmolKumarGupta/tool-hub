<?php
session_start();
require 'vendor/autoload.php';
require_once('config/config.php');
require_once('config/db.php');

if(isset($_SESSION['id'])){
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];
}
use App\Db;
$db = new Db();
//require_once('inc/countVisits.php');
?>