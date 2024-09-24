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
    <h1>SIINas</h1>
    <h4>DISPERDAGIN Kota Kediri</h4>
  </div>

  <div class="guide-title">
    <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
      <g clip-path="url(#clip0_331_3430)">
        <path d="M77.1875 11.875H17.8125C16.2378 11.875 14.7276 12.5006 13.6141 13.6141C12.5006 14.7276 11.875 16.2378 11.875 17.8125V77.1875C11.875 78.7622 12.5006 80.2724 13.6141 81.3859C14.7276 82.4994 16.2378 83.125 17.8125 83.125H77.1875C78.7622 83.125 80.2724 82.4994 81.3859 81.3859C82.4994 80.2724 83.125 78.7622 83.125 77.1875V17.8125C83.125 16.2378 82.4994 14.7276 81.3859 13.6141C80.2724 12.5006 78.7622 11.875 77.1875 11.875ZM29.6875 77.1875H17.8125V17.8125H29.6875V77.1875ZM65.3125 56.4062H41.5625C40.7751 56.4062 40.02 56.0935 39.4633 55.5367C38.9065 54.98 38.5938 54.2249 38.5938 53.4375C38.5938 52.6501 38.9065 51.895 39.4633 51.3383C40.02 50.7815 40.7751 50.4688 41.5625 50.4688H65.3125C66.0999 50.4688 66.855 50.7815 67.4117 51.3383C67.9685 51.895 68.2812 52.6501 68.2812 53.4375C68.2812 54.2249 67.9685 54.98 67.4117 55.5367C66.855 56.0935 66.0999 56.4062 65.3125 56.4062ZM65.3125 44.5312H41.5625C40.7751 44.5312 40.02 44.2185 39.4633 43.6617C38.9065 43.105 38.5938 42.3499 38.5938 41.5625C38.5938 40.7751 38.9065 40.02 39.4633 39.4633C40.02 38.9065 40.7751 38.5938 41.5625 38.5938H65.3125C66.0999 38.5938 66.855 38.9065 67.4117 39.4633C67.9685 40.02 68.2812 40.7751 68.2812 41.5625C68.2812 42.3499 67.9685 43.105 67.4117 43.6617C66.855 44.2185 66.0999 44.5312 65.3125 44.5312Z" fill="#FDFDFD" />
      </g>
      <defs>
        <clipPath id="clip0_331_3430">
          <rect width="95" height="95" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <h3>Tata Cara <br> Pendaftaran SIINas</h3>
  </div>

  <!-- konten -->
  <div class="container-content p-5">
    <div class="content">
      <div class="text bg-white">
        <p style="color: #076797; font-family: 'Segoe UI'; font-weight: bold;">Persyaratan yang dibutuhkan :</p>
        <ol>Persyaratan registrasi :
          <li>
            NPWP
          </li>
          <li>
            NiB OSSRBA
          </li>
          <li>
            Email (Email yang didaftarkan harus sama dengan email yang tercantum pada NIB)
          </li>
        </ol>
        <ol>Persyaratan minimum upload dokumen :
          <li>
            Akta pendirian perusahaan/akta perusahaan
          </li>
          <li>
            NIB
          </li>
          <li>
            NPWP
          </li>
          <li>
            Dokumen perizinan berusaha sektor industri (PB-Sektor Industri)
            <ol type="a">
              <li>
                Rendah (Upload NIB)
              </li>
              <li>
                Menengah Rendah + Menengah Tinggi (Upload Sertif Standar)
              </li>
              <li>
                Tinggi (Upload Izin)
              </li>
            </ol>
          </li>
        </ol>
      </div>

      <!-- unduhan -->
      <div class="download-file">
        <p>Unduh Panduan Lengkap SIINas</p>
        <a href="aset_download/File Layanan Disperdagin SIINas.pdf" download=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path d="M18.375 12.4688V17.0625C18.375 17.4106 18.2367 17.7444 17.9906 17.9906C17.7444 18.2367 17.4106 18.375 17.0625 18.375H3.9375C3.5894 18.375 3.25556 18.2367 3.00942 17.9906C2.76328 17.7444 2.625 17.4106 2.625 17.0625V12.4688C2.625 12.2947 2.69414 12.1278 2.81721 12.0047C2.94028 11.8816 3.1072 11.8125 3.28125 11.8125C3.4553 11.8125 3.62222 11.8816 3.74529 12.0047C3.86836 12.1278 3.9375 12.2947 3.9375 12.4688V17.0625H17.0625V12.4688C17.0625 12.2947 17.1316 12.1278 17.2547 12.0047C17.3778 11.8816 17.5447 11.8125 17.7188 11.8125C17.8928 11.8125 18.0597 11.8816 18.1828 12.0047C18.3059 12.1278 18.375 12.2947 18.375 12.4688ZM10.0357 12.933C10.0967 12.9941 10.169 13.0425 10.2487 13.0755C10.3284 13.1085 10.4138 13.1255 10.5 13.1255C10.5862 13.1255 10.6716 13.1085 10.7513 13.0755C10.831 13.0425 10.9033 12.9941 10.9643 12.933L14.2455 9.6518C14.3065 9.59082 14.3549 9.51844 14.3879 9.43878C14.4209 9.35911 14.4379 9.27373 14.4379 9.1875C14.4379 9.10127 14.4209 9.01589 14.3879 8.93622C14.3549 8.85656 14.3065 8.78418 14.2455 8.7232C14.1846 8.66223 14.1122 8.61386 14.0325 8.58087C13.9529 8.54787 13.8675 8.53089 13.7812 8.53089C13.695 8.53089 13.6096 8.54787 13.53 8.58087C13.4503 8.61386 13.3779 8.66223 13.317 8.7232L11.1562 10.8847V3.28125C11.1562 3.1072 11.0871 2.94028 10.964 2.81721C10.841 2.69414 10.674 2.625 10.5 2.625C10.326 2.625 10.159 2.69414 10.036 2.81721C9.91289 2.94028 9.84375 3.1072 9.84375 3.28125V10.8847L7.68305 8.7232C7.55991 8.60006 7.3929 8.53089 7.21875 8.53089C7.0446 8.53089 6.87759 8.60006 6.75445 8.7232C6.63131 8.84634 6.56214 9.01335 6.56214 9.1875C6.56214 9.36165 6.63131 9.52866 6.75445 9.6518L10.0357 12.933Z" fill="#076797" />
          </svg> Unduh</a>
      </div>
    </div>

    <div class="content">
      <div class="image">
        <img src="images/flowchart_siinas.png" alt="siinas">
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