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
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="struktur/style.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>

<body>

     <style>
          @media screen and (max-width: 768px) {
               .struktur .card-struktur .draft {
                    display: flex;
                    position: relative;
                    width: 100px;
                    margin-top: 0;
                    top: 2rem;
               }

               .struktur .card-struktur .draft p {
                    font-size: 4px;
               }
          }
     </style>

     <!-- navbar -->
     <?php
     include "komponen/navbar.php";
     ?>

     <div class="p-3" style="background: var(--secondary500, #11936E); ">
          <div class="container">
               <div class="row">
                    <div class="col-12 text-center text-light">
                         <h3>Struktur Organisasi</h3>
                         <p class="text-light">DISPERDAGIN Kota Kediri</p>
                    </div>

               </div>
          </div>
     </div>

     <div class="container p-5 struktur">
          <div class="card-struktur">
               <div class="card draft">
                    <div class="card-body py-1">
                         <p class=" fw-bold" id="str-heading">PERATURAN WALIKOTA KEDIRI NOMOR 108 TAHUN 2021</p>
                         <p class="">tentang</p>
                         <p class="">Kedudukan Susunan Organisasi, Tugas, dan Fungsi Serta Tata Kerja Dinas
                              Perdagangan dan Perindustrian</p>
                    </div>
               </div>
               <img src="images/struktur-organisasi (1).png" class="img-fluid str-img" alt="struktur-organisasi">
          </div>
     </div>
     <br>

     <br>
     <br>

     <!-- footer -->
     <?php
     include "komponen/footer.php";
     ?>



     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <!-- <script src="js/bootstrap.min.js"></script> -->
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/transition.js"></script>
     <script src="js/loader.js"></script>
     <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



     <script>
          document.addEventListener('DOMContentLoaded', function() {
               var scrollUpIcon = document.querySelector('.scroll-up-icon');

               // Tampilkan tombol ketika pengguna menggulir ke bawah
               window.addEventListener('scroll', function() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                         scrollUpIcon.style.display = 'block';
                    } else {
                         scrollUpIcon.style.display = 'none';
                    }
               });

               // Smooth scroll ke atas ketika tombol diklik
               scrollUpIcon.addEventListener('click', function() {
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
          document.addEventListener('DOMContentLoaded', function() {
               // Tombol toggle dropdown minimarket
               var minimarketToggle = document.getElementById('minimarket-dropdown-toggle');
               // Dropdown minimarket
               var minimarketDropdown = document.getElementById('minimarket-dropdown');

               // Tampilkan dropdown minimarket ketika tombol toggle diklik
               minimarketToggle.addEventListener('click', function() {
                    if (minimarketDropdown.style.display === 'none' || minimarketDropdown.style.display === '') {
                         minimarketDropdown.style.display = 'block';
                    } else {
                         minimarketDropdown.style.display = 'none';
                    }
               });

               // Sembunyikan dropdown minimarket saat klik di luar dropdown
               document.addEventListener('click', function(event) {
                    var targetElement = event.target;
                    if (targetElement !== minimarketToggle && targetElement !== minimarketDropdown) {
                         minimarketDropdown.style.display = 'none';
                    }
               });
          });
     </script>


</body>

</html>