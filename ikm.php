<!DOCTYPE html>
<html lang="en">

<head>
  <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="icon" type="jpg/png" href="images/lpicon2.png">
</head>
<style>
  #fashion,
  #kerajinan,
  #makanminum,
  #others {
    display: none;
  }

  .main-menu,
  .sub-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    z-index: 2;
  }

  .main-menu>li {
    position: relative;
  }

  .main-menu>li>a {
    display: block;
    padding: 10px 20px;
    background-color: #fff;
    color: black;
    text-decoration: none;
  }

  .main-menu>li:hover>a {
    background-color: #fff;
  }

  .sub-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    width: 100%;
  }

  .sub-menu>li>a {
    padding: 10px 20px;
    background-color: #fff;
    color: #333;
    text-decoration: none;
    display: block;
  }

  .sub-menu>li>a:hover {
    background-color: #065E89;
  }

  .main-menu>li:hover>.sub-menu {
    display: block;
  }

  .sub-menu>li:hover>.sub-menu {
    display: inline-block;
    top: 0;
    left: 100%;
  }
</style>

<body>
  <!-- navbar -->
  <?php
  include "komponen/navbar.php";
  ?>
  <div class="market py-2">
    <center>
      <h3 class="text-white">INFORMASI INDUSTRI KECIL MENENGAH</h3>
      <p class="text-white">Kota Kediri</p>
    </center>
  </div>
  <section class="testimonial section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

          <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Klik Menu dibawah untuk Menampilkan Lokasi Indrustri
            Kecil Menengah</h3>
          <p class="text-dark">*daftar IKM di filter berdasarkan jesni produk</p>
        </div>
      </div>
      <div class="container ">
        <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

        <div class="row d-flex justify-content-center">
          <div class="col-6 col-sm-3 text-center">
            <div class="indo-btn">
              <div class="drop">
                <ul class="main-menu">
                  <li><a href="#" class="border-2 border-black border dropdown-toggle border-dark"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                    <ul class="sub-menu custom-tbl w-auto">
                      <li><a class="dropdown-item custom-tbl" onclick="show('fashion')">Fashion</a></li>
                      <li><a class="dropdown-item custom-tbl" onclick="show('kerajinan')">Kerajinan</a></li>
                      <li><a class="dropdown-item custom-tbl" onclick="show('makanminum')">Makanan & Minuman</a></li>
                      <li><a class="dropdown-item custom-tbl" onclick="show('others')">Lainnya</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- fashion -->
      </br>
      </br>
      <div id="fashion" class="my-3">
        <h3>List Industri Kecil Menengah Produk fashion</h3>
        <?php
        try {
          $dsn = 'mysql:host=localhost;dbname=data_ikm';
          $username = 'root';
          $password = '';
          $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          );

          $pdo = new PDO($dsn, $username, $password, $option);
          $sql = "SELECT DISTINCT id, nama_IKM, kelurahan, No_Hp, alamat, maps FROM fashion";
          $stmt = $pdo->query($sql);
          $result = $stmt->fetchAll();
          ?>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
              <thead class="table-utama">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Lokasi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($result as $row) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['nama_IKM'] . "</td>";
                  echo "<td>" . $row['kelurahan'] . "</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "<td><a href='https://wa.me/" . $row['No_Hp'] . "'target='_blank'>kontak</a></td>";
                  echo "<td><a href='" . $row['maps'] . "'target='_blank'>Maps</a></td>";
                  echo "<tr>";
                }
        } catch (PDOException $e) {
          echo "koneksi gagal :" . $e->getMessage();
        }
        ?>
            </tbody>
          </table>
        </div>
      </div>

      <!--makanan & minuman-->
      <div id="makanminum">
        </br>
        </br>
        <h3>List Industri Kecil Menengah Produk makanan & minuman</h3>
        <?php
        try {
          $dsn = 'mysql:host=localhost;dbname=data_ikm';
          $username = 'root';
          $password = '';
          $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          );

          $pdo = new PDO($dsn, $username, $password, $option);
          $query = "SELECT DISTINCT id, nama_IKM, kelurahan, No_Hp, alamat,maps FROM makanan
          UNION ALL
          SELECT DISTINCT id, nama_IKM, kelurahan, No_Hp, alamat,maps FROM minuman;
          ";

          $stmt = $pdo->query($query);
          $result = $stmt->fetchAll();

          ?>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
              <thead class="table-utama">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Lokasi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($result as $row) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['nama_IKM'] . "</td>";
                  echo "<td>" . $row['kelurahan'] . "</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "<td><a href='https://wa.me/" . $row['No_Hp'] . "'target='_blank'>kontak</a></td>";
                  echo "<td><a href='" . $row['maps'] . "'target='_blank'>Maps</a></td>";
                  echo "<tr>";
                }
        } catch (PDOException $e) {
          echo "koneksi galgal :" . $e->getMessage();
        }
        ?>
            </tbody>
          </table>
        </div>
      </div>

      <!--kerajinan-->
      <div id="kerajinan">
        <h3>List Industri Kecil Menengah Produk kerajinan</h3>
        <?php
        try {
          $dsn = 'mysql:host=localhost;dbname=data_ikm';
          $username = 'root';
          $password = '';
          $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          );

          $pdo = new PDO($dsn, $username, $password, $option);
          $query = "SELECT DISTINCT id, nama_IKM, kelurahan, No_Hp, alamat, maps FROM kerajinan";
          $stmt = $pdo->query($query);
          $result = $stmt->fetchAll();
          ?>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
              <thead class="table-utama">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Lokasi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($result as $row) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['nama_IKM'] . "</td>";
                  echo "<td>" . $row['kelurahan'] . "</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "<td><a href='https://wa.me/" . $row['No_Hp'] . "'target='_blank'>kontak</a></td>";
                  echo "<td><a href='" . $row['maps'] . "'target='_blank'>Maps</a></td>";
                  echo "<tr>";
                }
        } catch (PDOException $e) {
          echo "koneksi galgal :" . $e->getMessage();
        }
        ?>
            </tbody>
          </table>
        </div>
      </div>

      <!--map other-->
      <div id="others">
        <h3>List Industri Kecil Menengah Produk Lainnya</h3>
        <?php
        try {
          $dsn = 'mysql:host=localhost;dbname=data_ikm';
          $username = 'root';
          $password = '';
          $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          );

          $pdo = new PDO($dsn, $username, $password, $option);
          $query = "SELECT DISTINCT id, nama_IKM, kelurahan, No_Hp, alamat,maps FROM others";
          $stmt = $pdo->query($query);
          $result = $stmt->fetchAll();
          ?>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
              <thead class="table-utama">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Lokasi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($result as $row) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['nama_IKM'] . "</td>";
                  echo "<td>" . $row['kelurahan'] . "</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "<td><a href='https://wa.me/" . $row['No_Hp'] . "'target='_blank'>kontak</a></td>";
                  echo "<td><a href='" . $row['maps'] . "'target='_blank'>Maps</a></td>";
                  echo "<tr>";
                }
        } catch (PDOException $e) {
          echo "koneksi galgal :" . $e->getMessage();
        }
        ?>
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- search php function -->


  <!-- footer -->
  <?php
  include "komponen/footer.php";
  ?>
  <!-- SCRIPTS -->
  <script>
    var currentlyVisible = null;

    function show(id) {
      var x = document.getElementById(id);

      if (currentlyVisible) {
        currentlyVisible.style.display = "none";
      }

      if (x.style.display === "none" || !x.style.display) {
        x.style.display = "block";
        currentlyVisible = x;
      } else {
        x.style.display = "none";
        currentlyVisible = null;
      }
    }
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/loader.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Tombol toggle dropdown minimarket
      var minimarketToggle = document.getElementById('minimarket-dropdown-toggle');
      // Dropdown minimarket
      var minimarketDropdown = document.getElementById('minimarket-dropdown');

      // Tampilkan dropdown minimarket ketika tombol toggle diklik
      minimarketToggle.addEventListener('click', function () {
        if (minimarketDropdown.style.display === 'none' || minimarketDropdown.style.display === '') {
          minimarketDropdown.style.display = 'block';
        } else {
          minimarketDropdown.style.display = 'none';
        }
      });

      // Sembunyikan dropdown minimarket saat klik di luar dropdown
      document.addEventListener('click', function (event) {
        var targetElement = event.target;
        if (targetElement !== minimarketToggle && targetElement !== minimarketDropdown) {
          minimarketDropdown.style.display = 'none';
        }
      });
    });
  </script>

</body>

</html>