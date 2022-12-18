<?php 
  include "./database/connection.php";

  session_start();
  $statusMsg = "";

  $id_penjual = $_SESSION['user_id'];
  $nama = $_POST['nama'];
  $merk = $_POST['merk'];
  $price = $_POST['price'];
  $foto = $_POST['foto'];
  $deskripsi = $_POST['deskripsi'];
  $alamat = $_POST['alamat'];
  $transmisi = $_POST['transmisi'];
  $jumlah_penumpang = $_POST['jumlah_penumpang'];
  $tipe = $_POST['tipe'];
  $tahun = $_POST['tahun'];
  $kilometer = $_POST['kilometer'];
  $pajak_date = $_POST['pajak_date'];

  $sql = "INSERT INTO mobil('id','id_penjual','nama','merek','harga'
      ,'foto','deskripsi','lokasi','transmisi'
      ,'jml_penumpang','tipe','tahun',kilometer'
      ,'pajak_jalan_exp') VALUES (
        NULL,'1', '$nama', '$merk', '$price', '$foto'
        , '$deskripsi', '$alamat', '$transmisi'
        , '$jumlah_penumpang', '$tipe', '$tahun'
        , '$kilometer', '$pajak_date')";
  if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambah <br>";
    } else {
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
