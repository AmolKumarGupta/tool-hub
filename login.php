<?php
require_once('init.php');
if(isset($_SESSION['name'])){
	header('Location:index.php');
	die();
}
require_once('inc/header.php');
use Helper\Msg;
?>
<div class="w-fit mx-auto my-28">
	<div class="text-center text-2xl font-bold my-2">
		<h2>Login</h2>
	</div>
	<?php
	if($msg = Msg::flash('user_err')){
		echo '<div class="p-2 border-[1px] border-gray-500 rounded bg-red-500 text-sm text-white">'.$msg.'</div>';
	}
	?>
	<form action="inc/logining.php" method="post" class="flex flex-col gap-4 my-4">
		<div class="">
			<label for="user">User</label><br>
			<input name="name" id="user" type="text" placeholder="Your name" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
		</div>
		<div class="">
			<label for="password">Password</label><br>
			<input name="password" id="password" type="password" placeholder="Password" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
		</div>
		<div class="">
			<input name="log" type="submit" value="Confirm" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">
		</div>
	</form>
	<p>dont have a account? <a href="register.php" class="text-blue-600">Register</a></p>
</div>
<?php
require_once('inc/footer.php');
?>