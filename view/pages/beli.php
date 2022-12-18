<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beli</title>
    <link
      rel="stylesheet"
      href="../style/bootstrap-4.5.3-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/beli.css" />
    <script type="text/javascript" src="../jquery.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light">
      <img src="../images/logo.png" style="margin-right: 24px" alt="" />
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home</a>
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
    <main>
      <?php 
        include "../../controller/database/connection.php";

        $id = $_GET['id'];
        $query = "SELECT * FROM mobil WHERE id = '$id' ";
        $get_result = mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($get_result);
      ?>
      <div class="container m-card">
        <div class="left">
          <h2><?php echo $result['nama']?></h2>
          <h5>Start from <b>IDR <?php echo $result['harga']?></b></h5>
          <p>
            <?php echo $result['deskripsi']?>
          </p>
          <button class="submit-btn" onclick="location.href = '../../controller/buy_process.php?car_id=<?php echo $_GET['id']; ?>'">Buy</button>
        </div>
        <div class="right">
          <img src="../../controller/<?php echo $result['foto']?>" alt="foto mobil">
        </div>
      </div>
    </main>
  </body>
</html>
