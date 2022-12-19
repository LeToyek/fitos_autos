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
    if($_FILES['foto']['size'] != 0 || $_FILES['foto']['name'][0] != ""){
      echo "aneh";
      $target_path = $target_path . basename($_FILES['foto']['name']);
    }
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $transmisi = $_POST['transmisi'];
    $jumlah_penumpang = $_POST['jumlah_penumpang'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];
    $kilometer = $_POST['kilometer'];
    $pajak_date = $_POST['pajak_date'];
    echo $pajak_date;
    

  }else{
    echo "terdapat data tidak berhasil post";
  }

  $orgDate = $pajak_date;  
  $newDate = date("Y-m-d", strtotime($orgDate));  
  
  $sqlUpload = "UPDATE mobil SET nama = '$nama', merek = '$merk', harga = '$price', foto = '$target_path'
                , deskripsi = '$deskripsi', lokasi = '$alamat', transmisi = '$transmisi', jml_penumpang = '$jumlah_penumpang',
                tipe = '$tipe', tahun = '$tahun', kilometer = '$kilometer', pajak_jalan_exp = '$newDate' WHERE id = " . $_GET['id'];

  $sqlNonUpload = "UPDATE mobil SET nama = '$nama', merek = '$merk', harga = '$price',deskripsi = '$deskripsi', 
                  lokasi = '$alamat', transmisi = '$transmisi', jml_penumpang = '$jumlah_penumpang',
                  tipe = '$tipe', tahun = '$tahun', kilometer = '$kilometer', pajak_jalan_exp = '$newDate' WHERE id = " . $_GET['id'];
        
  if($_FILES['foto']['size'] != 0 || $_FILES['foto']['name'][0] != ""){ 
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
      if (mysqli_query($conn, $sqlUpload)) {
        echo "berhasil upload & tambah data";
        header("location:../view/pages/user_profile.php?username=". $_SESSION['username'] . "&status=success_update_mobil");
      } else {
        echo "Data gagal ditambahkan <br>" . mysqli_error($conn);
        echo $sql;
      }
    } else {
      echo "Terjadi Error ketika melakukan upload file, silahkan upload file kembali";
    }
  }else{
    if (mysqli_query($conn, $sqlNonUpload)) {
      echo "berhasil upload & tambah data";
      header("location:../view/pages/user_profile.php?username=". $_SESSION['username'] . "&status=success_update_mobil");
    } else {
      echo "Data gagal ditambahkan <br>" . mysqli_error($conn);
      echo $sql;
    }
  }
  
  mysqli_close($conn);