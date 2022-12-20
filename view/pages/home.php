<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/bootstrap-4.5.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="stylesheet" href="../style/home.css" />
  <script type="text/javascript" src="../style/jquery-ui-1.13.2/jquery-3.6.2.min.js"></script>
  <script type="text/javascript" src="../style/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light">
    <img src="../images/logo.png" style="margin-right: 24px" alt="" />
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link nav-link-ltr" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link-ltr" href="jual.php">Jual</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link-ltr" href="garage.php">Garasi</a>
      </li>
    </ul>
    <?php
        session_start();
        if(isset($_SESSION['level'])){
          if($_SESSION['level'] == 'admin'){
            header('Location: admin.php');
          }else if($_SESSION['username']){
            echo '
            <div class="d-flex ml-auto space-between">
              <a class="px-4 my-auto text-dark" href="user_profile.php?username=' . $_SESSION['username'] . '"><p>' . $_SESSION['username'] . '</p></a>
              <a class="logout-btn"href="../../controller/logout_process.php"><button>Logout</button></a>
            </div>
            ';
          }
        }
        else{
          echo '<a class="logout-btn"href="./login.php"><button>Login</button></a>';
        }
      ?>
  </nav>
  <div class="container-fluid px-5 main">
    <div class="row h-100">
      <div class="col-lg-12 w-100 jumbotron"></div>
    </div>
    <div class="sec-container">
      <div class="top d-flex align-center">
        <h5 style="font-weight: 900">Koleksi Mobil</h5>
        <a href="./garage.html">
          <img src="../icons/right-arrow.png" style="
                margin-left: 8px;
                margin-bottom: 4px;
                width: 16px;
                cursor: pointer;
              " alt="" />
        </a>
      </div>
      <div class="bottom mt-2">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4" class="bg-dark"></li>
          </ol>
          <div class="carousel-inner">
            <?php
                include "../../controller/database/connection.php";

                $query = "SELECT * FROM mobil LIMIT 5";
                $result = mysqli_query($conn, $query);
                $i = 0;

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        if($i == 0){
            ?>
            <div class="carousel-item p-2 active">
              <div div class="d-block card-car">
                <div class="nav-card-car">
                  <h3><?= $row['nama'] ?></h3>
                  <h6>Spesifikasi</h6>
                </div>
                <img class="d-block" src="../../controller/<?= $row['foto'] ?>" alt="" />
              </div>
            </div>
            <?php
                        }
            ?>
            <div class="carousel-item p-2">
              <div div class="d-block card-car">
                <div class="nav-card-car">
                  <h4><?= $row['nama'] ?></h4>
                  <h6>Spesifikasi</h6>
                </div>
                <img class="d-block" src="../../controller/<?= $row['foto']?>" alt="" />
              </div>
            </div>
            <?php
                        $i++;
                    }
                } else {
                    echo "0 result";
                }
            ?>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-container">
    <div class="left">
      <h2 style="font-weight: bold">Fitos Autos</h2>
      <p>
        Jual mobil lewat Fitos Autos,<br />
        cepat lakunya, dapat untungnya
      </p>
      <a class="btn-jual text-center" href="jual.php">Jual Sekarang</a>
    </div>

      <img src="../images/right-car.png" alt="" />

  </div>
  <div class="step-jual">
    <h2 style="margin-bottom: 40px">Tata Cara Jual</h2>
    <div class="bot">
      <div class="step-card">
        <h1 style="position: absolute; right: 8px; top: 0px">1</h1>
        <div class="title" style="display: flex; align-items: center; justify-content: center">
          <img src="../icons/phone.png" style="height: 40px; margin-right: 16px" alt="" />
          <h5>Lihat Mobil</h5>
        </div>
        <p>
          Temukan mobil impian anda secara online yang telah kami pilih
          melalui proses inspeksi professional.
        </p>
      </div>
      <div class="step-card">
        <h1 style="position: absolute; right: 8px; top: 0px">2</h1>
        <div class="title" style="display: flex; align-items: center; justify-content: center">
          <img src="../icons/form.png" style="height: 40px; margin-right: 16px" alt="" />
          <h5>
            Pilih & Isi <br />
            Formulir
          </h5>
        </div>
        <p>
          Temukan mobil impian anda secara online yang telah kami pilih
          melalui proses inspeksi professional.
        </p>
      </div>
      <div class="step-card">
        <h1 style="position: absolute; right: 8px; top: 0px">3</h1>
        <div class="title" style="display: flex; align-items: center; justify-content: center">
          <img src="../icons/cashier.png" style="height: 40px; margin-right: 16px" alt="" />
          <h5>Bayar</h5>
        </div>
        <p>
          Temukan mobil impian anda secara online yang telah kami pilih
          melalui proses inspeksi professional.
        </p>
      </div>
    </div>
  </div>
  <div class="ulasan">
    <h3 style="font-weight: bold">Ulasan</h3>
    <h5 style="font-weight: bold">
      Temukan apa yang dikatakan pelanggan Fitos Autos yang telah menjual
      mobil
    </h5>
    <div class="bot">
      <div class="comment-card">
        <h6 class="tanggal">Kamis, 15 Desember 2022</h6>
        <img src="../icons/star.png" alt="" />
        <p>"pokoknya mantap, pelayanannya joss. Recommended banget "</p>
        <h6>Oleh Arif Gaming</h6>
      </div>
      <div class="comment-card">
        <h6 class="tanggal">Kamis, 15 Desember 2022</h6>
        <img src="../icons/star.png" alt="" />
        <p>"pokoknya mantap, pelayanannya joss. Recommended banget "</p>
        <h6>Oleh Arif Gaming</h6>
      </div>
      <div class="comment-card">
        <h6 class="tanggal">Kamis, 15 Desember 2022</h6>
        <img src="../icons/star.png" alt="" />
        <p>"pokoknya mantap, pelayanannya joss. Recommended banget "</p>
        <h6>Oleh Arif Gaming</h6>
      </div>
      <div class="comment-card">
        <h6 class="tanggal">Kamis, 15 Desember 2022</h6>
        <img src="../icons/star.png" alt="" />
        <p>"pokoknya mantap, pelayanannya joss. Recommended banget "</p>
        <h6>Oleh Arif Gaming</h6>
      </div>
    </div>
  </div>
  <div class="container faq">
    <h4>FAQ</h4>
    <div class="questions">
      <div class="card-q">
        <p>Mengapa membeli dari fitos autos?</p>
        <img src="../icons/right-arrow.png" alt="" />
      </div>
      <div class="card-q">
        <p>Apakah aman membeli dari fitos autos?</p>
        <img src="../icons/right-arrow.png" alt="" />
      </div>
      <div class="card-q">
        <p>Jika ada mobil cacat apa yang harus saya lakukan?</p>
        <img src="../icons/right-arrow.png" alt="" />
      </div>
    </div>
  </div>
  <footer class="container">
    <img src="../images/logo.png" width="72px" style="margin-bottom: 8px" alt="" />
    <p class="mt-2">
      Portal E-Commerce Mobil yang terintegrasi <br />dan terbesar di Asia
      Tenggara. Hadir di <br />
      Malaysia, Indonesia, Thailand, dan Singapura
    </p>
    <div class="sosmed-icons mt-3">
      <img src="../icons/instagram.png" alt="" />
      <img src="../icons/facebook.png" alt="" />
      <img src="../icons/linkedin.png" alt="" />
    </div>
  </footer>
  <h6 class="copyright mb-3">
    © 2016-2022 PT Fitos Autos Dilindungi oleh hak cipta
  </h6>
</body>

</html>