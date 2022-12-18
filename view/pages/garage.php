<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Garasi</title>
  <link rel="stylesheet" href="../style/bootstrap-4.5.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="stylesheet" href="../style/garage.css">
</head>

<body>
  <?php
  include "../../controller/database/connection.php";

  $query = "SELECT * FROM mobil ";
  $result = mysqli_query($conn, $query);
  ?>
  <nav class="navbar navbar-expand-sm navbar-light">
    <img src="../images/logo.png" style="margin-right: 24px" alt="" />
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jual.php">Jual</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="garage.php">Garasi</a>
      </li>
    </ul>
    <button onclick="location.href = '../../controller/logout_process.php'">Logout</button>
    <div class="img-container"></div>
  </nav>
  <div class="container main">
    <div class="title">
      <h5>Koleksi Mobil Kami</h5>
      <img src="../icons/car.png" alt="" />
    </div>
    <div class="bottom">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
      ?>
          <div class="card">
            <img class="img-car" src="../../controller/<?php echo $row['foto']?>" alt="fotonya">
            <div class="wrapper-btn">
              <button onclick="location.href = 'beli.php?id=<?php echo $row['id']?>'">Check Out</button>
            </div>

            <div class="bottom">
              <div class="left">
                <h6><?php echo $row['nama']?></h6>
                <p>Start from <b>IDR <span><?php echo $row['harga']?></span></b></p>
              </div>
              <div class="right">
                <img class="logo-car" src="../images/lambo.png" alt="">
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "0 result";
      }
      ?>
      
      <div class="card">
        <img class="img-car" src="../images/aven.png" alt="">
        <div class="wrapper-btn">
          <button>Check Out</button>
        </div>

        <div class="bottom">
          <div class="left">
            <h6>Lamborghini aventador</h6>
            <p>Start from <b>IDR 8.000.000.000</b></p>
          </div>
          <div class="right">
            <img class="logo-car" src="../images/lambo.png" alt="">
          </div>
        </div>
      </div>

    </div>
    <footer class="container">
      <img src="../images/logo.png" width="72px" style="margin-bottom: 8px" alt="" />
      <p>
        Portal E-Commerce Mobil yang terintegrasi <br />dan terbesar di Asia
        Tenggara. Hadir di <br />
        Malaysia, Indonesia, Thailand, dan Singapura
      </p>
      <div class="sosmed-icons">
        <img src="../icons/instagram.png" alt="" />
        <img src="../icons/facebook.png" alt="" />
        <img src="../icons/linkedin.png" alt="" />
      </div>
    </footer>
    <h6 class="copyright">
      © 2016-2022 PT Fitos Autos Dilindungi oleh hak cipta
    </h6>
    <script>

    </script>
</body>

</html>