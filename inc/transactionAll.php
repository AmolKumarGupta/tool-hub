<?php
require_once("../init.php");
use App\Controllers\Dists;
use Helper\Msg;
if(!isset($_SESSION['id'])){
  Msg::set('user_err','You should login first');
  header('location : ../login.php');
  exit();
}
$prod_ids = $_POST['prod_id'];
foreach($prod_ids as $prod_id){
  $res = Dists::insert([
    "user_id"=>$id,
    "product_id"=>$prod_id
  ]);
  if(!$res){
    echo 'error in inserting data in auth';
    exit();
  }
}
?>
<?php
// header('location:../product.php?i='.$_POST['prod_id']);
?>  
amol
<script>
  localStorage.removeItem('cart');
  location.href = "../index.php";
</script>