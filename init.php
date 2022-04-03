<?php
session_start();
require_once('config/config.php');
require_once('config/db.php');
require_once('autoload.php');

use App\Db;
$db = new Db();
?>