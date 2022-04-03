<?php
require_once("init.php");
use App\Controllers\Products;
if(!isset($_GET['i']) || !Products::where('id','=',$_GET['i'])){
  header("location:index.php");
  exit();
}
require_once('inc/header.php');
$arr = Products::where('id','=',$_GET['i']);
  echo $arr['id'][0];
  echo $arr['name'][0];
  echo $arr['description'][0];
  echo $arr['short_note'][0];
  echo $arr['size'][0];
  echo $arr['price'][0];
  echo $arr['developer'][0];
  echo $arr['dwn_link'][0];
?>


<?php
require_once('inc/footer.php');
?>