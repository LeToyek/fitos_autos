<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="../style/bootstrap-4.5.3-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/jual.css">
    <link rel="stylesheet" href="../style/jquery-ui-1.13.2/jquery-ui.css">
    <script src="../jquery.js"></script>
    <script src="../style/jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#date_ex").datepicker();
        });
    </script>
  </head>
  <body>
    <?php
      session_start();
      if(!$_SESSION['username'] || $_SESSION['level'] == 1){
      }

    ?>
    <nav class="navbar navbar-expand-sm navbar-light">
      <img src="../images/logo.png" style="margin-right: 24px" alt="" />
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="home.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link nav-link-ltr" href="jual.php">Jual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="garage.php">Garasi</a>
        </li>
      </ul>
      <?php
        if(isset($_SESSION['level'])){
          if($_SESSION['level'] == 'admin'){
            header('Location: admin.php');
          }else if($_SESSION['username']){
            echo '
            <div class="d-flex ml-auto space-between">
              <a class="px-4 my-auto text-dark" href="user_profile.php"><p>' . $_SESSION['username'] . '</p></a>
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
    
    <form class="needs-validation container p-5 mt-5" enctype="multipart/form-data" action="../../controller/form_jual_process.php" method="POST" novalidate>
      <div class="statis" style="margin-bottom: 24px;">
        <div class="title">
          <h4 class="mr-2 mb-2">Formulir Penjualan Mobil</h4>
          <img src="../icons/car.png" alt="" />
        </div>
        <p>
          Harap isi formulir dengan benar
        </p>
      </div>
      <div class="form-row mt-2">
        <div class="form-group col-md-8">
          <label for="validationCustom01">Nama Mobil</label>
          <input
            name="nama"
            type="text"
            class="form-control"
            id="validationCustom01"
            placeholder="Nama"
            value="<?php echo (isset($_COOKIE['nama'])) ? $_COOKIE['nama'] : ''?>"
            required
          />
          <div class="invalid-feedback">Nama Harus diisi</div>
        </div>
        <div class="form-group col-md-4">
          <label>Merk Mobil</label>
          <input
            name="merk"
            type="text"
            class="form-control"
            id="inputPassword4"
            placeholder="Merk"
            value="<?php echo (isset($_COOKIE['merk'])) ? $_COOKIE['merk'] : ''?>"
            required
          />
          <div class="invalid-feedback">Merk Harus diisi</div>
        </div>
      </div>
      <div class="form-group mt-2">
        <label for="inputHarga">Harga</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Rp</div>
          </div>
          <input
            type="text"
            name="price"
            class="form-control"
            id="inlineFormInputGroupUsername"
            placeholder="10000000"
            required
            value="<?php echo (isset($_COOKIE['harga'])) ? $_COOKIE['harga'] : ''?>"
          />
          <div class="invalid-feedback">Harga masih kosong</div>
        </div>
      </div>
      <div class="form-group mt-2 d-flex flex-column">
        <label for="formFileSm" class="form-label">Foto Mobil</label>
        <input
          type="file"
          name="foto"
          class="w-25"
          id="formFileSm"
          required
        />
        <div class="invalid-feedback">Foto masih kosong</div>
      </div>
      <div class="form-group mt-2">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea
          name="deskripsi"
          class="form-control"
          id="exampleFormControlTextarea1"
          rows="3"
          value="<?php echo (isset($_COOKIE['deskripsi'])) ? $_COOKIE['deskripsi'] : ''?>"
        ></textarea>
      </div>
      <div class="form-group mt-2">
        <label for="inputEmail4">Alamat</label>
        <input
          name="alamat"
          type="text"
          class="form-control"
          id="inputEmail4"
          placeholder="Alamat"
          value="<?php echo (isset($_COOKIE['alamat'])) ? $_COOKIE['alamat'] : ''?>"
          required
        />
        <div class="invalid-feedback">Alamat harus diisi</div>
      </div>
      <div class="form-row">
        <div class="form-group mt-2 col-md-5">
          <label for="inputState">Transmisi</label>
          <select 
          name="transmisi"
          id="inputState" class="form-control">
            <option selected>Manual</option>
            <option>Automatic</option>
          </select>
        </div>
        <div class="form-group mt-2 col-md-2">
          <label for="inputState">Jumlah Penumpang</label>
          <select
          name="jumlah_penumpang" 
          id="inputState" class="form-control">
            <option value="2" selected>2</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="7&keatas">7 dan keatas</option>
          </select>
        </div>
        <div class="form-group mt-2 col-md-5">
          <label for="inputState">Tipe</label>
          <select 
          name="tipe"
          id="inputState" class="form-control">
            <option selected>Sedan</option>
            <option value="SUV">SUV</option>
            <option value="MPV">MPV</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Coupe">Coupe</option>
            <option value="Truck">Truck</option>
            <option value="Wagon">Wagon</option>
            <option value="Convertible">Convertible</option>
            <option value="Van">Van</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group mt-2 col-md-4">
          <label for="validationCustom01">Tahun</label>
          <input
          name="tahun"
            type="text"
            class="form-control"
            id="validationCustom01"
            placeholder="2024"
            required
            value="<?php echo (isset($_COOKIE['tahun'])) ? $_COOKIE['tahun'] : ''?>"
          />
          <div class="invalid-feedback">Tahun pembelian harus diisi</div>
        </div>
        <div class="form-group mt-2 col-md-4">
          <label for="validationCustom02">Kilometer</label>
          <input
          name="kilometer"
            type="text"
            class="form-control"
            id="validationCustom02"
            placeholder="1999"
            value="<?php echo (isset($_COOKIE['kilometer'])) ? $_COOKIE['kilometer'] : ''?>"
            required
          />
          <div class="invalid-feedback">Kilometer belum diisi</div>

        </div>
        <div class="form-group mt-2 col-md-4">
          <label for="validationCustom02">Pajak Jalan Exp</label>
          <!-- <input
          name="pajak_date"
            class="form-control"
            id="datepicker"
            placeholder="2 Desember 2015"
            required
          /> -->
          <input name="pajak_date" class="form-control" type="text" id="date_ex">
          <div class="invalid-feedback">Pajak masih kosong</div>
        </div>
      </div>
      <div class="form-group mt-2">
        <div class="form-check">
          <div>
            <input class="form-check-input" type="checkbox" id="gridCheck" required />
            <label class="form-check-label" for="gridCheck"> Saya yakin dengan formulir yang telah saya isi </label>
          </div>
          <div class="mt-2">
            <input class="form-check-input" type="checkbox" id="gridApprove" required />
            <label class="form-check-label" for="gridApprove"> Saya setuju dengan syarat dan ketentuan yang berlaku </label>
          </div>
          <div class="invalid-feedback">Checkbox harus dicentang</div>
        </div>
      </div>
      <button type="submit" class="my-btn-submit mt-2">Kumpulkan</button>
    </form>
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
    
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";
        window.addEventListener(
          "load",
          function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                form.addEventListener(
                  "submit",
                  function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              }
            );
          },
          false
        );
      })();
    </script>
  </body>
</html>
