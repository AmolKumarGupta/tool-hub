<?php
session_start();
require_once('config/config.php');
require_once('config/db.php');
require_once('autoload.php');
require_once('inc/header.php');
use App\Db;
use App\Models\User;
use App\Models\Product;
$db = new Db();
$User=new User($db);
$Product=new Product($db);
?>