<?php
require_once('init.php');
?>
<?php
use App\Controllers\Products;
echo "<pre>";
var_dump(Products::all());
echo "</pre>";
?>


<?php
require_once('inc/footer.php');
?>