<?php 
  include "./database/connection.php";

  session_start();
  $statusMsg = "";

  if(isset($_POST["username"]) && isset($_POST["no_hp"])){
    $username = $_POST["username"];
    $no_hp = $_POST["no_hp"];
  }else{
    echo "terdapat data tidak berhasil post";
  }
 
  $sql = "UPDATE user SET username = '$username', no_hp = '$no_hp' WHERE id = '" . $_SESSION['user_id']. "'";
  $result = mysqli_query($conn,$sql);

  if($result){
    header("Location:../view/pages/user_profile.php?username=" . $_SESSION['username'] . "&status=success_update");
  } else {
    echo "Terjadi Error ketika melakukan upload file, silahkan upload file kembali";
  }

  mysqli_close($conn);