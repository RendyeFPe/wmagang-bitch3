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
    <h1>Perpanjangan Minuman Beralkohol</h1>
    <h4>DISPERDAGIN Kota Kediri</h4>
  </div>

  <div class="guide-title">
    <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
      <g clip-path="url(#clip0_532_5248)">
        <path d="M91.1638 15.7123L79.2888 3.8373C78.7318 3.28024 77.9762 2.96729 77.1884 2.96729C76.4007 2.96729 75.6451 3.28024 75.0881 3.8373C74.531 4.39435 74.218 5.14989 74.218 5.93769C74.218 6.72549 74.531 7.48102 75.0881 8.03808L75.6373 8.58358L55.164 23.9394L40.9808 26.7783C40.4065 26.8934 39.8787 27.1747 39.4631 27.5873L8.53611 58.5068C6.86599 60.1771 5.92773 62.4423 5.92773 64.8043C5.92773 67.1663 6.86599 69.4315 8.53611 71.1018L23.8994 86.465C25.5696 88.1351 27.8349 89.0734 30.1968 89.0734C32.5588 89.0734 34.8241 88.1351 36.4943 86.465L67.4138 55.5492C67.8274 55.1342 68.1088 54.6061 68.2228 54.0314L71.0617 39.8482L86.4175 19.375L86.9631 19.9242C87.2389 20.2 87.5663 20.4188 87.9267 20.5681C88.2871 20.7174 88.6734 20.7942 89.0634 20.7942C89.4535 20.7942 89.8398 20.7174 90.2002 20.5681C90.5606 20.4188 90.888 20.2 91.1638 19.9242C91.4397 19.6484 91.6585 19.3209 91.8077 18.9605C91.957 18.6002 92.0339 18.2139 92.0339 17.8238C92.0339 17.4337 91.957 17.0475 91.8077 16.6871C91.6585 16.3267 91.4397 15.9993 91.1638 15.7234V15.7123ZM30.1968 83.1252C29.8073 83.1262 29.4214 83.05 29.0616 82.901C28.7017 82.7519 28.3749 82.533 28.1002 82.2568L12.7443 66.901C12.188 66.3443 11.8755 65.5895 11.8755 64.8024C11.8755 64.0154 12.188 63.2606 12.7443 62.7039L14.8447 60.6035L34.3976 80.1564L32.2861 82.2568C31.7316 82.8107 30.9806 83.1229 30.1968 83.1252ZM65.9072 36.8127C65.641 37.1668 65.4583 37.5766 65.3728 38.0113L62.5785 51.9756L59.3759 55.1781L39.823 35.6252L43.0256 32.4226L56.9898 29.6283C57.4245 29.5428 57.8343 29.3601 58.1884 29.0939L79.8789 12.8252L82.1759 15.1223L65.9072 36.8127Z" fill="#FDFDFD" />
      </g>
      <defs>
        <clipPath id="clip0_532_5248">
          <rect width="95" height="95" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <h3>Tata Cara <br> Pendaftaran Perpanjangan <br> Minuman Beralkohol</h3>
  </div>

  <!-- konten -->
  <div class="container-content p-5">
    <div class="content">
      <div class="text bg-white">
        <p style="color: #076797; font-family: 'Segoe UI'; font-weight: bold;">Persyaratan yang dibutuhkan :</p>
        <ol>
          <li>
            Scan Nomor Induk Berusaha (NIB) dan lampirannya
          </li>
          <li>
            Scan KTP/Pasport Asli Pemilik atau Penanggung Jawab
          </li>
          <li>
            Scan Akte Pendirian / Perubahan Perusahaan yang telah disahkan instansi terkait (Perseroan Terbatas (PT), Koperasi)
          </li>
          <li>
            Scan Asli Nomor Pokok Wajib Pajak (kecuali usaha mikro)
          </li>
          <li>
            Scan Izin Usaha Perdagangan atau Tanda Daftar Usaha Pariwisata yang Diterbitkan oleh OSS
          </li>
          <li>
            Surat penunjukan dari sub distributor sebagai pengecer atau penjual langsung
          </li>
          <li>
            Scan Asli Lunas Pajak Bumi dan Bangunan (PBB) terbaru
          </li>
          <li>
            Scan SIUP MB Asli (bagi Perpanjangan)
          </li>
          <li>
            Rencana Penjualan Minuman Beralkohol 1 tahun kedepan
          </li>
          <li>
            Pas Foto ( 1/2 Badan ) Berwarna 4 x 6 dengan latar belakang Merah atau Biru ( Formal )
          </li>
          <li>
            Scan NPPBKC
          </li>
        </ol>
      </div>

      <!-- unduhan -->
      <div class="download-file">
        <p>Unduh Panduan Lengkap Perpanjangan Minuman Beralkohol</p>
        <a href="aset_download/File Layanan Disperdagin Minuman Alkohol.pdf" download=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path d="M18.375 12.4688V17.0625C18.375 17.4106 18.2367 17.7444 17.9906 17.9906C17.7444 18.2367 17.4106 18.375 17.0625 18.375H3.9375C3.5894 18.375 3.25556 18.2367 3.00942 17.9906C2.76328 17.7444 2.625 17.4106 2.625 17.0625V12.4688C2.625 12.2947 2.69414 12.1278 2.81721 12.0047C2.94028 11.8816 3.1072 11.8125 3.28125 11.8125C3.4553 11.8125 3.62222 11.8816 3.74529 12.0047C3.86836 12.1278 3.9375 12.2947 3.9375 12.4688V17.0625H17.0625V12.4688C17.0625 12.2947 17.1316 12.1278 17.2547 12.0047C17.3778 11.8816 17.5447 11.8125 17.7188 11.8125C17.8928 11.8125 18.0597 11.8816 18.1828 12.0047C18.3059 12.1278 18.375 12.2947 18.375 12.4688ZM10.0357 12.933C10.0967 12.9941 10.169 13.0425 10.2487 13.0755C10.3284 13.1085 10.4138 13.1255 10.5 13.1255C10.5862 13.1255 10.6716 13.1085 10.7513 13.0755C10.831 13.0425 10.9033 12.9941 10.9643 12.933L14.2455 9.6518C14.3065 9.59082 14.3549 9.51844 14.3879 9.43878C14.4209 9.35911 14.4379 9.27373 14.4379 9.1875C14.4379 9.10127 14.4209 9.01589 14.3879 8.93622C14.3549 8.85656 14.3065 8.78418 14.2455 8.7232C14.1846 8.66223 14.1122 8.61386 14.0325 8.58087C13.9529 8.54787 13.8675 8.53089 13.7812 8.53089C13.695 8.53089 13.6096 8.54787 13.53 8.58087C13.4503 8.61386 13.3779 8.66223 13.317 8.7232L11.1562 10.8847V3.28125C11.1562 3.1072 11.0871 2.94028 10.964 2.81721C10.841 2.69414 10.674 2.625 10.5 2.625C10.326 2.625 10.159 2.69414 10.036 2.81721C9.91289 2.94028 9.84375 3.1072 9.84375 3.28125V10.8847L7.68305 8.7232C7.55991 8.60006 7.3929 8.53089 7.21875 8.53089C7.0446 8.53089 6.87759 8.60006 6.75445 8.7232C6.63131 8.84634 6.56214 9.01335 6.56214 9.1875C6.56214 9.36165 6.63131 9.52866 6.75445 9.6518L10.0357 12.933Z" fill="#076797" />
          </svg> Unduh</a>
      </div>
    </div>

    <div class="content">
      <div class="image">
        <img src="images/flow_minhol.png" alt="minhol">
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