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

  <div class="hero-title">
    <h1>Sertifikasi Halal</h1>
    <h4>DISPERDAGIN Kota Kediri</h4>
  </div>

  <div class="guide-title">
    <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
      <g clip-path="url(#clip0_331_3325)">
        <path d="M83.8152 38.1559C82.4162 36.6938 80.9689 35.1871 80.4234 33.8623C79.9187 32.6488 79.8891 30.6375 79.8594 28.6893C79.8037 25.0674 79.7443 20.9631 76.8906 18.1094C74.0369 15.2557 69.9326 15.1963 66.3107 15.1406C64.3625 15.1109 62.3512 15.0812 61.1377 14.5766C59.8166 14.0311 58.3062 12.5838 56.8441 11.1848C54.2836 8.72441 51.3742 5.9375 47.5 5.9375C43.6258 5.9375 40.7201 8.72441 38.1559 11.1848C36.6938 12.5838 35.1871 14.0311 33.8623 14.5766C32.6562 15.0812 30.6375 15.1109 28.6893 15.1406C25.0674 15.1963 20.9631 15.2557 18.1094 18.1094C15.2557 20.9631 15.2148 25.0674 15.1406 28.6893C15.1109 30.6375 15.0812 32.6488 14.5766 33.8623C14.0311 35.1834 12.5838 36.6938 11.1848 38.1559C8.72441 40.7164 5.9375 43.6258 5.9375 47.5C5.9375 51.3742 8.72441 54.2799 11.1848 56.8441C12.5838 58.3062 14.0311 59.8129 14.5766 61.1377C15.0812 62.3512 15.1109 64.3625 15.1406 66.3107C15.1963 69.9326 15.2557 74.0369 18.1094 76.8906C20.9631 79.7443 25.0674 79.8037 28.6893 79.8594C30.6375 79.8891 32.6488 79.9187 33.8623 80.4234C35.1834 80.9689 36.6938 82.4162 38.1559 83.8152C40.7164 86.2756 43.6258 89.0625 47.5 89.0625C51.3742 89.0625 54.2799 86.2756 56.8441 83.8152C58.3062 82.4162 59.8129 80.9689 61.1377 80.4234C62.3512 79.9187 64.3625 79.8891 66.3107 79.8594C69.9326 79.8037 74.0369 79.7443 76.8906 76.8906C79.7443 74.0369 79.8037 69.9326 79.8594 66.3107C79.8891 64.3625 79.9187 62.3512 80.4234 61.1377C80.9689 59.8166 82.4162 58.3062 83.8152 56.8441C86.2756 54.2836 89.0625 51.3742 89.0625 47.5C89.0625 43.6258 86.2756 40.7201 83.8152 38.1559ZM64.4441 40.6941L43.6629 61.4754C43.3872 61.7514 43.0598 61.9704 42.6994 62.1198C42.339 62.2692 41.9526 62.3461 41.5625 62.3461C41.1724 62.3461 40.786 62.2692 40.4256 62.1198C40.0652 61.9704 39.7378 61.7514 39.4621 61.4754L30.5559 52.5691C29.9988 52.0121 29.6859 51.2565 29.6859 50.4688C29.6859 49.681 29.9988 48.9254 30.5559 48.3684C31.1129 47.8113 31.8685 47.4983 32.6562 47.4983C33.444 47.4983 34.1996 47.8113 34.7566 48.3684L41.5625 55.1779L60.2434 36.4934C60.5192 36.2175 60.8466 35.9987 61.207 35.8495C61.5674 35.7002 61.9537 35.6234 62.3438 35.6234C62.7338 35.6234 63.1201 35.7002 63.4805 35.8495C63.8409 35.9987 64.1683 36.2175 64.4441 36.4934C64.72 36.7692 64.9388 37.0966 65.088 37.457C65.2373 37.8174 65.3142 38.2037 65.3142 38.5938C65.3142 38.9838 65.2373 39.3701 65.088 39.7305C64.9388 40.0909 64.72 40.4183 64.4441 40.6941Z" fill="#fff" />
      </g>
      <defs>
        <clipPath id="clip0_331_3325">
          <rect width="95" height="95" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <h3>Tata Cara <br> Pendaftaran Sertifikasi Halal</h3>
  </div>

  <!-- konten -->
  <div class="container-content p-5">
    <div class="content">
      <div class="text bg-white">
        <p style="color: #076797; font-family: 'Segoe UI'; font-weight: bold;">Persyaratan yang dibutuhkan :</p>
        <ol>
          <li>
            Surat Permohonan
          </li>
          <li>
            Formulir Permohonan
          </li>
          <li>
            NIB
          </li>
          <li>
            Dokumen Penyelia halal (SK penetapan penyelia halal, salinan KTP, daftar riwayat hidup)
          </li>
          <li>
            Daftar Nama Produk
          </li>
          <li>
            Daftar produk dan bahan yang digunakan
          </li>
          <li>
            Manual SJPH
          </li>
          <li>
            Izin edar atau SLHS (jika ada)
          </li>
        </ol>
      </div>

      <!-- unduhan -->
      <div class="download-file">
        <p>Unduh Panduan Lengkap Sertifikasi Halal</p>
        <a href="aset_download/File Layanan Disperdagin Halal.pdf" download=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path d="M18.375 12.4688V17.0625C18.375 17.4106 18.2367 17.7444 17.9906 17.9906C17.7444 18.2367 17.4106 18.375 17.0625 18.375H3.9375C3.5894 18.375 3.25556 18.2367 3.00942 17.9906C2.76328 17.7444 2.625 17.4106 2.625 17.0625V12.4688C2.625 12.2947 2.69414 12.1278 2.81721 12.0047C2.94028 11.8816 3.1072 11.8125 3.28125 11.8125C3.4553 11.8125 3.62222 11.8816 3.74529 12.0047C3.86836 12.1278 3.9375 12.2947 3.9375 12.4688V17.0625H17.0625V12.4688C17.0625 12.2947 17.1316 12.1278 17.2547 12.0047C17.3778 11.8816 17.5447 11.8125 17.7188 11.8125C17.8928 11.8125 18.0597 11.8816 18.1828 12.0047C18.3059 12.1278 18.375 12.2947 18.375 12.4688ZM10.0357 12.933C10.0967 12.9941 10.169 13.0425 10.2487 13.0755C10.3284 13.1085 10.4138 13.1255 10.5 13.1255C10.5862 13.1255 10.6716 13.1085 10.7513 13.0755C10.831 13.0425 10.9033 12.9941 10.9643 12.933L14.2455 9.6518C14.3065 9.59082 14.3549 9.51844 14.3879 9.43878C14.4209 9.35911 14.4379 9.27373 14.4379 9.1875C14.4379 9.10127 14.4209 9.01589 14.3879 8.93622C14.3549 8.85656 14.3065 8.78418 14.2455 8.7232C14.1846 8.66223 14.1122 8.61386 14.0325 8.58087C13.9529 8.54787 13.8675 8.53089 13.7812 8.53089C13.695 8.53089 13.6096 8.54787 13.53 8.58087C13.4503 8.61386 13.3779 8.66223 13.317 8.7232L11.1562 10.8847V3.28125C11.1562 3.1072 11.0871 2.94028 10.964 2.81721C10.841 2.69414 10.674 2.625 10.5 2.625C10.326 2.625 10.159 2.69414 10.036 2.81721C9.91289 2.94028 9.84375 3.1072 9.84375 3.28125V10.8847L7.68305 8.7232C7.55991 8.60006 7.3929 8.53089 7.21875 8.53089C7.0446 8.53089 6.87759 8.60006 6.75445 8.7232C6.63131 8.84634 6.56214 9.01335 6.56214 9.1875C6.56214 9.36165 6.63131 9.52866 6.75445 9.6518L10.0357 12.933Z" fill="#076797" />
          </svg> Unduh</a>
      </div>
    </div>

    <div class="content">
      <div class="image">
        <h5 class="text-center" style="color: var(--Color-Style-Primary-primary-500, #076797);">Langkah - Langkah Sertifikasi Halal Reguler</h5>
        <img src="images/flowchart_halalReguler.png" alt="sertifikasi halal">
        <h5 class="text-center" style="color: var(--Color-Style-Primary-primary-500, #076797);">Langkah - Langkah Sertifikasi Halal Gratis</h5>
        <img src="images/flowchart_halalGratis.png" alt="sertifikasi halal">
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php
  include "komponen/footer.php";
  ?>


  <!-- script -->
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