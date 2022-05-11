<?php
require_once('init.php');
require_once('inc/header.php');
use App\Controllers\Products;
use Helper\Buyable\Button;
use Helper\FIlter\Filter;
?>
<header class="p-4 font-bold">
  <span><a href="">Apps / </a></span>
  <span id="App-filter" class="relative float-right">
    <div id="App-filter-heading" class="cursor-default active:text-red-100">
      filter
    </div>
    <div id="App-filter-div" class="hidden absolute right-0 z-[100] min-h-[200px] min-w-[200px] max-w-[250px] dark:bg-gray-900 border-[1px] border-gray-500 rounded-lg p-4 m-2 shadow-2xl shadow-slate-700 bg-[#fcf8f8fc]">
      <div class="h-[25px] m-1">
        <span id="App-filter-cross" class="absolute right-4 cursor-default">&#9587</span>
      </div>
      <div class="flex flex-wrap gap-2 text-xs dark:text-gray-500 ">
        <div class="w-fit px-2 py-1 border-[1px] border-gray-500 hover:border-2 hover:border-blue-500 rounded-2xl <?= Filter::checkforcss('p','0'); ?>"><a href="?p=0">free</a></div>
        <div class="w-fit px-2 py-1 border-[1px] border-gray-500 hover:border-2 hover:border-blue-500 rounded-2xl <?= Filter::checkforcss('p','1'); ?>"><a href="?p=1">paid</a></div>
        <div class="w-fit px-2 py-1 border-[1px] border-gray-500 hover:border-2 hover:border-blue-500 rounded-2xl <?= Filter::checkforcss('s','l'); ?>"><a href="?s=l">lowest price</a></div>
        <div class="w-fit px-2 py-1 border-[1px] border-gray-500 hover:border-2 hover:border-blue-500 rounded-2xl <?= Filter::checkforcss('s','h'); ?>"><a href="?s=h">highest price</a></div>
        <div class="w-fit px-2 py-1 border-[1px] border-gray-500 hover:border-2 hover:border-blue-500 rounded-full"><a href="?">&#9587</a></div>
      </div>
    </div>
  </span>
</header><!-- HEADER -->
<section class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 w-full h-full p-4">
  <?php
  // $arr = Products::all();
  if(isset($_GET['p']) && $d = Filter::run()){
    $arr = Products::where($d[0],$d[1],$d[2]);
  }elseif(isset($_GET['s']) && $d = Filter::run()){
    $arr = Products::orderBy($d[0],$d[1]);
  }else{
    $arr = Products::all();
  }
  for($i=0; $i<count($arr['id']); $i++){
    echo '<div class="flex justify-center h-60 overflow-clip">
    <a class="flex flex-col items-center gap-2 w-[69%] sm:w-auto h-full sm:h-60 px-8 sm:px-auto p-4 border-2 border-gray-500 rounded-xl" href="product.php?i='. $arr['id'][$i] .'">';
    if(pathinfo($arr['img'][$i],PATHINFO_EXTENSION)!='svg'){
      echo '<div class="mx-6 bg-cover">';
      echo '<img src="'. $arr['img'][$i] .'" alt="products" width="100" height="100" class="">';
    }else{
      echo '<div class="scale-150 m-6">';
      include($arr['img'][$i]);
    }
    // echo '<img height="100" width="100" src="'. $arr['img'][$i] .'" alt=""';
    echo '</div>
    <div class="font-sans font-medium text-lg">'. $arr['name'][$i] .'</div>
    <div class="flex gap-4 font-serif">
    <div class="flex items-center gap-1"><p>'. $arr['rating'][$i] .'</p> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="text-yellow-500" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg></div>
    <div class="">'. Button::check($arr['price'][$i],$arr['size'][$i]) .'</div>
    </div>
    </a>
    </div>';
  }
  ?>
</section><!-- SECTION  -->
<hr class="mt-4">
<div id="testing-purpose" class="hidden filter-active"></div>
<script src="<?= PATH ?>/src/js/apps-page.js" defer></script>
<?php
require_once('inc/footer.php');
?>