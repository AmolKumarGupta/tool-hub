<?php
require_once("../init.php");
use App\Controllers\Products;
use Helper\Filter\Filter;
use Helper\Msg;

return Products::deleteById($_GET['d']);
?>