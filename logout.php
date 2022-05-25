<?php
require_once('init.php');
unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['role']);
header("Location:index.php");
?>