<?php
require_once("init.php");
use App\Controllers\Products;
use Helper\Buyable\Buyable;
use Helper\Unit;
use Helper\Msg;
if(!isset($_GET['i']) || !Products::where('id','=',$_GET['i'])){
  header("location:index.php");
  exit();
}
$arr = Products::where('id','=',$_GET['i']);
if( Buyable::is($arr['price'][0])){
	if(!isset($_SESSION['id'])){
		Msg::set('user_err','You should login first');
		header('location: login.php');
	}
}
require_once('inc/header.php');
//img entry here
  // echo $arr['id'][0];
  echo '<main>
	<div class="sm:flex sm:justify-center m-4">
  <div class="flex justify-center h-60 overflow-clip">
  <a class="flex flex-col items-center gap-2 w-[69%] sm:w-auto h-full sm:h-60 px-8 sm:px-auto p-4 " >';
  if(pathinfo($arr['img'][0],PATHINFO_EXTENSION)!='svg'){
    echo '<div class="mx-6 my-auto bg-cover">';
    echo '<img src="'. $arr['img'][0] .'" alt="products" width="100" height="100" class="">';
  }else{
    echo '<div class="my-auto scale-150 m-6">';
    include($arr['img'][0]);
  }
  echo '
    </div>
  </a>
  </div>';
?>
  <div class="my-auto space-y-2">
    <div>
      <div class="text-2xl font-bold">
        <?= $arr['name'][0] ?>
      </div>
      <div class="flex gap-2 text-sm">
        <div class="text-yellow-800 dark:text-yellow-500">
					<?= $arr['developer'][0] ?>
				</div>
        <?= '<div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="text-yellow-500" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg><p>'. $arr['rating'][0] .'</p></div>' ?>
      </div>
    </div>
    <div>
      <?php
      if(!Buyable::is($arr['price'][0]) || Buyable::isBought($id,$arr['id'][0])){
        echo '<a href="'. $arr['dwn_link'][0] .'" download><button class="p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">download</button></a>';
      }else{
        echo '<button id="btn-buy" class="p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">Buy &#8377 '. number_format($arr['price'][0],2) .'</button> &nbsp;';
        echo '<button class="p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">Add to Cart</button>';
      }
      ?>
    </div>
  </div>
</div><!-- ENDS HERE -->
<div class="m-4 sm:w-[75%] sm:mx-auto">
  <?= $arr['description'][0] ?>
</div>
<div class="m-4 sm:w-[75%] sm:mx-auto">
  Download size: <?= Unit::getSize($arr['size'][0]) ?>
</div>

<script src="<?= PATH ?>/src/js/modal.js" defer></script>
<div class="blur-sm opacity-25"></div>
<hr>
<?php
require_once('inc/footer.php');
?>
</main><!-- MAIN ENDS HERE -->
<div id="form-trans" class="hidden absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-fit p-4 border-2 border-gray-500 rounded-xl ">
<form action="inc/transaction.php" method="post" class="flex flex-col gap-4 my-4">
	<h2>Payment details</h2>
	<input type="hidden" name="prod_id" value="<?= $arr['id'][0] ?>">
	<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="Credit Card Number" maxlength="12" placeholder="Card number" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
	<div class="">
		<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="should be a date" maxlength="2" placeholder="MM" class="w-12 p-2 border-2 border-blue-300 rounded text-sky-700" required>
		<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="should be a date" maxlength="4" placeholder="YYYY" class="w-16 p-2 border-2 border-blue-300 rounded text-sky-700" required>
	</div>
	
	<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="CVV" maxlength="4" placeholder="CVV" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
	<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="Zip code" maxlength="6" placeholder="Zip code" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
	<input type="submit" value="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">
</form>
</div>