<?php
require_once("../init.php");
use App\Controllers\Products;
use Helper\Filter\Filter;
use Helper\Msg;

if(isset($_POST['submit']) && !empty($_FILES['image']['name'])){
  $target_dir = dirname(dirname(__FILE__)) . "/assets/uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $imagelink = 'assets/uploads/'. basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
      die();
    }
  }
}


  if( isset($imagelink) ){
    $_POST['img'] = $imagelink;
  }else{
    $_POST['img'] = $_POST['imageifnotuploaded'];
  }
  // var_dump($_POST);
  unset($_POST['imageifnotuploaded']);
  unset($_POST['submit']);
  $data = Filter::data($_POST);
  // var_dump($data);
  $cnt = Products::where('id','=',$_GET['id']);
  // var_dump($cnt);
  if($cnt){
    foreach($data as $col=>$val){
      Products::updateById($col, $val, $_GET['id']);
    }
  }
  else{
    Msg::set('err',"Software's name Already Exists.");
    header("Location: edit-product.php");
    die();
  }
header("Location:edit-product.php?id=".$_GET['id'] );
?>