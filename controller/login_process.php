<?php 
  include "./database/connection.php";

  if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
    }
  
  if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($conn,$query);
    $check = mysqli_num_rows($result);

    if ($check>0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location:../view/pages/home.html");
    }else{
      var_dump($check);
      header("Location:../view/pages/login.php?error=failed");
    }
  }
?>

