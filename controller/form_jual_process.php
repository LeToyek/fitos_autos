<?php 
  include "./database/connection.php";

  session_start();
  $statusMsg = "";

  if(isset($_POST["nama"]) && isset($_POST["merk"]) && isset($_POST["price"]) 
    && isset($_POST["deskripsi"]) && isset($_POST["alamat"]) && isset($_POST["transmisi"])
    && isset($_POST["jumlah_penumpang"]) && isset($_POST["tipe"]) && isset($_POST["tahun"]) && isset($_POST["kilometer"])
    && isset($_POST["pajak_date"])){
    $id_penjual = $_SESSION['user_id'];
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $price = $_POST['price'];
    $target_path = "uploads/";
    $target_path = $target_path . basename($_FILES['foto']['name']);
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $transmisi = $_POST['transmisi'];
    $jumlah_penumpang = $_POST['jumlah_penumpang'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];
    $kilometer = $_POST['kilometer'];
    $pajak_date = $_POST['pajak_date'];
    echo $pajak_date;
    
    setcookie("nama", $_POST["nama"]);
    setcookie("merk", $_POST["price"]);
    setcookie("deskripsi", $_POST["deskripsi"]);
    setcookie("alamat", $_POST["alamat"]);
    setcookie("transmisi", $_POST["transmisi"]);
    setcookie("jumlah_penumpang", $_POST["jumlah_penumpang"]);
    setcookie("tipe", $_POST["tipe"]);
    setcookie("tahun", $_POST["tahun"]);
    setcookie("kilometer", $_POST["kilometer"]);
    setcookie("pajak_date", $_POST["pajak_date"]);

  }else{
    echo "terdapat data tidak berhasil post";
  }

  $orgDate = $pajak_date;  
  $newDate = date("Y-m-d", strtotime($orgDate));  
  
  $sql = "INSERT INTO mobil VALUES (
        '','$id_penjual', '$nama', '$merk', '$price', '$target_path'
        , '$deskripsi', '$alamat', '$transmisi'
        , '$jumlah_penumpang', '$tipe', '$tahun'
        , '$kilometer', '$newDate')";

  if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
    if (mysqli_query($conn, $sql)) {
      echo "berhasil upload & tambah data";
      setcookie("nama", "", time()-3600);
      setcookie("merk", "", time()-3600);
      setcookie("deskripsi", "", time()-3600);
      setcookie("alamat", "", time()-3600);
      setcookie("transmisi", "", time()-3600);
      setcookie("jumlah_penumpang", "", time()-3600);
      setcookie("tipe", "", time()-3600);
      setcookie("tahun", "", time()-3600);
      setcookie("kilometer", "", time()-3600);
      setcookie("pajak_date", "", time()-3600);
    } else {
      echo "Data gagal ditambahkan <br>" . mysqli_error($conn);
      echo $sql;
    }
  } else {
    echo "Terjadi Error ketika melakukan upload file, silahkan upload file kembali";
  }

  mysqli_close($conn);
