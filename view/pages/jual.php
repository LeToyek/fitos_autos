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
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-light">
      <img src="../images/logo.png" style="margin-right: 24px" alt="" />
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link nav-link-ltr" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="#">Sewa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="garage.html">Garasi</a>
        </li>
      </ul>
      <button>Logout</button>
      <div class="img-container"></div>
    </nav>
    
    <form class="needs-validation container" action="../../controller/form_jual_process.php" method="POST"  novalidate>
      <div class="statis" style="margin-bottom: 24px;">
        <div class="title">
          <h5>Formulir Penjualan Mobil</h5>
          <img src="../icons/car.png" alt="" />
        </div>
        <p>
          harap isi formulir dengan benar
        </p>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="validationCustom01">Nama Mobil</label>
          <input
            name="nama"
            type="text"
            class="form-control"
            id="validationCustom01"
            placeholder="Nama"
            required
          />
          <div class="invalid-feedback">Nama Harus diisi</div>
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Merk Mobil</label>
          <input
            name="merk"
            type="text"
            class="form-control"
            id="inputPassword4"
            placeholder="Merk"
            required
          />
          <div class="invalid-feedback">Merk Harus diisi</div>
        </div>
      </div>
      <div class="form-group">
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
            placeholder="1000000"
            required
          />
          <div class="invalid-feedback">Harga masih kosong</div>
        </div>
      </div>
      <div class="form-group">
        <label for="formFileSm" class="form-label">Foto Mobil</label>
        <input
          name="foto"
          class="form-control form-control-sm"
          id="formFileSm"
          type="file"
          required
        />
        <div class="invalid-feedback">Foto masih kosong</div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea
        name="deskripsi"
          class="form-control"
          id="exampleFormControlTextarea1"
          rows="3"
        ></textarea>
      </div>
      <div class="form-group">
        <label for="inputEmail4">Alamat</label>
        <input
          name="alamat"
          type="text"
          class="form-control"
          id="inputEmail4"
          placeholder="Alamat"
          required
        />
        <div class="invalid-feedback">Alamat harus diisi</div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="inputState">Transmisi</label>
          <select 
          name="transmisi"
          id="inputState" class="form-control">
            <option selected>Manual</option>
            <option>Automatic</option>
          </select>
        </div>
        <div class="form-group col-md-2">
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
        <div class="form-group col-md-5">
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
        <div class="form-group col-md-4">
          <label for="validationCustom01">Tahun</label>
          <input
          name="tahun"
            type="text"
            class="form-control"
            id="validationCustom01"
            placeholder="2024"
            required
          />
          <div class="invalid-feedback">Tahun pembelian harus diisi</div>
        </div>
        <div class="form-group col-md-4">
          <label for="validationCustom02">Kilometer</label>
          <input
          name="kilometer"
            type="text"
            class="form-control"
            id="validationCustom02"
            placeholder="1999"
            required
          />
          <div class="invalid-feedback">Kilometer belum diisi</div>

        </div>
        <div class="form-group col-md-4">
          <label for="validationCustom02">Pajak Jalan Exp</label>
          <input
          name="pajak_date"
            class="form-control"
            id="datepicker"
            placeholder="2 Desember 2015"
            required
          />
          <div class="invalid-feedback">Pajak masih kosong</div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" required />
          <label class="form-check-label" for="gridCheck"> Saya yakin dengan formulir yang telah saya isi </label>
          <div class="invalid-feedback">Checkbox harus dicentang</div>
        </div>
      </div>
      <button type="submit" class="my-btn-submit">Kumpulkan</button>
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
