<?php
require_once('init.php');
unset($_SESSION['name']);
unset($_SESSION['id']);
header("Location:index.php");
?>