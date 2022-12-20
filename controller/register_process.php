<?php
include './database/connection.php';

session_start();
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $conf_password = md5($_POST['conf_password']);
  $telp = $_POST['telp'];
  if ($password == $conf_password) {
    $query = "SELECT username FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);
    if ($check > 0) {
      header("Location:../view/pages/register.php?error=username_used");
    } else {
      $insertQuery = "INSERT INTO user VALUES ('','$username','$password','$telp','1')";
      if(mysqli_query($conn,$insertQuery)){
        header('Location:../view/pages/login.php');
      }
    }
  }
}
