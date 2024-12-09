<!DOCTYPE html>
<html lang="en">

<head>

     <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="shorcut icon" href="images/lpicon2.png">
     <link rel="icon" type="jpg/png" href="images/lpicon2.png">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
     <!-- Include html2canvas -->
     <!-- <script src="https://parall.ax/parallax/js.jspdf.js" ></script> -->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>

<body>
     <?php
     include "komponen/navbar.php";
     ?>

     <!-- /*---------------------------------------
 Grafik Content 
-----------------------------------------*/ -->
     <div class="container">
          <div class="row">
               <div class="col-lg-6 col-md-7 col-12">
                    <h1> <strong class="gradient-text" data-aos="fade-up" data-aos-delay="100">Grafik Harga
                              Pasar</strong></h1>

                    <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300"></h3>
               </div>
          </div>
     </div>

     <?php
     $conn = mysqli_connect('localhost', 'root', '', 'data_harga_pokok');

     // Check the connection
     if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
     }

     if (isset($_POST['filter']) && !empty($_POST['filter'])) {
          $filter_values = $_POST['filter'];

          // Membuat string untuk klausa IN
          $in_clause = implode(",", array_map(function ($value) {
               return "'" . $value . "'";
          }, $filter_values));


          // Your SQL query
          // sql rata rata
          $sql = "SELECT FLOOR(AVG(harga_sekarang)) as rata_rata_harga , tanggal, nama_barang
          FROM
          ((SELECT nama_barang, tanggal, harga_sekarang
          FROM data_barang_bandar)
          UNION ALL
          (SELECT nama_barang, tanggal, harga_sekarang
          FROM data_barang_pahing)
          UNION ALL
          (Select nama_barang, tanggal, harga_sekarang
          FROM data_barang_setonobetek)) AS merged_table
          WHERE nama_barang IN ($in_clause)
          AND tanggal >= CURDATE() - INTERVAL 7 DAY
          GROUP BY nama_barang,tanggal;";

          // Execute the query
          $result = mysqli_query($conn, $sql);

          // Initialize arrays to store the grouped data
          $tanggal = array();
          $datasets = array();

          // Fetch and organize the data
          while ($row = mysqli_fetch_assoc($result)) {
               $productName = $row['nama_barang'];
               $date = $row['tanggal'];
               $price = $row['rata_rata_harga'];

               // Add date to 'tanggal' array if not exists
               if (!in_array($date, $tanggal)) {
                    $tanggal[] = $date;
               }

               // Add product to 'datasets' array if not exists
               if (!isset($datasets[$productName])) {
                    $datasets[$productName] = array(
                         'label' => $productName,
                         'data' => array()
                    );
               }

               // Add price entry for the product
               $datasets[$productName]['data'][] = $price;
          }

          // Close the database connection
          mysqli_close($conn);

          // Convert the PHP arrays to JSON
          $jsonData = json_encode(
               array(
                    'tanggal' => $tanggal,
                    'dataset' => array_values($datasets)
               ),
               JSON_PRETTY_PRINT
          );
     } ?>


     <div class="container mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
          <button type="button" onclick="goBack()" class="btn btn-primary ms-auto button blob">Kembali</button>
          <button onclick="downloadPDF()" target="blank" class="btn btn-primary ms-auto button blob">Download
               Chart</button>
          <canvas id="lineChart"></canvas>
     </div>

     <script>
          // Your JSON data here
          const jsonData = <?php echo $jsonData; ?>;

          // Prepare data for Chart.js
          const labels = jsonData.tanggal;
          const datasets = jsonData.dataset.map(dataset => ({
               label: dataset.label,
               data: dataset.data.map(value => parseInt(value, 10)), // Convert string to integer
               fill: false,
               borderColor: getRandomColor(), // Helper function to generate random color
          }));

          // Create Line Chart
          let delayed;
          const ctx = document.getElementById('lineChart').getContext('2d');
          new Chart(ctx, {
               type: 'line',
               data: {
                    labels: labels,
                    datasets: datasets,
               },
               options: {
                    raidus: 5,
                    hitRadius: 100,
                    hoverRadius: 10,
                    interaction: {
                         mode: 'index',
                         intersect: false,
                    },
                    animation: {
                         onComplete: () => {
                              delayed = true;
                         },
                         delay: (context) => {
                              let delay = 0;
                              if (context.type === 'data' && context.mode === 'default' && !delayed) {
                                   delay = context.dataIndex * 80 + context.datasetIndex * 100;
                              }
                              return delay;
                         },
                    },
                    layout: {
                         padding: 20
                    },
                    legend: true,
                    tension: 0.4,
                    responsive: true,
                    scales: {
                         y: {
                              beginAtZero: false,
                              ticks: {
                                   callback: function (value, index, values) {
                                        // Format nilai dengan menambahkan satuan Rupiah (IDR)
                                        return 'Rp. ' + value.toLocaleString('id-ID');
                                   }
                              }
                         }
                    },
                    x: {
                         type: 'time',
                         max: 7,
                         time: {
                              unit: 'day'
                         }
                    }
               }
          });

          // Helper function to generate a random color
          function getRandomColor() {
               const letters = '0123456789ABCDEF';
               let color = '#';
               for (let i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
               }
               return color;
          }

          function goBack() {
               window.history.back();
          }

          function downloadPDF() {
               const imageLink = document.createElement('a');
               const canvas = document.getElementById('lineChart');
               imageLink.download = 'grafik.jpg';
               imageLink.href = canvas.toDataURL('image/jpg', 1);
               imageLink.click();
          }
     </script>
     <!--footer-->
     <?php
     include "komponen/footer.php";
     ?>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/transition.js"></script>
     <script src="js/loader.js"></script>

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