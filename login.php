<?php
require_once('init.php');
if(isset($_SESSION['name'])){
	header('Location:index.php');
	die();
}
require_once('inc/header.php');
if(isset($_SESSION['user_err'])){
	echo $_SESSION['user_err'];
	unset($_SESSION['user_err']);
}
?>
<div class="">
	<form action="inc/logining.php" method="post">
		<label for="user">User</label>
		<input name="name" id="user" type="text" placeholder="Your name">
		<label for="password">Password</label>
		<input name="password" id="password" type="password" placeholder="Password">
		<input name="log" type="submit" value="Login">
	</form>
	<p>dont have a account? <a href="register.php">Register</a></p>
</div>
<?php
require_once('inc/footer.php');
?>