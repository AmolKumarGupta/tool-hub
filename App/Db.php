<?php
namespace App;

class Db{
    public $conn;
    public function __construct(){
        $this->conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
        if(!$this->conn)
        {
            die('connection erupted;'. mysqli_connect_error());
        }
    }
}
?>