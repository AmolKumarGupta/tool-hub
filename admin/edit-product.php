<?php
require_once('../init.php');
if(!isset($_SESSION['role'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');

use App\Controllers\Products;
$arr = Products::where('id','=',$_GET['id'])
?>
<style>
			input[name='image']{
				width:12.5rem;
			}
</style>
<h1 class="text-2xl font-medium mb-4 mt-6 text-center">Edit Product</h1>
<main class="flex flex-col items-center p-4">
<form id="form" action="<?= PATH ?>/admin/editProduct.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <div class="flex flex-col flex-wrap gap-4">
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Name</h3>
				<input name="name" type='text' value="<?= $arr['name'][0] ?>" pattern="^[a-zA-Z]+[a-zA-Z0-9 ]+$" title="start with chars, no spaces & more than 2 chars" maxlength="30" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Description</h3>
				<input name="description" type='text' value="<?= $arr['description'][0] ?>" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
    
    <div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
      <div>
			<h3 class="sm:self-center sm:min-w[100px] flex-1">Add Image</h3>
				<input name="image" type='file' value="<?= $arr['img'][0] ?>" class=" p-2 border-2 border-gray-500 rounded text-sky-700" ><br>
			</div>
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Size (in MB)</h3>
				<input name="size" type='text' pattern="^[0-9.]+$" value="<?= $arr['size'][0] ?>" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		
		<div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Price</h3>
				<input name="price" type='text' value="<?= $arr['price'][0] ?>" pattern="^[0-9.]+$" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
			<h3 class="sm:self-center sm:min-w[100px] flex-1">Download link</h3>
      <input name="dwn_link" type='url' value="<?= $arr['dwn_link'][0] ?>" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		
		<div class="sm:flex space-y-1 sm:space-y-0 sm:gap-2 sm:min-w-[400px]">
			<div>
				<h3 class="sm:self-center sm:min-w[100px] flex-1">Rating</h3>
				<input name="rating" type='text' value="<?= $arr['rating'][0] ?>"  pattern="^[0-5][.]?[0-9]?$" title="must be in range (0 to 5)" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
			<div>
			<h3 class="sm:self-center sm:min-w[100px] flex-1">Developer Name</h3>
      <input name="developer" type='text' value="<?= $arr['developer'][0] ?>" class="p-2 border-2 border-gray-500 rounded text-sky-700" required><br>
			</div>
    </div>
		<input type="hidden" name="shortnote" value="none" disabled>
		<input type="hidden" name="imageifnotuploaded" value="<?= $arr['img'][0] ?>" >

		<button id="btn" type="submit" name="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">Edit</button>
  </div>
  </form>
</main>

<?php
require_once('../inc/footer.php');
?>