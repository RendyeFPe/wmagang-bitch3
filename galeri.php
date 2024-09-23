<!DOCTYPE html>
<html lang="en">

<head>

     <title>DISPERDAGIN | Dinas Perdagangan Dan Industri kontol</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="shorcut icon" href="images/lpicon2.png">
<<<<<<< HEAD
     
=======
>>>>>>> ce171376424a9f5743fb2ee55417c27a930e2979
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

     <style>
          .container {
               display: flex;
               flex-wrap: wrap;
               gap: 16px;
               justify-content: center;
               padding: 20px;
          }

          .folder {
               margin: 10px;
               padding: 10px;
               width: fit-content;
               cursor: pointer;
               text-align: center;
               transition: transform 0.3s;
          }

          /* .folder img {
               width: 150px;
               height: 150px;
               object-fit: cover;
               border-radius: 8px;
          }

          .folder p {
               margin-top: 8px;
               font-size: 16px;
               color: #333;
          } */

          .folder:hover {
               transform: scale(1.05);
          }

          /* Modal styles */
          .modal {
               display: none;
               position: fixed;
               z-index: 1;
               left: 0;
               top: 0;
               width: 100%;
               height: 100%;
               overflow: auto;
               background-color: rgba(0, 0, 0, 0.5);
          }

          .modal-content {
               background-color: #fefefe;
               margin: auto;
               padding: 20px;
               border: 1px solid #888;
               width: 80%;
               max-width: 1000px;
          }

          .close {
               color: #aaa;
               float: right;
               font-size: 28px;
               font-weight: bold;
          }

          .close:hover,
          .close:focus {
               color: black;
               text-decoration: none;
               cursor: pointer;
          }

          .folder .album-img {
               width: auto;
          }

          .folder img {
               width: 200px;
               height: 150px;
               object-fit: cover;
               transition: transform 0.2s;
          }

          .folder .album-text {
               background: #076797;
               width: 200px;
               height: 55px;
               padding: 1rem;
          }

          .folder .album-text p {
               font-size: 16px;
               margin-bottom: 0;
               color: #fff;
               text-overflow: ellipsis;
               white-space: nowrap;
               overflow: hidden;
               display: block;
          }

          .modal-content h2 {
               font-family: "Segoe UI";
               font-size: 20px;
               font-style: normal;
               font-weight: 600;
               color: #076797;
          }

          /* .album-container {
               display: flex;
               flex-wrap: wrap;
               justify-content: center;
               padding: 20px;
          }

          .album {
               margin: 10px;
               padding: 10px;
               text-align: center;
               cursor: pointer;
               width: 15%;
          } */


          /* .modal {
               display: none;
               position: fixed;
               z-index: 1;
               left: 0;
               top: 0;
               width: 100%;
               height: 100%;
               overflow: auto;
               background-color: rgba(0, 0, 0, 0.9);
          }

          .modal-content {
               margin: auto;
               padding: 20px;
               width: 80%;
               max-width: 1000px;
          } */
          /* .album:hover {
               transform: scale(1.1);
          }


          .modal-content h2 {
               font-family: "Segoe UI";
               font-size: 20px;
               font-style: normal;
               font-weight: 600;
               color: #076797;
          }

          .close {
               position: absolute;
               top: 15px;
               right: 25px;
               color: #fff;
               font-size: 35px;
               font-weight: bold;
               cursor: pointer;
          }

          .photo-grid {
               display: flex;
               flex-wrap: wrap;
               justify-content: center;
          }

          .photo-grid img {
               width: 200px;
               height: 200px;
               object-fit: cover;
               margin: 10px;
               border-radius: 10px;
          }  */
     </style>
</head>

<body>

     <!-- navbar -->
     <?php
     include "komponen/navbar.php";
     ?>

     <div class="hero-title">
          <h1>Galeri</h1>
          <h4>DISPERDAGIN Kota Kediri</h4>
     </div>


     <div class="container ">
          <div class="row">
               <div class="col-12 my-3">
                    <h3>Album Foto</h3>
               </div>
          </div>
     </div>

     <!--Isi visi-->
     <!-- <div class="album-container">
          <div class="album" data-album="album1">
               <div class="album-img">
                    <img src="images/galeri/Halal-bihalal.jpg" alt="Album 1">
               </div>
               <div class="album-text">
                    <p>Halal bihalal 16 April 2024</p>
               </div>
          </div>
          <div class="album" data-album="album2">
               <div class="album-img">
                    <img src="images/galeri/Operasi-Pasar.jpg" alt="Album 2">
               </div>
               <div class="album-text">
                    <p>Operasi Pasar</p>
               </div>
          </div>
          <div class="album" data-album="album3">
               <div class="album-img">
                    <img src="images/galeri/Sidak-SPBU.jpg" alt="Album 3">
               </div>
               <div class="album-text">
                    <p>Sidak SPBU</p>
               </div>
          </div>
          <div class="album" data-album="album4">
               <div class="album-img">
                    <img src="images/galeri/Parcel.jpg" alt="Album 4">
               </div>
               <div class="album-text">
                    <p>Parcel</p>
               </div>
          </div>
     </div>

     <div id="photoModal" class="modal">
          <span class="close">&times;</span>
          <div class="modal-content">
               <h2 id="modalTitle"></h2>
               <div id="photoGrid" class="photo-grid"></div>
          </div>
     </div> -->
     <div class="container bg-white " data-aos="fade-up">
          <div class="folder" onclick="openFolder('1ZdwnxoP3IbhQyHHCgaXzv1c8LCHMMfbz')">
               <div class="album-img">
                    <img src="images/galeri/Halal-bihalal.jpg" alt="Halal bihalal">
               </div>
               <div class="album-text">
                    <p>Halal bihalal 16 Juni 2024</p>
               </div>
          </div>
          <div class="folder" onclick="openFolder('1nLvrdhh8wafvDuO9rmYci70lYJR7e54b')">
               <div class="album-img">
                    <img src="images/galeri/Operasi-Pasar.jpg" alt="Operasi Pasar">
               </div>
               <div class="album-text">
                    <p>Operasi Pasar 20 Maret 2024</p>
               </div>
          </div>
          <div class="folder" onclick="openFolder('1XOUz3zPSw58Spmeri7dm3cbIAt1JDn-P')">
               <div class="album-img">
                    <img src="images/galeri/Parcel.jpg" alt="Parcel">
               </div>
               <div class="album-text">
                    <p>Parcel 3 April 2024</p>
               </div>
          </div>
          <div class="folder" onclick="openFolder('1CxaEEs-q92IDqdbjE40YCnga0jWfvuiS')">
               <div class="album-img">
                    <img src="images/galeri/Sidak-SPBU.jpg" alt="Sidak SPBU">
               </div>
               <div class="album-text">
                    <p>Sidak SPBU 27 Maret 2024</p>
               </div>
          </div>

     </div>
     <div class="modal" id="folderModal">
          <div class="modal-content">
               <span class="close" onclick="closeModal()">&times;</span>
               <h2 id="modalTitle"></h2>
               <iframe id="folder-frame" src="" frameborder="0" style="width:100%; height:600px; border: 0;"></iframe>
          </div>
     </div>
     <br>
     <br>

     <!-- footer -->
     <?php
     include "komponen/footer.php";
     ?>

     <!-- SCRIPTS -->
     <script src="js/galeri.js"></script>
     <!-- <script src="js/album.js"></script> -->
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