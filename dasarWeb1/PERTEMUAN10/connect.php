<?php
$host = "localhost";
$port = "3306";
$username = "root";
$password = ""; 
$database = "prakwebdb"; 

$connect = new mysqli($host, $username, $password, $database, $port);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
?>
