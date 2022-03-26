<?php
require_once('init.php');
?>
<?php
use App\Models\Product;
$res = $Product->all();
while($row = mysqli_fetch_assoc($res)){
  echo $row['name'];
  echo $row['description'];
  echo $row['short_note'];
  echo $row['size'];
  echo $row['price'];
  include($row['img']);
}
?>


<?php
require_once('inc/footer.php');
?>