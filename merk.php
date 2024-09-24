<!DOCTYPE html>
<html lang="en">

<head>
     <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="jpg/png" href="images/lpicon2.png">

     <style>
          #map,
          #mapkota,
          #mappesantren {
               width: 100%;
               height: 500px;
               top: 45px;
               margin-bottom: 25px;
          }

          #mojoroto,
          #pesantren,
          #kota {
               display: none;
          }
     </style>
</head>

<body>

     <!-- navbar -->
     <?php
     include "komponen/navbar.php";
     ?>


     <!-- hero judul -->
     <div class="hero-title">
          <h1>Legalitas Merk</h1>
          <h4>DISPERDAGIN Kota Kediri</h4>
     </div>

     <div class="guide-title">
          <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
               <g clip-path="url(#clip0_331_3291)">
                    <path d="M19.5529 36.8534C19.0014 36.302 18.5639 35.6474 18.2654 34.927C17.967 34.2065 17.8133 33.4343 17.8133 32.6545C17.8133 31.8747 17.967 31.1025 18.2654 30.382C18.5639 29.6615 19.0014 29.0069 19.5529 28.4556L43.3029 4.70556C44.4165 3.59194 45.9269 2.96631 47.5018 2.96631C49.0767 2.96631 50.5871 3.59194 51.7007 4.70556C52.8143 5.81919 53.44 7.32958 53.44 8.90449C53.44 10.4794 52.8143 11.9898 51.7007 13.1034L27.9507 36.8534C27.3993 37.4049 26.7447 37.8424 26.0243 38.1409C25.3038 38.4393 24.5316 38.5929 23.7518 38.5929C22.9719 38.5929 22.1998 38.4393 21.4793 38.1409C20.7588 37.8424 20.1042 37.4049 19.5529 36.8534ZM90.2945 43.2993C89.7431 42.7478 89.0885 42.3103 88.368 42.0119C87.6476 41.7134 86.8754 41.5598 86.0955 41.5598C85.3157 41.5598 84.5435 41.7134 83.823 42.0119C83.1026 42.3103 82.448 42.7478 81.8966 43.2993L58.1466 67.0493C57.5951 67.6007 57.1576 68.2553 56.8592 68.9757C56.5607 69.6962 56.4071 70.4684 56.4071 71.2482C56.4071 72.0281 56.5607 72.8003 56.8592 73.5207C57.1576 74.2412 57.5951 74.8958 58.1466 75.4472C58.698 75.9986 59.3526 76.4361 60.073 76.7346C60.7935 77.0331 61.5657 77.1867 62.3455 77.1867C63.1254 77.1867 63.8976 77.0331 64.618 76.7346C65.3385 76.4361 65.9931 75.9986 66.5445 75.4472L90.2945 51.6972C90.846 51.1458 91.2834 50.4912 91.5819 49.7707C91.8804 49.0503 92.034 48.2781 92.034 47.4982C92.034 46.7184 91.8804 45.9462 91.5819 45.2257C91.2834 44.5053 90.846 43.8507 90.2945 43.2993ZM77.2654 37.436L57.564 17.7347C57.4261 17.5967 57.2624 17.4872 57.0822 17.4125C56.902 17.3378 56.7089 17.2993 56.5138 17.2993C56.3187 17.2993 56.1256 17.3378 55.9454 17.4125C55.7652 17.4872 55.6015 17.5967 55.4636 17.7347L32.582 40.6163C32.444 40.7542 32.3345 40.9179 32.2598 41.0981C32.1851 41.2783 32.1466 41.4714 32.1466 41.6665C32.1466 41.8616 32.1851 42.0547 32.2598 42.2349C32.3345 42.4151 32.444 42.5788 32.582 42.7167L38.2226 48.3685L10.6466 75.9593C9.58012 77.0818 8.99434 78.5766 9.01416 80.1249C9.03398 81.6731 9.65784 83.1524 10.7527 84.2473C11.8476 85.3422 13.3269 85.966 14.8752 85.9859C16.4234 86.0057 17.9182 85.4199 19.0408 84.3534L46.6316 56.7774L52.2833 62.4292C52.4212 62.5672 52.5849 62.6767 52.7651 62.7514C52.9453 62.8261 53.1385 62.8645 53.3335 62.8645C53.5286 62.8645 53.7218 62.8261 53.902 62.7514C54.0822 62.6767 54.2459 62.5672 54.3837 62.4292L77.2654 39.5476C77.4051 39.4095 77.516 39.2451 77.5916 39.0639C77.6673 38.8826 77.7063 38.6882 77.7063 38.4918C77.7063 38.2954 77.6673 38.1009 77.5916 37.9197C77.516 37.7385 77.4051 37.5741 77.2654 37.436Z" fill="#FDFDFD" />
               </g>
               <defs>
                    <clipPath id="clip0_331_3291">
                         <rect width="95" height="95" fill="white" />
                    </clipPath>
               </defs>
          </svg>
          <h3>Tata Cara <br> Pendaftaran Legalitas Merek</h3>
     </div>

     <!-- konten -->
     <div class="container-content p-5">
          <div class="content">
               <div class="text bg-white">
                    <p style="color: #076797; font-family: 'Segoe UI'; font-weight: bold;">Persyaratan yang dibutuhkan :</p>
                    <ol>Persyaratan pendaftaran mandiri :
                         <li>
                              E-tiket Merk / label merek (JPG)
                         </li>
                         <li>
                              Scan TTD permohonan (JPG)
                         </li>
                         <li>
                              Surat rekomendasi UKM dari Disperindag/Koperasi (jika UMKM)
                         </li>
                         <li>
                              Surat pernyataan UKM bermaterai (jika UMKM)
                         </li>
                    </ol>
                    <ol>Persyaratan pendaftaran melalui fasilitas Disperdagin :
                         <li>
                              Formulir
                         </li>
                         <li>
                              E-tiket Merk / label merek (JPG)
                         </li>
                         <li>
                              Scan TTD permohonan (JPG)
                         </li>
                         <li>
                              Surat rekomendasi UKM dari Disperindag/Koperasi (jika UMKM)
                         </li>
                         <li>
                              Surat pernyataan UKM bermaterai (jika UMKM)
                         </li>
                    </ol>
               </div>

               <!-- unduhan -->
               <div class="download-file">
                    <p>Unduh Panduan Lengkap Legalitas Merk</p>
                    <a href="aset_download/File Layanan Disperdagin Merk.pdf" download=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                              <path d="M18.375 12.4688V17.0625C18.375 17.4106 18.2367 17.7444 17.9906 17.9906C17.7444 18.2367 17.4106 18.375 17.0625 18.375H3.9375C3.5894 18.375 3.25556 18.2367 3.00942 17.9906C2.76328 17.7444 2.625 17.4106 2.625 17.0625V12.4688C2.625 12.2947 2.69414 12.1278 2.81721 12.0047C2.94028 11.8816 3.1072 11.8125 3.28125 11.8125C3.4553 11.8125 3.62222 11.8816 3.74529 12.0047C3.86836 12.1278 3.9375 12.2947 3.9375 12.4688V17.0625H17.0625V12.4688C17.0625 12.2947 17.1316 12.1278 17.2547 12.0047C17.3778 11.8816 17.5447 11.8125 17.7188 11.8125C17.8928 11.8125 18.0597 11.8816 18.1828 12.0047C18.3059 12.1278 18.375 12.2947 18.375 12.4688ZM10.0357 12.933C10.0967 12.9941 10.169 13.0425 10.2487 13.0755C10.3284 13.1085 10.4138 13.1255 10.5 13.1255C10.5862 13.1255 10.6716 13.1085 10.7513 13.0755C10.831 13.0425 10.9033 12.9941 10.9643 12.933L14.2455 9.6518C14.3065 9.59082 14.3549 9.51844 14.3879 9.43878C14.4209 9.35911 14.4379 9.27373 14.4379 9.1875C14.4379 9.10127 14.4209 9.01589 14.3879 8.93622C14.3549 8.85656 14.3065 8.78418 14.2455 8.7232C14.1846 8.66223 14.1122 8.61386 14.0325 8.58087C13.9529 8.54787 13.8675 8.53089 13.7812 8.53089C13.695 8.53089 13.6096 8.54787 13.53 8.58087C13.4503 8.61386 13.3779 8.66223 13.317 8.7232L11.1562 10.8847V3.28125C11.1562 3.1072 11.0871 2.94028 10.964 2.81721C10.841 2.69414 10.674 2.625 10.5 2.625C10.326 2.625 10.159 2.69414 10.036 2.81721C9.91289 2.94028 9.84375 3.1072 9.84375 3.28125V10.8847L7.68305 8.7232C7.55991 8.60006 7.3929 8.53089 7.21875 8.53089C7.0446 8.53089 6.87759 8.60006 6.75445 8.7232C6.63131 8.84634 6.56214 9.01335 6.56214 9.1875C6.56214 9.36165 6.63131 9.52866 6.75445 9.6518L10.0357 12.933Z" fill="#076797" />
                         </svg> Unduh</a>
               </div>
          </div>

          <div class="content">
               <div class="image">
                    <img src="images/flowchart_merk.png" alt="legalitas merk">
               </div>
          </div>
     </div>

     <!-- footer -->
     <?php
     include "komponen/footer.php";
     ?>


     <!-- SCRIPTS -->
     </script>
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