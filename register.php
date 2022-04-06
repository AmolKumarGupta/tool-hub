<?php
require_once('init.php');
require_once('inc/header.php');
?>
<div class="">
	<form action="inc/registering.php" method="post">
		<label for="user">User</label>
		<input name="name" id="user" type="text" placeholder="Your name">
		<label for="email">Email</label>
		<input name="email" id="email" type="email" placeholder="Your Email" >
		<label for="password">Password</label>
		<input name="password" id="password" type="password" placeholder="Password">
		<label for="repassword">Re-Password</label>
		<input id="repassword" type="password" placeholder="Enter password again">

		<label for="bod">Date of Birth</label>
		<input name="bod" id="bod" type="date" placeholder="">

		<label for="mobile">Mobile No.</label>
		<input name="mobile" id="mobile" type="tel" placeholder="111-222-3333">
		<label for="state">State</label>
		<input name="state" id="state" type="text" placeholder="eg. punjab">
		<label for="city">City</label>
		<input name="city" id="city" type="text" placeholder="eg. ludhiana">
		<label for="area">Area</label>
		<input name="area" id="area" type="text" placeholder="eg. model town">
		<label for="block">Block No.</label>
		<input name="block" id="block" type="text" placeholder="">
		<label for="st_no">Street No.</label>
		<input name="st_no" id="st_no" type="text" placeholder="">
		<label for="h_no">House No.</label>
		<input name="h_no" id="h_no" type="text" placeholder="">
		<label for="landmark">Landmark</label>
		<input name="landmark" id="landmark" type="text" placeholder="">

		<input name="reg" type="submit" value="Register">
	</form>
</div>
<?php
require_once('inc/footer.php');
?>