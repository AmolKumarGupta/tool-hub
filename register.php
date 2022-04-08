<?php
require_once('init.php');
if(isset($_SESSION['name'])){
	header('Location:index.php');
	die();
}
require_once('inc/header.php');
use Helper\Msg;
?>
<div class="">
	<?php
	Msg::flash('user_err');
	?>	
</div>
<div class="">
	<form action="inc/registering.php" method="post">
		<label for="user">User</label>
		<input name="name" id="user" type="text" placeholder="Your name" required>
		<label for="email">Email</label>
		<input name="email" id="email" type="email" placeholder="Your Email" required>
		<label for="password">Password</label>
		<input name="password" id="password" type="password" placeholder="Password" required>
		<label for="repassword">Re-Password</label>
		<input name="repassword" id="repassword" type="password" placeholder="Enter password again" required>

		<label for="bod">Date of Birth</label>
		<input name="bod" id="bod" type="date" placeholder="" required>

		<label for="mobile">Mobile No.</label>
		<input name="mobile" id="mobile" type="tel" placeholder="111-222-3333" required>
		<label for="state">State</label>
		<input name="state" id="state" type="text" placeholder="eg. punjab" title="only chars" required>
		<label for="city">City</label>
		<input name="city" id="city" type="text" placeholder="eg. ludhiana" required>
		<label for="area">Area</label>
		<input name="area" id="area" type="text" placeholder="eg. model town" required>
		<label for="block">Block No.</label>
		<input name="block" id="block" type="text" placeholder="" required>
		<label for="st_no">Street No.</label>
		<input name="st_no" id="st_no" type="text" placeholder="" required>
		<label for="h_no">House No.</label>
		<input name="h_no" id="h_no" type="text" placeholder="" required>
		<label for="landmark">Landmark</label>
		<input name="landmark" id="landmark" type="text" placeholder="" required>

		<input name="reg" type="submit" value="Register">
	</form>
</div>
<?php
require_once('inc/footer.php');
?>