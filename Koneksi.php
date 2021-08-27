<?php

// Class database (koneksi database)
class Database{

// Property
var $host = "localhost";
var $username = "root";
var $password = "";
var $database = "tugas_pl2";
var $connection;

// Method koneksi kedalam database

function Connect(){
$this->connection=mysqli_connect($this->host, $this->username, $this->password,$this->database);
return $this->connection;

}
}

?>