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
        <h1>Tanda Daftar Gudang</h1>
        <h4>DISPERDAGIN Kota Kediri</h4>
    </div>

    <div class="guide-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
            <g clip-path="url(#clip0_531_5232)">
                <path d="M83.125 83.125C83.125 83.9124 82.8122 84.6675 82.2555 85.2242C81.6987 85.781 80.9436 86.0938 80.1562 86.0938H14.8438C14.0564 86.0938 13.3013 85.781 12.7445 85.2242C12.1878 84.6675 11.875 83.9124 11.875 83.125C11.875 82.3376 12.1878 81.5825 12.7445 81.0258C13.3013 80.469 14.0564 80.1562 14.8438 80.1562H80.1562C80.9436 80.1562 81.6987 80.469 82.2555 81.0258C82.8122 81.5825 83.125 82.3376 83.125 83.125ZM77.1875 47.5H56.2467L62.0766 20.3025C62.4478 18.5714 62.4273 16.7791 62.0164 15.0568C61.6055 13.3346 60.8148 11.7261 59.702 10.3489C58.5891 8.97181 57.1825 7.86094 55.5849 7.09765C53.9873 6.33436 52.2393 5.93798 50.4688 5.9375H44.5312C42.7607 5.93798 41.0127 6.33436 39.4151 7.09765C37.8175 7.86094 36.4109 8.97181 35.298 10.3489C34.1852 11.7261 33.3945 13.3346 32.9836 15.0568C32.5727 16.7791 32.5522 18.5714 32.9234 20.3025L38.7533 47.5H17.8125C16.2378 47.5 14.7276 48.1256 13.6141 49.2391C12.5006 50.3526 11.875 51.8628 11.875 53.4375V68.2812C11.875 69.856 12.5006 71.3662 13.6141 72.4797C14.7276 73.5932 16.2378 74.2188 17.8125 74.2188H77.1875C78.7622 74.2188 80.2724 73.5932 81.3859 72.4797C82.4994 71.3662 83.125 69.856 83.125 68.2812V53.4375C83.125 51.8628 82.4994 50.3526 81.3859 49.2391C80.2724 48.1256 78.7622 47.5 77.1875 47.5Z" fill="#FDFDFD" />
            </g>
            <defs>
                <clipPath id="clip0_531_5232">
                    <rect width="95" height="95" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h3>Tata Cara <br> Pendaftaran Tanda Daftar Gudang</h3>
    </div>

    <!-- konten -->
    <div class="container-content p-5">
        <div class="content">
            <div class="text bg-white">
                <p style="color: #076797; font-family: 'Segoe UI'; font-weight: bold;">Persyaratan yang dibutuhkan :</p>
                <ol>
                    <li>
                        KTP Asli
                    </li>
                    <li>
                        NPWP
                    </li>
                    <li>
                        Nomor BPJS Ketenagakerjaan (Jika ada)
                    </li>
                    <li>
                        Nomor BPJS Kesehatan (Jika ada)
                    </li>
                    <li>
                        NIB
                    </li>
                    <li>
                        Sertifikasi Gudang
                    </li>
                    <li>
                        IMB/PBG (Persetujuan Bagunan Gedung)
                    </li>
                </ol>
            </div>

            <!-- unduhan -->
            <div class="download-file">
                <p>Unduh Panduan Lengkap Tanda Daftar Gudang</p>
                <a href="aset_download/File Layanan Disperdagin TDG.pdf" download=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M18.375 12.4688V17.0625C18.375 17.4106 18.2367 17.7444 17.9906 17.9906C17.7444 18.2367 17.4106 18.375 17.0625 18.375H3.9375C3.5894 18.375 3.25556 18.2367 3.00942 17.9906C2.76328 17.7444 2.625 17.4106 2.625 17.0625V12.4688C2.625 12.2947 2.69414 12.1278 2.81721 12.0047C2.94028 11.8816 3.1072 11.8125 3.28125 11.8125C3.4553 11.8125 3.62222 11.8816 3.74529 12.0047C3.86836 12.1278 3.9375 12.2947 3.9375 12.4688V17.0625H17.0625V12.4688C17.0625 12.2947 17.1316 12.1278 17.2547 12.0047C17.3778 11.8816 17.5447 11.8125 17.7188 11.8125C17.8928 11.8125 18.0597 11.8816 18.1828 12.0047C18.3059 12.1278 18.375 12.2947 18.375 12.4688ZM10.0357 12.933C10.0967 12.9941 10.169 13.0425 10.2487 13.0755C10.3284 13.1085 10.4138 13.1255 10.5 13.1255C10.5862 13.1255 10.6716 13.1085 10.7513 13.0755C10.831 13.0425 10.9033 12.9941 10.9643 12.933L14.2455 9.6518C14.3065 9.59082 14.3549 9.51844 14.3879 9.43878C14.4209 9.35911 14.4379 9.27373 14.4379 9.1875C14.4379 9.10127 14.4209 9.01589 14.3879 8.93622C14.3549 8.85656 14.3065 8.78418 14.2455 8.7232C14.1846 8.66223 14.1122 8.61386 14.0325 8.58087C13.9529 8.54787 13.8675 8.53089 13.7812 8.53089C13.695 8.53089 13.6096 8.54787 13.53 8.58087C13.4503 8.61386 13.3779 8.66223 13.317 8.7232L11.1562 10.8847V3.28125C11.1562 3.1072 11.0871 2.94028 10.964 2.81721C10.841 2.69414 10.674 2.625 10.5 2.625C10.326 2.625 10.159 2.69414 10.036 2.81721C9.91289 2.94028 9.84375 3.1072 9.84375 3.28125V10.8847L7.68305 8.7232C7.55991 8.60006 7.3929 8.53089 7.21875 8.53089C7.0446 8.53089 6.87759 8.60006 6.75445 8.7232C6.63131 8.84634 6.56214 9.01335 6.56214 9.1875C6.56214 9.36165 6.63131 9.52866 6.75445 9.6518L10.0357 12.933Z" fill="#076797" />
                    </svg> Unduh</a>
            </div>
        </div>

        <div class="content">
            <div class="image">
                <img src="images/flowchart_tdg.png" alt="tanda daftar gudang">
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