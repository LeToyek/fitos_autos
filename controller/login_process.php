<?php 
  include "./database/connection.php";

  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: home.php");
  }
  
  if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($conn,$query);
    $check = mysqli_num_rows($result);
    if ($check>0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['level'] = $row['level'];
      header("Location:../view/pages/home.php");
    }else{
      var_dump($check);
      header("Location:../view/pages/login.php?error=failed");
    }
  }
?>

