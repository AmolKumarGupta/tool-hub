<?php
require_once('init.php');
unset($_SESSION['name']);
header("Location:index.php");
?>