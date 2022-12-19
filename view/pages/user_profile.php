<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile</title>
  <link rel="stylesheet" href="../style/bootstrap-4.5.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="stylesheet" href="../style/profil.css">
  <link rel="stylesheet" href="../style/jquery-ui-1.13.2/jquery-ui.css">
  <script type="text/javascript" src="../style/jquery-ui-1.13.2/jquery-3.6.2.min.js"></script>
  <script type="text/javascript" src="../style/jquery-ui-1.13.2/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/user_profile.js"></script>
  <script>
  $(function() {
    $("#date_ex").datepicker();
  });
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light">
    <img src="../images/logo.png" style="margin-right: 24px" alt="" />
    <ul class="navbar-nav">
      <li class="nav-item">
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
        if(isset($_SESSION['username'])){
          echo '
            <div class="d-flex ml-auto space-between">
              <a class="px-4 my-auto text-dark" href="user_profile.php?username=' . $_SESSION['username'] . '"><p>' . $_SESSION['username'] . '</p></a>
              <a class="logout-btn"href="../../controller/logout_process.php"><button>Logout</button></a>
            </div>
            ';
        }
        else{
          header('Location:login.php');
        }
      ?>
  </nav>
  <div class="container main mb-5">
    <div class="row">
      <div class="col-lg-3 sidebar">
        <ul class="d-flex flex-column">
          <li>
            <button id="btn-profile" class="btn btn-sidebar" onclick="open_profile()">Profil User</button>
          </li>
          <li>
            <button id="btn-manage" class="btn btn-sidebar" onclick="open_manage()">Manage Mobil</button>
          </li>
          <li>
            <button id="btn-tx" class="btn btn-sidebar" onclick="open_tx()">Daftar Transaksi</button>
          </li>
        </ul>
      </div>
      <div class="col-lg-9">
        <div id="profil_user" class="">
          <h3>Profil User</h3>
          <div class="tab-content-container mt-2">
            <?php
              if(isset($_GET['status']) && $_GET['status'] == 'success_update'){
                echo '<div class="alert alert-success" role="alert">
                        Sukses Update Profil!
                      </div>';
              }else if(isset($_GET['status']) && $_GET['status'] == 'success_update_mobil'){
                echo '<div class="alert alert-success" role="alert">
                        Sukses Update Mobil!
                      </div>';
              }else if(isset($_GET['status']) && $_GET['status'] == 'success_delete_mobil'){
                echo '<div class="alert alert-success" role="alert">
                        Sukses Delete Mobil!
                      </div>';
              }
            ?>
            <form action="../../controller/edit_profile.php" class="container" method="POST">
              <?php
                include "../../controller/database/connection.php";
                
                if(!isset($_SESSION['user_id'])){
                  header('Location:login.php');
                }

                if($_GET['username'] != $_SESSION['username']){
                  header('Location:home.php');
                }

                $query = "SELECT * FROM user WHERE id = '" . $_SESSION['user_id'] . "'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
              <div class="form-row">
                <div class="form- w-50">
                  <label for="username">Username</label>
                  <input type="text" class="form-control needs-validation" name="username" id="username"
                    value="<?= $row['username'] ?>">
                </div>
              </div>
              <div class="form-row mt-3">
                <div class="form-group w-50">
                  <label for="no_hp">No Hp</label>
                  <input type="text" class="form-control needs-validation" name="no_hp" id="no_hp"
                    value="<?= $row['no_hp']?>">
                </div>
              </div>
              <?php
                    }
                } else {
                    echo "0 result";
                }
                ?>
              <input type="submit" class="my-btn-submit" value="Edit" id="submit" name="submit" />
            </form>
          </div>
        </div>
        <div id="manage" style="display: none;">
          <h3>Manage</h3>
          <div class="tab-content-container mt-2">
            <table>
              <tr>
                <th> ID </th>
                <th> Nama Mobil </th>
                <th> Tahun </th>
                <th> Harga </th>
                <th> Foto </th>
                <th> Aksi </th>
              </tr>
              <?php
                include "../../controller/database/connection.php";
                
                if(!isset($_SESSION['user_id'])){
                  header('Location:login.php');
                }
                $query = "SELECT * FROM mobil WHERE id_penjual = '" . $_SESSION['user_id'] . "'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
              <tr>
                <td> <?= $row["id"] ?> </td>
                <td> <?= $row["nama"] ?> </td>
                <td> <?= $row["tahun"] ?> </td>
                <td> <?= $row["harga"] ?> </td>
                <td> <img width="175px" src="../../controller/<?= $row['foto']; ?>" alt=""> </td>
                <td>
                  <a href="./edit_data.php?id=<?php echo $row['id']; ?>"> Edit &nbsp; </a>
                  <a href="../../controller/hapus_data.php?id=<?php echo $row['id']; ?>"> Hapus </a>
                </td>
              </tr>
              <?php
                    }
                } else {
                    echo "0 result";
                }
              ?>

            </table>
          </div>
        </div>
        <div id="daftar_tx" style="display: none;">
          <h3>Daftar Transaksi</h3>
          <div class="tab-content-container mt-2">
            <table>
              <tr>
                <th> ID Transaksi </th>
                <th> Mobil </th>
                <th> Harga </th>
                <th> Status </th>
              </tr>
              <?php
                include "../../controller/database/connection.php";
                
                if(!isset($_SESSION['user_id'])){
                  header('Location:login.php');
                }
                // $query = "SELECT * FROM mobil WHERE id_penjual = '" . $_SESSION['user_id'] . "'";
                $query = "SELECT * FROM transaksi t LEFT JOIN mobil m ON t.id_mobil = m.id LEFT JOIN user u ON m.id_penjual = u.id
                WHERE id_penjual = " . $_SESSION['user_id'] . " OR id_pembeli = " . $_SESSION['user_id'];
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
              <tr>
                <td> <?= $row["id"] ?> </td>
                <td> <?= $row["nama"] ?> </td>
                <td> <?= $row["harga"] ?> </td>
                <td> <?php

                      if($row["id_penjual"] == $_SESSION['user_id']){
                        echo "Terjual";
                      }else{
                        echo "Membeli";
                      }
              
                      ?> </td>
              </tr>
              <?php
                    }
                } else {
                    echo "0 result";
                }
              ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="container mt-5">
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
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    "use strict";
    window.addEventListener(
      "load",
      function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName("needs-validation");
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(
          forms,
          function(form) {
            form.addEventListener(
              "submit",
              function(event) {
                if (form.checkValidity() === false || $('#no_hp').val().length >= 14) {
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