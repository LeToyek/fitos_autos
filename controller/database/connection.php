<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "fitos_autos";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn){
  die("alert('Gagal tersambung dengan database.')</script>");
}
?>