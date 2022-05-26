<?php
require_once('../init.php');
if(!isset($_SESSION['role'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
?>
<main class="flex flex-col items-center p-4">
<form id="form" action="<?= PATH ?>/admin/postdata.php" method="post" enctype="multipart/form-data">
  <div class="flex flex-col flex-wrap gap-4">
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Name</h3>
				<input name="name" type='text' value="" pattern="^[a-zA-Z]+[a-zA-Z0-9]+$" title="start with chars, no spaces & more than 2 chars" maxlength="30" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Description</h3>
				<input name="description" type='text' value="" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
    
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Short note</h3>
				<input name="shortnote" type='text' value="" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Size (in MB)</h3>
				<input name="size" type='text' pattern="^[0-9.]+$" value="" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		
		<div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Price</h3>
				<input name="price" type='text' value="" pattern="^[0-9.]+$" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
			<h3 class="sm:self-center sm:min-w[100px] flex-1">Download link</h3>
      <input name="dwn_link" type='url' value="" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		
		<div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Rating</h3>
				<input name="rating" type='text' value=""  pattern="^[0-5][.]?[0-9]?$" title="must be in range (0 to 5)" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
			<h3 class="sm:self-center sm:min-w[100px] flex-1">Developer Name</h3>
      <input name="developer_name" type='text' value="" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		
		<div class="sm:flex justify-center space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div class="sm:self-center">
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Add Image</h3>
				<input name="image" type='file' value="" class=" p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		<style>
			input[name='image']{
				width:12.5rem;
			}
		</style>

		<button id="btn" type="submit" name="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">Add</button>
  </div>
  </form>
</main>

<?php
require_once('../inc/footer.php');
?>