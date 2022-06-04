<?php
require_once("../init.php");
use App\Controllers\Products;
use Helper\Filter\Filter;
use Helper\Msg;
$res = Products::where('id','=',$_GET['d']);
unlink('../'.$res['img'][0]);
return Products::deleteById($_GET['d']);
?>