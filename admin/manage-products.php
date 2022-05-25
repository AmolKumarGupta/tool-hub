<?php
require_once('../init.php');
if(!isset($_SESSION['name'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
?>

<form action="">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
</form>

<?php
require_once('../inc/footer.php');
?>