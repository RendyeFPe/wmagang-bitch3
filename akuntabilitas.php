<!DOCTYPE html>
<html lang="en">

<head>
    <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="jpg/png" href="images/lpicon2.png">
</head>

<body style="background: #e6eaf2;">

    <style>
        .container-bg {
            width: auto;
            height: auto;
            flex-shrink: 0;
            border-radius: 500px 0px 0px 0px;
            /* background-color: #fff; */
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            position: relative;
            margin-left: 20rem;
            bottom: -7rem;
            margin-bottom: 10rem;
            /* margin-top: 15rem; */
        }

        .container-title {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 10rem;
            height: 300px;
        }

        .container-title .image img {
            width: 385px;
            height: 500px;
            flex-shrink: 0;
            position: relative;
            right: -6.5rem;
            top: -9rem;
        }

        .container-title .title h1 {
            color: #fff;
            text-align: center;
            font-family: "Segoe UI";
            font-size: 28px;
            font-style: normal;
            font-weight: 700;
            line-height: 40px;
            background-color: #076797;
            border-radius: 8px 0px 0px 8px;
            padding: 3rem;
            margin-top: 3rem;
        }

        .text p {
            width: 799px;
            height: 94px;
            flex-shrink: 0;
            color: #000;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            margin-right: 0;
            position: relative;
            right: -11rem;
        }

        .text p span {
            font-weight: bold;
        }

        .point-view {
            background-color: #076797;
            width: 299px;
            height: 39px;
            justify-content: center;
            align-content: center;
            text-align: center;
            margin-top: 2.5rem;
            margin-left: 2px;
            border-radius: 0px 4px 4px 0px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            /* position: relative;
            right: -5px; */
        }

        .point-view h3 {
            color: #fff;
            text-align: center;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: 28px;
        }

        .text-pv {
            margin-top: 1.5rem;
            margin-left: 4rem;
        }

        .text-pv p {
            width: 914px;
            height: 103px;
            flex-shrink: 0;
            color: #000;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        .point-target {
            background-color: #076797;
            width: 506px;
            height: 39px;
            justify-content: center;
            align-content: center;
            text-align: center;
            border-radius: 0px 4px 4px 0px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .point-target h3 {
            color: #fff;
            text-align: center;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: 28px;
        }

        .text-pt {
            margin-top: 1.5rem;
            margin-left: 4rem;
        }

        .text-pt ol {
            width: 911px;
            height: 141px;
            flex-shrink: 0;
            color: #000;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        .box-content {
            display: grid;
            grid-template-columns: 2fr 2fr;
            grid-template-rows: 2fr 2fr;
            gap: 2rem;
            width: fit-content;
            justify-items: center;
            align-content: center;
            margin-left: 4rem;
        }

        .box-content .box1,
        .box-content .box2 {
            width: 330px;
            height: 42px;
            flex-shrink: 0;
            border-radius: 4px;
            background: #076797;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            text-align: center;
            justify-content: center;
            align-content: center;
            margin-left: 2.2rem;
            position: relative;
            z-index: 1;
        }

        .box-content .box1 h3 {
            color: #fff;
            text-align: center;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: 28px;
        }

        .box-content .box2 h3 {
            color: #fff;
            text-align: center;
            font-family: "Segoe UI";
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: 28px;
        }

        .text-box1,
        .text-box2 {
            width: 400px;
            height: 170px;
            padding-top: 2rem;
            flex-shrink: 0;
            border-radius: 4px;
            background: #fff;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            position: relative;
            top: -20px;
        }

        .text-box1 ol,
        .text-box2 ol {
            color: #000;
            font-family: "Segoe UI";
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        @media screen and (max-width: 768px) {
            .container-bg {
                background: none;
                position: relative;
                margin-left: 0;
                bottom: 0;
                margin-bottom: 5rem;
                padding: 1rem;
            }

            .container-title {
                display: flex;
                height: auto;
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .container-title .image {
                display: none;
            }

            .container-title .title h1 {
                width: 100%;
                text-align: center;
                font-size: 28px;
                font-style: normal;
                font-weight: 700;
                line-height: 40px;
                background-color: #076797;
                border-radius: 8px;
            }

            .text p {
                width: 100%;
                height: auto;
                font-size: 16px;
                text-align: justify;
                font-style: normal;
                font-weight: 400;
                line-height: 22px;
                margin-right: 0;
                margin-bottom: 2rem;
                position: relative;
                right: 0;
                padding: 10px;
            }

            .text-pv {
                margin-top: 1rem;
                margin-left: 0;
                padding: 1rem;
            }

            .text-pv p {
                text-align: justify;
                width: auto;
                height: auto;
                font-size: 16px;
                line-height: 24px;
            }

            .point-target {
                width: auto;
                height: 39px;
                margin-top: 0;
            }

            .text-pt {
                margin-left: 0;
            }

            .text-pt ol {
                width: auto;
                height: auto;
                text-align: justify;
                font-size: 16px;
            }

            .box-content {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 2fr 2fr;
                gap: 1rem;
                margin-left: 0;
                width: auto;
                justify-items: center;
                align-content: center;
            }

            .box-content .box1 {
                width: 78%;
                height: 28%;
            }

            .box-content .box2 {
                width: 78%;
                height: 28%;

            }

            .box-content .box1 h3,
            .box-content .box2 h3 {
                font-size: 16px;
            }

            .text-box1,
            .text-box2 {
                width: 330px;
                height: auto;
                padding: 25px 5px 5px 0px;
            }

            .text-box1 ol,
            .text-box2 ol {
                font-size: 16px;
                width: 100%;
            }
        }
    </style>
    <!-- navbar -->
    <?php
    include "komponen/navbar.php";
    ?>

    <div class="container-bg">
        <div class="container-title">
            <div class="image">
                <img src="images/akuntabilitas.webp" alt="">
            </div>
            <div class="title">
                <h1>Penguatan Akuntabilitas</h1>
            </div>
        </div>
        <div class="text">
            <p>Untuk membangun unit pelayanan yang berintegritas dan mampu memberikan kualitas pelayanan prima, diperlukan adanya manajemen kinerja yang memberikan arahan tentang pengelolaan pelayanan untuk mencapai hasil yang diharapkan oleh instansi.</p>
        </div>

        <div class="point-view">
            <h3>Tujuan</h3>
        </div>

        <div class="text-pv">
            <p>Meningkatkan kapasitas dan akuntabilitas kinerja instansi pemerintah.</p>
        </div>

        <div class="point-target">
            <h3>Target Yang Ingin Dicapai</h3>
        </div>

        <div class="text-pt">
            <ol>
                <li>Meningkatnya kinerja instansi pemerintah</li>
                <li>Meningkatnya akuntabilitas instansi pemerintah</li>
            </ol>
        </div>

        <div class="box-content">
            <div>
                <div class="box1">
                    <h3>Aspek Pemenuhan (5%)</h3>
                </div>
                <div class="text-box1">
                    <ol>
                        <li>Keterlibatan pimpinan</li>
                        <li>Pengelolaan akuntabilitas kinerja</li>
                    </ol>
                </div>
            </div>

            <div>
                <div class="box2">
                    <h3>Aspek Reform (5%)</h3>
                </div>
                <div class="text-box2">
                    <ol>
                        <li>Meningkatnya capaian kinerja unit kerja</li>
                        <li>Pemberian reward dan punishment</li>
                    </ol>
                </div>
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