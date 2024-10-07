<!DOCTYPE html>
<html lang="en">

<head>

     <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="jpg/png" href="images/lpicon2.png">

     <style>
          #bandar {
               display: none;
          }
     </style>

</head>

<body>

     <!-- navbar -->
     <?php
     include "komponen/navbar.php";
     ?>

     <!-- /*---------------------------------------
 data dan grafik 
-----------------------------------------*/ -->
     <!-- PROJECT -->
     <!-- data dan grafik -->
     <section class="about pb-0 d-block bg-white">
          <img src="images/komoditas/SIKAD.png" class="img-fluid z-3" alt="" data-aos="fade-up" data-aos-delay="100">
          <div class="container ">
               <center>
                    <h3 class="text-dark mt-2">GRAFIK HARGA PASAR</h3>
                    <p class="text-dark">pilih untuk melihat harga pasar dalam rentang 1 minggu</p>
               </center>
               <?php
               try {
                    $dsn = 'mysql:host=localhost;dbname=data_harga_pokok';
                    $user = 'root';
                    $password = '';
                    $options = array(
                         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );
                    $pdo = new PDO($dsn, $user, $password, $options);
               } catch (PDOException $e) {
                    die("Koneksi gagal: " . $e->getMessage());
               }
               ?>
               <div class="container p-2 border border-dark rounded my-5 overflow-x-scroll" data-aos="fade-up"
                    data-aos-delay="100">
                    <?php
                    echo "<tr>
    <td colspan='2' class='selected-item'>Jumlah item yang dipilih: <span id='selected-count'>0</span></td>
    </tr>";
                    ?>
                    <form method="post" action="datafiltered.php">
                         <!-- <div class="table-responsive-lg"> -->
                         <table class="table table-responsive">
                              <?php
                              $query_checkbox = "SELECT nama_barang, 
       FLOOR(AVG(harga_sekarang)) AS rata_rata_harga, 
       FLOOR(AVG(harga_kemarin)) AS rata_rata_harga_kemarin, 
       FLOOR(AVG(selisih)) AS selisih_rata_rata, 
       gambar
FROM (
    SELECT d.nama_barang, d.harga_sekarang, d.harga_kemarin, d.selisih, d.tanggal, d.gambar
    FROM data_barang_bandar d
    WHERE d.tanggal = (SELECT MAX(tanggal) FROM data_barang_bandar WHERE nama_barang = d.nama_barang)
    
    UNION ALL

    SELECT d.nama_barang, d.harga_sekarang, d.harga_kemarin, d.selisih, d.tanggal, d.gambar
    FROM data_barang_pahing d
    WHERE d.tanggal = (SELECT MAX(tanggal) FROM data_barang_pahing WHERE nama_barang = d.nama_barang)
    
    UNION ALL

    SELECT d.nama_barang, d.harga_sekarang, d.harga_kemarin, d.selisih, d.tanggal, d.gambar
    FROM data_barang_setonobetek d
    WHERE d.tanggal = (SELECT MAX(tanggal) FROM data_barang_setonobetek WHERE nama_barang = d.nama_barang)
) AS ranked
GROUP BY nama_barang, gambar
";

                              $stmt = $pdo->query($query_checkbox);
                              if ($stmt->rowCount() > 0) {
                                   echo "
                    <tr>
                    <label>
                        <input type='checkbox' id='select-all'> Select All
                    </label>
                </tr>";
                while ($row_checkbox = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $field_data = htmlspecialchars($row_checkbox['nama_barang'], ENT_QUOTES, 'UTF-8');
                    echo "
                    <tr>
                        <label>
                            <input type='checkbox' name='filter[]' value='$field_data'> 
                            $field_data
                        </label>
                    </tr>";
                }
            } else {
                echo "Tidak ada data untuk ditampilkan.";
            }
            ?>
            <br>
            <script>
                document.getElementById('select-all').addEventListener('change', function () {
                    var checkboxes = document.querySelectorAll("input[name='filter[]']");
                    checkboxes.forEach(function (checkbox) {
                        checkbox.checked = document.getElementById('select-all').checked;
                    });
                    updateSelectedCount();
                });

                var checkboxes = document.querySelectorAll("input[name='filter[]']");
                checkboxes.forEach(function (checkbox) {
                    checkbox.addEventListener('change', function () {
                        updateSelectedCount();
                    });
                });

                function updateSelectedCount() {
                    var selectedCheckboxes = document.querySelectorAll("input[name='filter[]']:checked");
                    document.getElementById('selected-count').innerText = selectedCheckboxes.length;
                }
            </script>
        </table>
        <button type="submit" value="Filter" class="button blob btn-primary btn">
            <span>Filter</span>
        </button>
    </form>
