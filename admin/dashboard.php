<?php
require_once('../init.php');
if(!isset($_SESSION['role'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
require_once('tab.php');
?>


<div class="flex justify-between mt-4 space-x-4 s">
      <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/VHc5SJE.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-800">534</h1>
          <span class="text-gray-500">Coaches</span>
        </div>
      </div>
      <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/Qnmqkil.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-800">9.7k</h1>
          <span class="text-gray-500">Kids</span>
        </div>
      </div>
      <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/dJeEVcO.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-800">50 M</h1>
          <span class="text-gray-500">Revenue</span>
        </div>
      </div>
    </div>
<?php
require_once('table2.php');
?>

<a href="<?= PATH ?>/admin/create-product.php">Add product</a>
<?php
require_once('../inc/footer.php');
?>