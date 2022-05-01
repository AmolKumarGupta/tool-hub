<?php
require_once('../init.php');
if(!isset($_SESSION['name'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
// use Helper\Msg;
?>

<div class="w-fit mx-auto">
  <h1 class="space-y-2">
    <div class="w-24 h-24 px-4 py-2 mx-auto mt-8 text-center leading-[150%] text-5xl dark:text-gray-700 bg-sky-50 border-2 border-gray-500 rounded-full "><?= ucfirst($name[0]) ?></div>
    <div class="text-center text-2xl font-medium"><?= ucfirst($name) ?></div>
  </h1>
	<?php
  echo '<div id="msg" class="p-2 border-[1px] border-gray-500 rounded bg-red-500 text-sm text-white hidden"></div>';
	echo '<div id="success" class="p-2 border-[1px] border-gray-500 rounded bg-green-500 text-sm text-white hidden">Password Updated</div>';
	?>
	<form id="form" action="" method="post" class="flex flex-col gap-4 my-4">
		<div class="">
			<label for="oldPwd">Password</label><br>
			<input name="oldPwd" id="oldPwd" type="text" placeholder="Password" maxlength="8" autocomplete="on" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
		</div>
		<div class="">
			<label for="password">Create New Password</label><br>
      <input name="password" id="password" type="password" placeholder="Enter" maxlength="8" autocomplete="on" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
		</div>
		<div class="">
      <input name="cpassword" id="cpassword" type="password" placeholder="Re-Enter" maxlength="8" autocomplete="on" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
		</div>
		<div class="">
			<input name="log" type="submit" value="Confirm" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">
		</div>
	</form>
	<!-- <p>dont have a account? <a href="register.php" class="text-blue-600">Register</a></p> -->
</div>
<script src="<?= PATH ?>/src/js/changePwd.js" defer></script>


<?php
require_once('../inc/footer.php');
?>