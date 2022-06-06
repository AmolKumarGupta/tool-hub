<?php
require_once('../init.php');
if(!isset($_SESSION['role'])){
	header('Location:../index.php');
	die();
}
use App\Controllers\Products;
use App\Controllers\Users;
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page=1;
}
$offset = ($page-1)*LIMIT;
if(isset($_GET['p']) && $d = Filter::run()){
  $arr = Products::whereWithLimit($d[0],$d[1],$d[2], $offset);
  $forcount = Products::where($d[0],$d[1],$d[2]);
  $cnt = count($forcount['id']); 
}elseif(isset($_GET['s']) && $d = Filter::run()){
  $arr = Products::orderByWithLimit($d[0],$d[1], $offset);
  $forcount = Products::orderBy($d[0],$d[1]);
  $cnt = count($forcount['id']); 
}else{
  $arr = Products::allWithLimit($offset);
  $cnt = Products::count();
}
if(!count($arr['id'])){
  header('LOCATION: index.php');
  exit();
}

require_once('../inc/header.php');
require_once('tab.php');
?>


<div class="flex flex-col sm:flex-row flex-wrap sm:justify-center gap-4 mx-4 mt-4 sm:space-x-4 ">
      <div class="bg-gray-50 dark:bg-gray-700 sm:w-1/3 rounded-xl shadow-lg flex items-center justify-around ">
        <img src="assets/VHc5SJE.png" alt="" />
        <div class="text-center m-8">
          <h1 class="text-4xl font-bold">534</h1>
          <span class="">Visits</span>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 sm:w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="assets/Qnmqkil.png" alt="" />
        <div class="text-center m-8">
          <h1 class="text-4xl font-bold"><?= Users::count() ?></h1>
          <span class="">Users</span>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 sm:w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="assets/dJeEVcO.png" alt="" />
        <div class="text-center m-8">
          <h1 class="text-4xl font-bold "><?= Products::count() ?></h1>
          <span class="">Products</span>
        </div>
      </div>

    </div>
<?php
require_once('table2.php');
?>
<!-- PAGINATION STARTS HERE -->
<div class="my-8">
<?php
$total_pages = ceil($cnt/LIMIT);
$span = '';
$off = floor($page/5)*5;
$p = isset($_GET['p'])?'&p='. $_GET['p']:'';
$s = isset($_GET['s'])?'&s='. $_GET['s']:'';
if($page>=2){
  $span .='<li>
          <a href="?page='. ($page-1) . $p . $s .'"
            class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
        </li>';   
}
for($i=1; $i<=$total_pages; $i++){
  
  if($i == $page){
    $span .=
    '<li>
      <a href="?page='. $i . $p . $s .'" aria-current="page" class="bg-blue-50 border border-gray-300 text-blue-600 hover:bg-blue-100 hover:text-blue-700  py-2 px-3 dark:border-gray-700 dark:bg-gray-700 dark:text-white">'. $i .'</a>
    </li>';
  }elseif( $off<= $i && $i<=($off+5) ){
    $span .= 
    '<li>
      <a href="?page='. $i . $p . $s .'" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'. $i .'</a>
    </li>';
  }
}
if($page+1 <= $total_pages){
  $span .='<li>
  <a href="?page='. ($page+1) . $p . $s .'"
    class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
</li>';   
}
?>
<div class="max-w-2xl mx-auto">
<nav aria-label="Page navigation example" class="">
  <ul class="inline-flex -space-x-px w-full justify-center">
    <?= $span; ?>
  </ul>
</nav>
</div>
</div><!-- PAGINATION ENDS HERE -->

<?php
require_once('../inc/footer.php');
?>