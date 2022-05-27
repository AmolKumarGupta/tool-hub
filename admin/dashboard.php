<?php
require_once('../init.php');
if(!isset($_SESSION['role'])){
	header('Location:../index.php');
	die();
}
require_once('../inc/header.php');
require_once('tab.php');
?>


<div class="flex flex-col sm:flex-row flex-wrap sm:justify-center gap-4 mx-4 mt-4 sm:space-x-4 ">
      <div class="bg-gray-50 dark:bg-gray-700 sm:w-1/3 rounded-xl shadow-lg flex items-center justify-around ">
        <img src="https://i.imgur.com/VHc5SJE.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold m-8">534</h1>
          <span class="">Users</span>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 sm:w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/Qnmqkil.png" alt="" />
        <div class="text-center m-8">
          <h1 class="text-4xl font-bold ">9.7k</h1>
          <span class="">Products</span>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 sm:w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/dJeEVcO.png" alt="" />
        <div class="text-center m-8">
          <h1 class="text-4xl font-bold">50 M</h1>
          <span class="">Revenue</span>
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