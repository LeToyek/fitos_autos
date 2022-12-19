<?php
  include "./database/connection.php";

  session_start();
  $statusMsg = "";

  $sql = "DELETE FROM mobil WHERE id = '" . $_GET['id'] . "'";
  $result = mysqli_query($conn,$sql);

  if($result){
    header("Location:../view/pages/user_profile.php?username=" . $_SESSION['username'] . "&status=success_delete_mobil");
  } else {
    echo "Terjadi Error ketika melakukan upload file, silahkan upload file kembali";
  }

  mysqli_close($conn);