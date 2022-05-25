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
	<?php if(isset($_SESSION['role'])  && $_SESSION['role']=='admin'){ ?>
	<?php } ?>
	<?php
	echo '
	<h1 class="text-2xl font-bold font-serif m-4 text-center">'. ucfirst($arr['name'][0]) .'</h1>
	<div class="space-y-2 p-4 break-all">
		<h2 class="font-medium">Contact Infomation</h2>
		<div class="space-y-4">
			<div class="sm:flex">
				<div class="sm:w-[150px] text-blue-600">Mobile No.</div>
				<div class="">'. $arr['mobile'][0] .'</div>
			</div>
			<div class="sm:flex">
				<div class="sm:shrink-0 sm:w-[150px] text-blue-600">Address</div>				
				<p class="">'. $arr['h_no'][0] .' street no.'. $arr['st_no'][0] .' Block-'. $arr['block'][0] .' near '. ucfirst($arr['landmark'][0]) .' '. ucfirst($arr['area'][0]) .' '. $arr['city'][0] .' '. ucfirst($arr['state'][0]) . '</p>
			</div>
			<div class="sm:flex">
				<div class="sm:shrink-0 sm:w-[150px] text-blue-600">E-mail</div>
				<p class="">'. $arr['email'][0] .'</p>
			</div>
		</div>
	</div>';
	?>
</main>
<hr>
<?php
require_once('../inc/footer.php');
?>