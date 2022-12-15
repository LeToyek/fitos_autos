<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/login.css" />
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
        <form action="../../controller/login_process.php" method="get">
          <div class="wrapper-input">
            <input
              type="text"
              class="input-login username"
              id="username"
              placeholder="Username"
            />
            <input
              type="password"
              class="input-login password"
              id="password"
              placeholder="Password"
            />
          </div>
          <input type="submit" class="btn-submit-login" value="Login" />
        </form>
      </div>
    </div>
  </body>
</html>
