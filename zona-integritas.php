<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="jpg/png" href="images/lpicon2.png">
    <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>
</head>

<body>

    <style>
        .container-zi {
            display: grid;
            grid-template-columns: 1fr 4fr 1fr;
            gap: 1rem;
            margin-top: 4rem;
            padding-right: 3.5rem;
            padding-left: 3.5rem;
            width: 100%;
            height: auto;
        }

        .container-zi .img-answer img {
            width: 199px;
            height: 208px;
        }

        .container-zi .text h1 {
            color: #076797;
            font-family: "Segoe UI";
            font-size: 36px;
            font-style: normal;
            font-weight: 900;
            line-height: 24px;
            margin-bottom: 3rem;
        }

        .container-zi .text {
            margin-top: 8.5rem;
            background-color: #fff;
            border-radius: 8px;
            padding: 2rem 2rem;
            height: 310px;
        }

        .container-zi .text p span {
            color: #076797;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
        }

        .container-zi .text p {
            color: #076797;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        .container-zi .img-zona img {
            width: 466px;
            height: 460px;
        }

        .container-menu-zi {
            display: grid;
            grid-template-columns: 4fr 4fr 4fr;
            grid-template-rows: 10fr 6fr;
            gap: 10px;
            justify-items: center;
            align-content: center;
            margin-bottom: 10rem;
            margin-top: 10rem;
            margin-left: 12rem;
            margin-right: 12rem;
        }

        .bg-container {
            width: 260px;
            height: 260px;
            border-radius: 275px;
            background: #ECF9FF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            transition: 0.4s ease-in-out;
        }

        /* .img-menu {
            display: flex;
            width: 275px;
            height: 275px;
        } */

        .bg-container .img-menu img {
            /* padding-bottom: 5rem; */
            /* margin-bottom: 20rem; */
            align-items: center;
            width: 290px;
            height: 340px;
            position: relative;
            top: -7rem;
            left: -1rem;
        }

        .bg-container .text-menu {
            width: 275px;
            height: auto;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        .bg-container .text-menu h1 {
            text-align: center;
            color: #076797;
            text-align: center;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
            position: relative;
        }

        .bg-container:hover {
            transform: scale(1.2);
        }

        @media screen and (max-width: 768px) {

            .img-answer,
            .img-zona {
                display: none;
            }

            .container-zi {
                display: flex;
                padding-left: 10px;
                padding-right: 10px;
            }

            .container-zi .text {
                margin-top: 0;
                width: 100%;
                height: 100%;
            }

            .container-zi .text h1 {
                text-align: center;
                width: 100%;
                font-size: 20px;
            }

            .container-zi .text p,
            .container-zi .text p span {
                text-align: justify;
                width: 100%;
                font-size: 14px;
            }

            .container-menu-zi {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 5fr 5fr 5fr 5fr 5fr 3fr;
                gap: 10px;
                justify-items: center;
                align-content: center;
                margin-bottom: 10rem;
                margin-top: 10rem;
                margin-left: 0;
                margin-right: 0;
            }

            .bg-container {
                width: 200px;
                height: 200px;
            }

            .bg-container .img-menu img {
                width: 230px;
                height: 280px;
            }

            .bg-container .text-menu {
                width: 220px;
            }

            .bg-container .text-menu h1 {
                text-align: center;
                color: #076797;
                text-align: center;
                font-family: "Segoe UI";
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 20px;
                position: relative;
                margin-top: 8px;
            }
        }
    </style>
    <!-- navbar -->
    <?php
    include "komponen/navbar.php";
    ?>

    <!-- hero judul -->
    <div class="hero-title">
        <h1>Zona Integritas</h1>
        <h4>DISPERDAGIN Kota Kediri</h4>
    </div>

    <!-- content -->
    <div class="container-zi">
        <div class="img-answer">
            <img src="images/tandatanya.webp" alt="">
        </div>
        <div class="text">
            <h1>Apa itu Zona Integritas?</h1>
            <p><span>Zona Integritas</span> adalah predikat yang diberikan kepada instansi pemerintah yang pimpinan beserta jajarannya mempunyai komitmen untuk mewujudkan Wilayah Bebas Korupsi (WBK) atau Wilayah Birokrasi Bersih Melayani (WBBM) melalui reformasi birokrasi, khususnya dalam hal pencegahan korupsi dan peningkatan kualitas pelayanan publik.</p>
        </div>
        <div class="img-zona">
            <img src="images/zona-integritas.webp" alt="">
        </div>
    </div>

    <div class="container-menu-zi">
        <div class="bg-container">
            <a href="mnj-perubahan.php">
                <div class="img-menu">
                    <img src="images/mnj-perubahan.webp" alt="">
                </div>
                <div class="text-menu">
                    <h1 style="padding-left: 40px; padding-right: 40px; top: -11rem; left: -6px;">Manajemen Perubahan</h1>
                </div>
            </a>
        </div>
        <div class="bg-container">
            <a href="tata-laksana.php">
                <div class="img-menu">
                    <img src="images/tata-laksana.webp" alt="">
                </div>
                <div class="text-menu">
                    <h1 style="padding-left: 40px; padding-right: 40px; top: -10.5rem; left: -6px;">Penataan<br>Tata Laksana</h1>
                </div>
            </a>
        </div>
        <div class="bg-container">
            <a href="mnj-sdm.php">
                <div class="img-menu">
                    <img src="images/mnj-sdm.webp" alt="">
                </div>
                <div class="text-menu">
                    <h1 style="padding-left: 30px; padding-right: 30px; top: -11.5rem; left: -6px;">Penataan Manajemen Sumber Daya<br>Manusia</h1>
                </div>
            </a>
        </div>
        <div class="bg-container">
            <a href="akuntabilitas.php">
                <div class="img-menu">
                    <img src="images/akuntabilitas.webp" alt="">
                </div>
                <div class="text-menu">
                    <h1 style="padding-left: 40px; padding-right: 40px; top: -11rem; left: -6px;">Penguatan Akuntabilitas</h1>
                </div>
            </a>
        </div>
        <div class="bg-container">
            <a href="pengawasan.php">
                <div class="img-menu">
                    <img src="images/pengawasan.webp" alt="">
                </div>
                <div class="text-menu">
                    <h1 style="padding-left: 40px; padding-right: 40px; top: -10.5rem; left: -6px;">Penguatan Pengawasan</h1>
                </div>
            </a>
        </div>
        <div class="bg-container">
            <a href="pelayanan-publik.php">
                <div class="img-menu">
                    <img src="images/pelayanan-publik.webp" alt="">
                </div>
                <div class="text-menu">
                    <h1 style="padding-left: 30px; padding-right: 30px; top: -10.5rem; left: -6px;">Peningkatan Kualitas Pelayanan Publik</h1>
                </div>
            </a>
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