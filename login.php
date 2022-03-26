<?php
require_once('init.php');
?>
<?php
$data = $User->all();
echo $data['id'];
?>

<?php
require_once('inc/footer.php');
?>