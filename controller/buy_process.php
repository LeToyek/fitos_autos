<?php
include "./database/connection.php";

session_start();

$user_id = $_SESSION['user_id'];
$car_id = $_GET['car_id'];

$query = "INSERT INTO transaksi(id,id_mobil,id_pembeli) VALUES ('','$car_id','$user_id')";

if (mysqli_query($conn, $query)) {
  echo "Data berhasil ditambah <br>";
  header("location:../view/pages/home.php");
} else {
  echo "Data gagal ditambahkan <br>" . mysqli_error($conn);
}
mysqli_close($conn);
