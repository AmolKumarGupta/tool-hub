<?php
require_once('init.php');
require_once('inc/header.php');
?>
<div class="">
	<form action="inc/" method="post">
		<label for="user">User</label>
		<input id="user" type="text" placeholder="Your name">
		<label for="password">Password</label>
		<input id="password" type="text" placeholder="Password">
		<input type="submit" value="Login">
	</form>
	<p>dont have a account? <a href="register.php">Register</a></p>
</div>
<?php
require_once('inc/footer.php');
?>