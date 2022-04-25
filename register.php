<?php
require_once('init.php');
if(isset($_SESSION['name'])){
	header('Location:index.php');
	die();
}
require_once('inc/header.php');
use Helper\Msg;
?>
<div class="w-fit mx-auto my-20">
	<div class="text-center text-2xl font-bold my-2">
		<h2>Register</h2>
	</div>
	<?php
	if( $msg = Msg::flash('user_err')){
		echo '<div class="p-2 border-[1px] border-gray-500 rounded bg-red-500 text-sm text-white">'.$msg.'</div>';
	}
	?>	
	<form action="inc/registering.php" method="post" class="flex flex-col gap-4 my-4">
		<div class="flex flex-col sm:flex-row gap-4">
			<div class="">
				<label for="user">User</label><br>
				<input name="name" id="user" type="text" placeholder="Your name" pattern="^[a-zA-Z]+[a-zA-Z0-9]+$" title="start with chars, no spaces & more than 2 chars" maxlength="30" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
			<div class="">
				<label for="email">Email</label><br>
				<input name="email" id="email" type="email" placeholder="Your Email" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row gap-4">
			<div class="">
				<label for="password">Password</label><br>
				<input name="password" id="password" type="password" placeholder="Password" maxlength="8" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
			<div class="">
				<label for="repassword">Re-Password</label><br>
				<input name="repassword" id="repassword" type="password" placeholder="Enter password again" maxlength="8" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row gap-4">
			<div class="grow">
				<label for="bod">Date of Birth</label><br>
				<input name="bod" id="bod" type="date" placeholder="" class="p-2 w-full border-2 border-blue-300 rounded text-sky-700" required>
			</div>
			<div class="">
				<label for="mobile">Mobile No.</label><br>
				<input name="mobile" id="mobile" type="tel" placeholder="111-222-3333" maxlength="10" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row gap-4">
			<div class="">
				<label for="state">State</label><br>
				<input name="state" id="state" type="text" placeholder="eg. punjab" title="only chars" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
			<div class="">
				<label for="city">City</label><br>
				<input name="city" id="city" type="text" placeholder="eg. ludhiana" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row gap-4">
			<div class="">
				<label for="area">Area</label><br>
				<input name="area" id="area" type="text" placeholder="eg. model town" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
			<div class="">
				<label for="block">Block No.</label><br>
				<input name="block" id="block" type="text" placeholder="" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row gap-4">
			<div class="">
				<label for="st_no">Street No.</label><br>
				<input name="st_no" id="st_no" type="text" placeholder="" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
			<div class="">
				<label for="h_no">House No.</label><br>
				<input name="h_no" id="h_no" type="text" placeholder="" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
			</div>
		</div>
		<div class="mx-auto">
			<label for="landmark">Landmark</label><br>
			<input name="landmark" id="landmark" type="text" placeholder="" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
		</div>
		<div class="">
			<input name="reg" type="submit" value="Create" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">
		</div>
	</form>
</div>
<?php
require_once('inc/footer.php');
?>