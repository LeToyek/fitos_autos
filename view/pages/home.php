<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="../style/bootstrap-4.5.3-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/home.css" />
    <script type="text/javascript" src="../jquery.js"></script>
    <script
      type="text/javascript"
      src="../style/bootstrap-4.5.3-dist/js/bootstrap.js"
    ></script>
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
          <a class="nav-link nav-link-ltr" href="jual.php">Sewa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="garage.php">Garasi</a>
        </li>
      </ul>
      <button onclick="location.href = '../../controller/logout_process.php'">Logout</button>
      <div class="img-container"></div>
    </nav>
    <div class="container-fluid px-5 main">
      <div class="row h-100">
        <div class="col-lg-12 w-100 jumbotron"></div>
      </div>
      <!-- <div class="d-flex justify-content-center">
      <img src="../images/chirstmas.png" alt="chirstmas">
    </div> -->
      <!-- <div class="sec-container">
      <div class="top" style="display: flex; align-items: center;">
        <h5 style="font-weight: 900;">Jual Mobil</h5>
        <img src="../icons/right-arrow.png" style="margin-left: 8px; margin-bottom: 4px; width: 16px; cursor: pointer;"
          alt="">
      </div>
      <div class="bottom">
        <div class="my-container">
          <div class="card-car">
            <div class="nav-card-car">
              <h6>Spesifikasi</h6>
              <h4>Mobil Mewah</h4>
            </div>
            <img src="../images/left-car.png" alt="">
          </div>
          <div class="card-car">
            <div class="nav-card-car">
              <h6>Spesifikasi</h6>
              <h4>Mobil Mewah</h4>
            </div>
            <img src="../images/left-car.png" alt="">
          </div>
          <div class="card-car">
            <div class="nav-card-car">
              <h6>Spesifikasi</h6>
              <h4>Mobil Mewah</h4>
            </div>
            <img src="../images/left-car.png" alt="">
          </div>
          <div class="card-car">
            <div class="nav-card-car">
              <h6>Spesifikasi</h6>
              <h4>Mobil Mewah</h4>
            </div>
            <img src="../images/left-car.png" alt="">
          </div>
        </div>
      </div>
    </div> -->
      <div class="sec-container">
        <div class="top d-flex align-center">
          <h5 style="font-weight: 900">Koleksi Mobil</h5>
          <a href="./garage.html">
            <img
              src="../icons/right-arrow.png"
              style="
                margin-left: 8px;
                margin-bottom: 4px;
                width: 16px;
                cursor: pointer;
              "
              alt=""
            />
          </a>
        </div>
        <div class="bottom position-relative">
          <div class="wrapper squares mt-3">
            <div class="d-block card-car">
              <div class="nav-card-car">
                <h6>Spesifikasi</h6>
                <h4>Mobil Mewah</h4>
              </div>
              <img src="../images/left-car.png" alt="" />
            </div>
            <div class="d-block card-car">
              <div class="nav-card-car">
                <h6>Spesifikasi</h6>
                <h4>Mobil Mewah</h4>
              </div>
              <img src="../images/left-car.png" alt="" />
            </div>
            <div class="d-block card-car">
              <div class="nav-card-car">
                <h6>Spesifikasi</h6>
                <h4>Mobil Mewah</h4>
              </div>
              <img src="../images/left-car.png" alt="" />
            </div>
            <div class="d-block card-car">
              <div class="nav-card-car">
                <h6>Spesifikasi</h6>
                <h4>Mobil Mewah</h4>
              </div>
              <img src="../images/left-car.png" alt="" />
            </div>
            <div class="d-block card-car">
              <div class="nav-card-car">
                <h6>Spesifikasi</h6>
                <h4>Mobil Mewah</h4>
              </div>
              <img src="../images/left-car.png" alt="" />
            </div>
          </div>
          <!-- <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-car">
                <div class="nav-card-car">
                  <h6>Spesifikasi</h6>
                  <h4>Mobil Mewah</h4>
                </div>
                <img class="d-block" src="../images/left-car.png" alt="">
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-car">
                <div class="nav-card-car">
                  <h6>Spesifikasi</h6>
                  <h4>Mobil Mewah</h4>
                </div>
                <img class="d-block" src="../images/left-car.png" alt="">
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-car">
                <div class="nav-card-car">
                  <h6>Spesifikasi</h6>
                  <h4>Mobil Mewah</h4>
                </div>
                <img class="d-block" src="../images/left-car.png" alt="">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
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
        <button class="btn-jual">Jual Sekarang</button>
      </div>

      <img src="../images/right-car.png" alt="" />
    </div>
    <div class="step-jual">
      <h2 style="margin-bottom: 40px">Tata Cara Jual</h2>
      <div class="bot">
        <div class="step-card">
          <h1 style="position: absolute; right: 8px; top: 0px">1</h1>
          <div
            class="title"
            style="display: flex; align-items: center; justify-content: center"
          >
            <img
              src="../icons/phone.png"
              style="height: 40px; margin-right: 16px"
              alt=""
            />
            <h5>Lihat Mobil</h5>
          </div>
          <p>
            Temukan mobil impian anda secara online yang telah kami pilih
            melalui proses inspeksi professional.
          </p>
        </div>
        <div class="step-card">
          <h1 style="position: absolute; right: 8px; top: 0px">2</h1>
          <div
            class="title"
            style="display: flex; align-items: center; justify-content: center"
          >
            <img
              src="../icons/form.png"
              style="height: 40px; margin-right: 16px"
              alt=""
            />
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
          <div
            class="title"
            style="display: flex; align-items: center; justify-content: center"
          >
            <img
              src="../icons/cashier.png"
              style="height: 40px; margin-right: 16px"
              alt=""
            />
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
      <img
        src="../images/logo.png"
        width="72px"
        style="margin-bottom: 8px"
        alt=""
      />
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
