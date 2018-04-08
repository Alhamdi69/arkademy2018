<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "arkademy";


$conn = mysqli_connect($host,$user,$pass,$database);
if (!$conn){
	echo 'Tidak dapat terhubung ke database';
}
?>