</div>

<!-- Bagian lain dari script sama, tidak ada konflik kode lagi -->

          </div>
          </div>
          <div class="bg-white mt-3">
               <h2 class="mb-5 text-center my-3" data-aos="fade-up"> Perkembangan Harga Komoditas Pangan</h2>
               <center>
                    <p class="text-dark" data-aos="fade-up">*data diambil dari seluruh pasar</p>
                    <p class="fw-bold text-dark" data-aos="fade-up"><?php echo "" . date('l,d,m,Y') ?></p>

               </center>

               <center>
                    <div class="mt-5 d-flex justify-content-center">
                         <div class="row g-1 " data-aos="fade-up">
                              <div class="col d-block">
                                   <div class="col-md-4">
                                        <div class="card-img bg-transparent">
                                             <img src="images/komoditas/down.png" alt="">
                                        </div>
                                   </div>
                                   <div class="col-md-8">
                                        <div class="card-title">
                                             <p>turun</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col d-block">
                                   <div class="col-md-4">
                                        <div class="card-img bg-transparent">
                                             <img src="images/komoditas/up.png" alt="">
                                        </div>
                                   </div>
                                   <div class="col-md-8">
                                        <div class="card-title">
                                             <p>naik</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col d-block">
                                   <div class="col-md-4">
                                        <div class="card-img bg-transparent">
                                             <div class="square"></div>
                                        </div>
                                   </div>
                                   <div class="col-md-8">
                                        <div class="card-title">
                                             <p>sama</p>
                                        </div>
                                   </div>
                              </div>
                              <center>
                                   <p>*data diambil dari seluruh pasar</p>
                              </center>
                         </div>
                    </div>
               </center>
               <div class="row row-cols-1 row-cols-lg-5 g-2 g-lg-2 d-flex justify-content-center" data-aos="fade-up">
    <?php
    try {
        $dsn = 'mysql:host=localhost;dbname=data_harga_pokok';
        $username = 'root';
        $password = '';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        $pdo = new PDO($dsn, $username, $password, $options);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['tanggal'])) {
            $tanggal_dipilih = date('Y-m-d', strtotime($_POST['tanggal']));

            $query = "
                SELECT 
                    nama_barang, 
                    FLOOR(AVG(CASE WHEN harga_sekarang > 0 THEN harga_sekarang ELSE NULL END)) AS rata_rata_harga, 
                    tanggal, 
                    FLOOR(AVG(CASE WHEN harga_kemarin > 0 THEN harga_kemarin ELSE NULL END)) AS rata_rata_harga_kemarin, 
                    FLOOR(AVG(CASE WHEN harga_sekarang > 0 AND harga_kemarin > 0 THEN harga_sekarang - harga_kemarin ELSE NULL END)) AS selisih_rata_rata, 
                    gambar
                FROM (
                    SELECT dbb.nama_barang, dbb.harga_sekarang, dbb.harga_kemarin, dbb.selisih, dbb.tanggal, dbb.gambar, dbb.status_validasi
                    FROM data_barang_bandar dbb
                    WHERE dbb.tanggal = :tanggal_dipilih AND dbb.status_validasi = 'true'
                    
                    UNION ALL
                    
                    SELECT dbp.nama_barang, dbp.harga_sekarang, dbp.harga_kemarin, dbp.selisih, dbp.tanggal, dbp.gambar, dbp.status_validasi
                    FROM data_barang_pahing dbp
                    WHERE dbp.tanggal = :tanggal_dipilih AND dbp.status_validasi = 'true'
                    
                    UNION ALL
                    
                    SELECT dbs.nama_barang, dbs.harga_sekarang, dbs.harga_kemarin, dbs.selisih, dbs.tanggal, dbs.gambar, dbs.status_validasi
                    FROM data_barang_setonobetek dbs
                    WHERE dbs.tanggal = :tanggal_dipilih AND dbs.status_validasi = 'true'
                ) AS ranked
                GROUP BY nama_barang, tanggal, gambar
            ";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':tanggal_dipilih', $tanggal_dipilih);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch()) {
                    $nama_barang = isset($row["nama_barang"]) ? $row["nama_barang"] : "N/A";
                    $rata_rata_harga = isset($row["rata_rata_harga"]) ? $row["rata_rata_harga"] : "N/A";
                    $rata_rata_harga_kemarin = isset($row["rata_rata_harga_kemarin"]) ? $row["rata_rata_harga_kemarin"] : "N/A";
                    $gambar = isset($row["gambar"]) ? $row["gambar"] : "default.png";
                    $selisih_rata_rata = isset($row["selisih_rata_rata"]) ? $row["selisih_rata_rata"] : "N/A";

                    if ($rata_rata_harga < $rata_rata_harga_kemarin) {
                        $keterangan = "images/komoditas/down.png";
                        $selisih_rata_rata = "<p class='card-title mb-1 text-success'>Rp.$selisih_rata_rata</p>";
                    } else if ($rata_rata_harga > $rata_rata_harga_kemarin) {
                        $keterangan = "images/komoditas/up.png";
                        $selisih_rata_rata = "<p class='card-title mb-1 text-danger'>Rp.$selisih_rata_rata</p>";
                    } else {
                        $keterangan = "images/komoditas/sama.png";
                        $selisih_rata_rata = "<p class='card-title mb-1 text-warning'>Rp.$selisih_rata_rata</p>";
                    }

                    echo "<div class='col ms-2'>
                          <div class='card border-0 bg-transparent'>
                              <div class='card-img rounded-3'>
                                  <img src='./images/komoditas/$gambar' class='img-fluid shadow shadow-sm bg-transparent border-3 p-0' alt=''>
                              </div>
                              <div class='card-img-overlay bg-white head mx-3 px-1 mb-0 border-0'>
                                  <p class='text-center mb-0 mt-0 px-0 mx-0 '>$nama_barang</p>
                                  <hr class='border border-black border-2 my-0'>
                                  <div class='row gx-1 d-flex justify-content-center'>
                                      <div class='col py-1 mx-auto body-card'>
                                          <p class='card-title fw-bold mb-2'>Sekarang</p>
                                          <p class='card-title mb-1'>Rp.$rata_rata_harga</p>
                                          <center>
                                              <img src='$keterangan' class='keterangan my-1'>
                                          </center>
                                      </div>
                                      <div class='col py-1 body-card'>
                                          <p class='card-title fw-bold mb-2'>Sebelumnya</p>
                                          <p class='card-title mb-1 text-silent'>Rp.$rata_rata_harga_kemarin</p>
                                          $selisih_rata_rata
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>";
                }
            } else {
                echo "<p class='text-center'>Tidak ada data untuk tanggal yang dipilih.</p>";
            }
        } else {
            echo "<p class='text-center'>Pilih tanggal terlebih dahulu.</p>";
        }
    } catch (PDOException $e) {
        echo "Koneksi database gagal: " . $e->getMessage();
    }
    ?>
