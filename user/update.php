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
<main class="flex flex-col items-center p-4">
	<?php
	echo '
	<h1 class="text-2xl font-bold font-serif m-4 text-center">'. ucfirst('Update Information') .'</h1>';
  ?>
  <form id="form" action="">
  <div class="flex flex-col gap-4">
      <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Username</h3>
      <input name="name" type='text' value="<?= $arr['name'][0] ?>" pattern="^[a-zA-Z]+[a-zA-Z0-9]+$" title="start with chars, no spaces & more than 2 chars" maxlength="30" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Date of Birth</h3>
      <input name="bod" type='date' value="<?= $arr['bod'][0] ?>" class="w-full sm:w-[50%] p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">E-mail</h3>
      <input name="email" type='email' value="<?= $arr['email'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Mobile No.</h3>
      <input name="mobile" type='tel' value="<?= $arr['mobile'][0] ?>" pattern="^[0-9]+$" maxlength="10" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">State</h3>
      <input name="state" type='text' value="<?= $arr['state'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">City</h3>
      <input name="city" type='text' value="<?= $arr['city'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Area</h3>
      <input name="area" type='text' value="<?= $arr['area'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Block No.</h3>
      <input name="block" type='text' value="<?= $arr['block'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Street No.</h3>
      <input name="st_no" type='text' value="<?= $arr['st_no'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">House No.</h3>
      <input name="h_no" type='text' value="<?= $arr['h_no'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <h3 class="sm:self-center sm:min-w[100px] flex-1">Landmark</h3>
      <input name="landmark" type='text' value="<?= $arr['landmark'][0] ?>" class="p-2 border-2 border-blue-300 rounded text-sky-700" required><br>
    </div>
    <button id="btn" type="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">Update</button>
  </div>
  </form>
</main>

<script src="<?= PATH ?>/src/js/updateuser.js" defer></script>
<?php
require_once('../inc/footer.php');
?>