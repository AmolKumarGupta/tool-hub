<?php
require_once('init.php');
?>

<section class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 w-full h-full p-4">
  <?php
  use App\Controllers\Products;
  $arr = Products::all();
  for($i=0; $i<count($arr['id']); $i++){
    echo '<div class="flex justify-center">
    <div class="flex flex-col items-center gap-2 w-3/4 sm:w-auto h-60 p-4 border-2 border-gray-500 rounded-xl">
    <div class="scale-150 m-6">';
    include($arr['img'][$i]);
    echo '</div>
    <div class="font-sans font-medium text-xl">'. $arr['name'][$i] .'</div>
    <div class="flex gap-4 font-serif">
    <div class="flex items-center gap-1"><p>'. $arr['rating'][$i] .'</p> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="text-yellow-500" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg></div>
    <div class="">'. $arr['size'][$i] .'</div>
    </div>
    </div>
    </div>';
  }
  ?>
</section>

<?php
require_once('inc/footer.php');
?>