</div>

<!-- Filter rentang tanggal -->
<div class="container">
    <h2 class="mt-5 text-center" data-aos="fade-up" data-aos-delay="200">Data Tabel Harga Barang seluruh area</h2>
    <div class="gx-5 d-flex justify-content-center my-5" data-aos="fade-up">
        <div class="border border-dark rounded px-4 py-4 my-5">
            <p>Pilih tanggal untuk menampilkan data tabel</p>
            <form method="POST">
                <label for="tanggal" class="input-group-text">Pilih tanggal:</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal">
                <button type="submit" class="btn btn-primary mt-2">Cari</button>
            </form>
            <div class="mt-2" id="hasil"></div>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-lg-5 g-2 g-lg-2 d-flex justify-content-center" data-aos="fade-up">
    <?php
    try {
        $dsn = 'mysql:host=localhost;dbname=data_harga_pokok';
        $username = 'root';
        $password = '';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        $pdo = new PDO($dsn, $username, $password, $options);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['tanggal'])) {
            $tanggal_dipilih = date('Y-m-d', strtotime($_POST['tanggal']));

            $query = "
                SELECT 
                    nama_barang, 
                    FLOOR(AVG(CASE WHEN harga_sekarang > 0 THEN harga_sekarang ELSE NULL END)) AS rata_rata_harga, 
                    tanggal, 
                    FLOOR(AVG(CASE WHEN harga_kemarin > 0 THEN harga_kemarin ELSE NULL END)) AS rata_rata_harga_kemarin, 
                    FLOOR(AVG(CASE WHEN harga_sekarang > 0 AND harga_kemarin > 0 THEN harga_sekarang - harga_kemarin ELSE NULL END)) AS selisih_rata_rata, 
                    gambar
                FROM (
                    SELECT dbb.nama_barang, dbb.harga_sekarang, dbb.harga_kemarin, dbb.selisih, dbb.tanggal, dbb.gambar, dbb.status_validasi
                    FROM data_barang_bandar dbb
                    WHERE dbb.tanggal = :tanggal_dipilih AND dbb.status_validasi = 'true'
                    
                    UNION ALL
                    
                    SELECT dbp.nama_barang, dbp.harga_sekarang, dbp.harga_kemarin, dbp.selisih, dbp.tanggal, dbp.gambar, dbp.status_validasi
                    FROM data_barang_pahing dbp
                    WHERE dbp.tanggal = :tanggal_dipilih AND dbp.status_validasi = 'true'
                    
                    UNION ALL
                    
                    SELECT dbs.nama_barang, dbs.harga_sekarang, dbs.harga_kemarin, dbs.selisih, dbs.tanggal, dbs.gambar, dbs.status_validasi
                    FROM data_barang_setonobetek dbs
                    WHERE dbs.tanggal = :tanggal_dipilih AND dbs.status_validasi = 'true'
                ) AS ranked
                GROUP BY nama_barang, tanggal, gambar
            ";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':tanggal_dipilih', $tanggal_dipilih);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch()) {
                    $nama_barang = isset($row["nama_barang"]) ? $row["nama_barang"] : "N/A";
                    $rata_rata_harga = isset($row["rata_rata_harga"]) ? $row["rata_rata_harga"] : "N/A";
                    $rata_rata_harga_kemarin = isset($row["rata_rata_harga_kemarin"]) ? $row["rata_rata_harga_kemarin"] : "N/A";
                    $gambar = isset($row["gambar"]) ? $row["gambar"] : "default.png";
                    $selisih_rata_rata = isset($row["selisih_rata_rata"]) ? $row["selisih_rata_rata"] : "N/A";

                    if ($rata_rata_harga < $rata_rata_harga_kemarin) {
                        $keterangan = "images/komoditas/down.png";
                        $selisih_rata_rata = "<p class='card-title mb-1 text-success'>Rp.$selisih_rata_rata</p>";
                    } else if ($rata_rata_harga > $rata_rata_harga_kemarin) {
                        $keterangan = "images/komoditas/up.png";
                        $selisih_rata_rata = "<p class='card-title mb-1 text-danger'>Rp.$selisih_rata_rata</p>";
                    } else {
                        $keterangan = "images/komoditas/sama.png";
                        $selisih_rata_rata = "<p class='card-title mb-1 text-warning'>Rp.$selisih_rata_rata</p>";
                    }

                    echo "<div class='col ms-2'>
                          <div class='card border-0 bg-transparent'>
                              <div class='card-img rounded-3'>
                                  <img src='./images/komoditas/$gambar' class='img-fluid shadow shadow-sm bg-transparent border-3 p-0' alt=''>
                              </div>
                              <div class='card-img-overlay bg-white head mx-3 px-1 mb-0 border-0'>
                                  <p class='text-center mb-0 mt-0 px-0 mx-0 '>$nama_barang</p>
                                  <hr class='border border-black border-2 my-0'>
                                  <div class='row gx-1 d-flex justify-content-center'>
                                      <div class='col py-1 mx-auto body-card'>
                                          <p class='card-title fw-bold mb-2'>Sekarang</p>
                                          <p class='card-title mb-1'>Rp.$rata_rata_harga</p>
                                          <center>
                                              <img src='$keterangan' class='keterangan my-1'>
                                          </center>
                                      </div>
                                      <div class='col py-1 body-card'>
                                          <p class='card-title fw-bold mb-2'>Sebelumnya</p>
                                          <p class='card-title mb-1 text-silent'>Rp.$rata_rata_harga_kemarin</p>
                                          $selisih_rata_rata
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>";
                }
            } else {
                echo "<p class='text-center'>Tidak ada data untuk tanggal yang dipilih.</p>";
            }
        } else {
            echo "<p class='text-center'>Pilih tanggal terlebih dahulu.</p>";
        }
    } catch (PDOException $e) {
        echo "Koneksi database gagal: " . $e->getMessage();
    }
    ?>
