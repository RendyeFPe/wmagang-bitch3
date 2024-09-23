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
                    $username = 'root';
                    $password = '';
                    $options = array(
                         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );
                    $pdo = new PDO($dsn, $username, $password, $options);
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
                              $query_checkbox = "SELECT nama_barang, FLOOR(AVG(harga_sekarang)) AS rata_rata_harga, tanggal, 
                                FLOOR(AVG(harga_kemarin)) AS rata_rata_harga_kemarin, FLOOR(AVG(selisih)) AS selisih_rata_rata, gambar
                                FROM (
                                    SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal,
                                    ROW_NUMBER() OVER (PARTITION BY nama_barang ORDER BY tanggal DESC) AS rn, gambar
                                    FROM data_barang_bandar
                                    UNION ALL
                                    SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal,
                                    ROW_NUMBER() OVER (PARTITION BY nama_barang ORDER BY tanggal DESC) AS rn, gambar
                                    FROM data_barang_pahing
                                    UNION ALL
                                    SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal,
                                    ROW_NUMBER() OVER (PARTITION BY nama_barang ORDER BY tanggal DESC) AS rn, gambar
                                    FROM data_barang_setonobetek
                                ) AS ranked
                                WHERE rn = 1 GROUP BY nama_barang";

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
                    $field_data</label>
                    </tr>";
                                   }
                              } else {
                                   echo "Tidak ada data untuk ditampilkan.";
                              }
                              ?>
                              <br>
                              <script>
                                   // fungsi select all
                                   document.getElementById('select-all').addEventListener('change', function () {
                                        var checkboxes = document.querySelectorAll("input[name='filter[]']");
                                        checkboxes.forEach(function (checkbox) {
                                             checkbox.checked = document.getElementById('select-all').checked;
                                        });
                                        updateSelectedCount();
                                   });

                                   // fungsi check box
                                   var checkboxes = document.querySelectorAll("input[name='filter[]']");
                                   checkboxes.forEach(function (checkbox) {
                                        checkbox.addEventListener('change', function () {
                                             updateSelectedCount();
                                        });
                                   });

                                   // fungsi count select
                                   function updateSelectedCount() {
                                        var selectedCheckboxes = document.querySelectorAll("input[name='filter[]']:checked");
                                        document.getElementById('selected-count').innerText = selectedCheckboxes.length;
                                   }
                              </script>

                         </table>
                         <!-- </div> -->
                         <button type="submit" value="Filter" class="button blob btn-primary btn">
                              <span>Filter</span>
                         </button>
                    </form>
               </div>
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
                                             <p>naik</p>
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
                                             <p>turun</p>
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

                         $qry = "SELECT nama_barang, FLOOR(AVG(harga_sekarang)) AS rata_rata_harga, tanggal, FLOOR(AVG(harga_kemarin)) AS rata_rata_harga_kemarin, FLOOR(AVG(selisih)) AS selisih_rata_rata, gambar
            FROM (
                SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal,
                       ROW_NUMBER() OVER (PARTITION BY nama_barang ORDER BY tanggal DESC) AS rn,
                       gambar
                FROM data_barang_bandar
                UNION ALL
                SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal,
                       ROW_NUMBER() OVER (PARTITION BY nama_barang ORDER BY tanggal DESC) AS rn,
                       gambar
                FROM data_barang_pahing
                UNION ALL
                SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal,
                       ROW_NUMBER() OVER (PARTITION BY nama_barang ORDER BY tanggal DESC) AS rn,
                       gambar
                FROM data_barang_setonobetek
            ) AS ranked
            WHERE rn = 1
            GROUP BY nama_barang;";

                         $stmt = $pdo->query($qry);

                         if ($stmt->rowCount() > 0) {
                              while ($row = $stmt->fetch()) {
                                   $nama_barang = $row["nama_barang"];
                                   $rata_rata_harga = $row["rata_rata_harga"];
                                   $rata_rata_harga_kemarin = $row["rata_rata_harga_kemarin"];
                                   $gambar = $row["gambar"];
                                   $selisih_rata_rata = $row["selisih_rata_rata"];

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
                         }
                    } catch (PDOException $e) {
                         echo "Koneksi database gagal: " . $e->getMessage();
                         exit();
                    }
                    ?>
               </div>
          </div>
          </div>

          <!-- fiilter untuk rentang tanggal -->
          <div class="contaier">
               <h2 class="mt-5 text-center" data-aos="fade-up" data-aos-delay="200">DataTabel Harga Barang seluruh area
               </h2>
               <div class="gx-5 d-flex justify-content-center my-5" data-aos="fade-up">
                    <div class="border border-dark rounded px-4 py-4  my-5">
                         <p>Pilih tanggal untuk menampilkan data tabel</p>
                         <span for="tanggal" id="inputGroup-sizing-sm" class="input-group-text">Pilih
                              tanggal:</span>
                         <input type="date" class="form-control" aria-label="Small"
                              aria-describedby="inputGroup-sizing-sm" id="tanggal">
                         <div class="mt-2" id="hasil"></div>
                    </div>
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