<?php
require_once('../init.php');
if(!isset($_SESSION['name'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
use App\Controllers\Users;
$arr = Users::where('id','=',$id);
?>
<h1 class="space-y-2">
	<div class="w-24 h-24 px-4 py-2 mx-auto mt-8 text-center leading-[150%] text-5xl dark:text-gray-700 bg-sky-50 border-2 border-gray-500 rounded-full "><?= ucfirst($name[0]) ?></div>
	<div class="text-center text-2xl font-medium"><?= ucfirst($name) ?></div>
</h1>
<main class="flex flex-col gap-2 max-w-[300px] mx-auto my-4 mb-8 ">
	<a href="update.php">
		<div class="border-2 border-gray-500 rounded-lg p-2 shadow-gray-500 shadow-md hover:shadow-gray-800">Update Info</div>
	</a>
	<a href="">
		<div class="border-2 border-gray-500 rounded-lg p-2 shadow-gray-500 shadow-md hover:shadow-gray-800">Change Password</div>
	</a>
	<a class="border-2 border-gray-500 rounded-lg p-2 shadow-gray-500 shadow-md hover:shadow-gray-800">
		<div class="">Delete Account?</div>
		<form id="form" action="" class="flex justify-center m-1">
			<input name="pwd" type="password" placeholder="Password" autocomplete="on" class="px-1 border-2 border-gray-300 rounded text-sky-700" required>
			<!-- <input type="submit" value="Confirm"> -->
		</form>
	</a>
</main>
<hr/>
<script src="<?= PATH ?>/src/js/deluser.js" defer></script>
<?php
require_once('../inc/footer.php');
?>