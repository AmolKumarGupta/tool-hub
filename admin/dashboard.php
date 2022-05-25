<?php
require_once('../init.php');
if(!isset($_SESSION['role'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
?>



<?php
require_once('../inc/footer.php');
?>