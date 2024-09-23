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

    .open-button {
      background-color: #076797;
      color: #fff;
      padding: 8px 10px;
      border: solid 2px #fff;
      cursor: pointer;
      border-radius: 8px;
      width: auto;
      height: auto;
      font-weight: 500;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: fit-content;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      border-radius: 10px;
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
  </style>
</head>

<body>

  <!-- navbar -->
  <?php
  include "komponen/navbar.php";
  ?>

  <!-- hero judul -->
  <div class="hero-title">
    <h1>Tera/Tera Ulang</h1>
    <h4>DISPERDAGIN Kota Kediri</h4>
  </div>

  <div class="guide-title">
    <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
      <g clip-path="url(#clip0_331_3534)">
        <path d="M88.851 49.3555L76.976 19.668C76.7539 19.119 76.3727 18.6489 75.8814 18.3183C75.39 17.9876 74.811 17.8115 74.2188 17.8125C74.0027 17.8158 73.7875 17.8419 73.5768 17.8904L50.4688 23.0078V14.8438C50.4688 14.0564 50.156 13.3013 49.5993 12.7445C49.0425 12.1878 48.2874 11.875 47.5001 11.875C46.7127 11.875 45.9576 12.1878 45.4008 12.7445C44.8441 13.3013 44.5313 14.0564 44.5313 14.8438V24.3363L20.1393 29.7654C19.6691 29.868 19.2308 30.0835 18.8623 30.3931C18.4938 30.7028 18.2061 31.0974 18.0241 31.543L6.14908 61.2305C6.00702 61.5843 5.93518 61.9624 5.93756 62.3438C5.93756 70.9939 15.0442 74.2188 20.7813 74.2188C26.5184 74.2188 35.6251 70.9939 35.6251 62.3438C35.6274 61.9624 35.5556 61.5843 35.4135 61.2305L24.8337 34.7975L44.5313 30.4297V77.1875H38.5938C37.8064 77.1875 37.0513 77.5003 36.4946 78.057C35.9378 78.6138 35.6251 79.3689 35.6251 80.1562C35.6251 80.9436 35.9378 81.6987 36.4946 82.2555C37.0513 82.8122 37.8064 83.125 38.5938 83.125H56.4063C57.1937 83.125 57.9488 82.8122 58.5055 82.2555C59.0623 81.6987 59.3751 80.9436 59.3751 80.1562C59.3751 79.3689 59.0623 78.6138 58.5055 78.057C57.9488 77.5003 57.1937 77.1875 56.4063 77.1875H50.4688V29.1012L69.3946 24.9004L59.5866 49.3555C59.4445 49.7093 59.3727 50.0874 59.3751 50.4688C59.3751 59.1189 68.4817 62.3438 74.2188 62.3438C79.9559 62.3438 89.0626 59.1189 89.0626 50.4688C89.0649 50.0874 88.9931 49.7093 88.851 49.3555ZM29.476 62.3438H12.1051L20.7813 40.6496L29.476 62.3438ZM65.5612 50.4688L74.2188 28.7746L82.895 50.4688H65.5612Z" fill="#FDFDFD" />
      </g>
      <defs>
        <clipPath id="clip0_331_3534">
          <rect width="95" height="95" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <h3>Tata Cara <br> Pendaftaran Tera/Tera Ulang</h3>
  </div>

  <!-- konten -->
  <div class="container-content p-5">
    <div class="content">
      <div class="text bg-white">
        <p style="color: #076797; font-family: 'Segoe UI'; font-weight: bold;">Persyaratan yang dibutuhkan :</p>
        <ol>
          <li>
            Data Nama Usaha
          </li>
          <li>
            Lokasi Usaha
          </li>
          <li>
            Surat Permohonan
          </li>
          <li>
            Alat UTTP
          </li>
          <li>
            Fotocopy KTP
          </li>
          <li>
            Nomor Hp
          </li>
        </ol>
        <div class="booking">
          <button class="open-button" onclick="openBookingPage()" target="_blank">Booking Tera</button>
        </div>
      </div>

      
      <!-- unduhan -->
      <div class="download-file">
        <p>Unduh Panduan Lengkap Tera/Tera Ulang</p>
        <a href="aset_download/File Layanan Disperdagin TERA.pdf" download=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path d="M18.375 12.4688V17.0625C18.375 17.4106 18.2367 17.7444 17.9906 17.9906C17.7444 18.2367 17.4106 18.375 17.0625 18.375H3.9375C3.5894 18.375 3.25556 18.2367 3.00942 17.9906C2.76328 17.7444 2.625 17.4106 2.625 17.0625V12.4688C2.625 12.2947 2.69414 12.1278 2.81721 12.0047C2.94028 11.8816 3.1072 11.8125 3.28125 11.8125C3.4553 11.8125 3.62222 11.8816 3.74529 12.0047C3.86836 12.1278 3.9375 12.2947 3.9375 12.4688V17.0625H17.0625V12.4688C17.0625 12.2947 17.1316 12.1278 17.2547 12.0047C17.3778 11.8816 17.5447 11.8125 17.7188 11.8125C17.8928 11.8125 18.0597 11.8816 18.1828 12.0047C18.3059 12.1278 18.375 12.2947 18.375 12.4688ZM10.0357 12.933C10.0967 12.9941 10.169 13.0425 10.2487 13.0755C10.3284 13.1085 10.4138 13.1255 10.5 13.1255C10.5862 13.1255 10.6716 13.1085 10.7513 13.0755C10.831 13.0425 10.9033 12.9941 10.9643 12.933L14.2455 9.6518C14.3065 9.59082 14.3549 9.51844 14.3879 9.43878C14.4209 9.35911 14.4379 9.27373 14.4379 9.1875C14.4379 9.10127 14.4209 9.01589 14.3879 8.93622C14.3549 8.85656 14.3065 8.78418 14.2455 8.7232C14.1846 8.66223 14.1122 8.61386 14.0325 8.58087C13.9529 8.54787 13.8675 8.53089 13.7812 8.53089C13.695 8.53089 13.6096 8.54787 13.53 8.58087C13.4503 8.61386 13.3779 8.66223 13.317 8.7232L11.1562 10.8847V3.28125C11.1562 3.1072 11.0871 2.94028 10.964 2.81721C10.841 2.69414 10.674 2.625 10.5 2.625C10.326 2.625 10.159 2.69414 10.036 2.81721C9.91289 2.94028 9.84375 3.1072 9.84375 3.28125V10.8847L7.68305 8.7232C7.55991 8.60006 7.3929 8.53089 7.21875 8.53089C7.0446 8.53089 6.87759 8.60006 6.75445 8.7232C6.63131 8.84634 6.56214 9.01335 6.56214 9.1875C6.56214 9.36165 6.63131 9.52866 6.75445 9.6518L10.0357 12.933Z" fill="#076797" />
          </svg> Unduh</a>
      </div>

      <!-- booking tera
      <div class="modal" id="myModal">
        <div class="modal-content">
          <span class="close" id="closeModalBtn">&times;</span>
          <iframe id="googleForm" src="https://docs.google.com/forms/d/e/1FAIpQLScWEQAY9XV0HmimPwlCst9R4VKkJCoEOlS-9jrXM0NcLD5-Bg/viewform?embedded=true" width="100%" height="500px" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
        </div>
      </div> -->
    </div>

    <div class="content">
      <div class="image">
        <h5 class="text-center" style="color: var(--Color-Style-Primary-primary-500, #076797);">Langkah - Langkah Tera/Tera Ulang Di Kantor dan Di Tempat Pakai</h5>
        <img src="images/flowchart_tera.png" alt="tera">
        <h5 class="text-center mt-5" style="color: var(--Color-Style-Primary-primary-500, #076797);">Sidang Tera Ulang Di Kantor</h5>
        <img src="images/flowchart_sidangtera.png" alt="tera">
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php
  include "komponen/footer.php";
  ?>

  <!-- script -->
  <script>
        function openBookingPage() {
          window.open("https://forms.gle/SCBfUojPuNBem31BA", "_blank"); // Ganti dengan URL halaman yang ingin dibuka
        }
  </script>
  
  <!-- <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementById("closeModalBtn");

    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script> -->
  <!-- <script>
    document.getElementById('googleForm').onload = function() {
      var iframe = document.getElementById('googleForm').contentWindow;
      iframe.addEventListener('submit', function() {
        html2canvas(iframe.document.body).then(function(canvas) {
          var imgData = canvas.toDataURL('image/png');
          var doc = new jsPDF('p', 'mm', 'a4');
          doc.addImage(imgData, 'PNG', 10, 10);
          var pdf = doc.output('blob');

          // Create a FormData object to send the PDF to the server
          var formData = new FormData();
          formData.append('pdf', pdf, 'form-response.pdf');

          // Send the PDF to the server using fetch
          fetch('save-pdf.php', {
              method: 'POST',
              body: formData
            }).then(response => response.blob())
            .then(blob => {
              var url = window.URL.createObjectURL(blob);
              var a = document.createElement('a');
              a.style.display = 'none';
              a.href = url;
              a.download = 'form-response.pdf';
              document.body.appendChild(a);
              a.click();
              window.URL.revokeObjectURL(url);
            }).catch(error => console.error('Error:', error));
        });
      });
    }
  </script> -->
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