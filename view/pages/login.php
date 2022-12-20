<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/login.css" />
  <script src="../jquery.js"></script>
    
  </script>
  <title>Document</title>
</head>

<body class="body-login">
  <div class="container">
    <div class="left">
      <img src="" alt="" />
      <h3>MOBIL MEVVAH AJA</h3>
      <img src="../images/main_car.png" alt="mobil mewah" class="img-car" />
    </div>
    <div class="right">
      <h2>Login</h2>
      <form id="formKu" action="../../controller/login_process.php" method="POST">
        <div class="wrapper-input">
          <input type="text"
          name="username"
          class="input-login username" id="username" placeholder="Username" />
          <input type="password"
          name="password" class="input-login password" id="password" placeholder="Password" />
        </div>
        <input type="submit" class="btn-submit-login" value="Login" id="submit" name="submit" />
        <p class="regis_link">Belum punya akun? <a href="register.php">
          Daftar di sini
          </a></p>
        
      </form>
    </div>
  </div>
</body>

</html>