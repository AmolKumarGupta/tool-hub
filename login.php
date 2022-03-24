<?php
require_once('init.php');
?>
<?php
$data = $user->all();
echo $data['id'];
?>

<?php
require_once('inc/footer.php');
?>