</div>

<!-- Filter untuk rentang tanggal -->
<div class="container">
    <h2 class="mt-5 text-center" data-aos="fade-up" data-aos-delay="200">Data Tabel Harga Barang seluruh area</h2>
    <div class="gx-5 d-flex justify-content-center my-5" data-aos="fade-up">
        <div class="border border-dark rounded px-4 py-4 my-5">
            <form method="POST" action="">
                <p>Pilih tanggal untuk menampilkan data tabel</p>
                <label for="tanggal" id="inputGroup-sizing-sm" class="input-group-text">Pilih tanggal:</label>
                <input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="tanggal" name="tanggal">
                <button type="submit" class="btn btn-primary mt-2">Cari</button>
            </form>
        </div>
    </div>
</div>


     </section>
</body>


</html>

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
<script src="js/transition.js"></script>
<script src="js/date-filter.js"></script>
<script src="js/loader.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
     document.addEventListener('DOMContentLoaded', function () {
          var scrollUpIcon = document.querySelector('.scroll-up-icon');

          // Tampilkan tombol ketika pengguna menggulir ke bawah
          window.addEventListener('scroll', function () {
               if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    scrollUpIcon.style.display = 'block';
               } else {
                    scrollUpIcon.style.display = 'none';
               }
          });

          // Smooth scroll ke atas ketika tombol diklik
          scrollUpIcon.addEventListener('click', function () {
               smoothScrollToTop();
          });

          // Fungsi untuk melakukan smooth scroll ke atas
          function smoothScrollToTop() {
               var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
               if (currentPosition > 0) {
                    window.requestAnimationFrame(smoothScrollToTop);
                    window.scrollTo(0, currentPosition - currentPosition / 8);
               }
          }
     });
</script>

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