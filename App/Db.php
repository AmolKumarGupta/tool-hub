<?php

namespace App;

class Db{
    private $host;
    private $username;
    private $password;
    private $database;
    public function __construct($host,$username,$password,$database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
}
?>