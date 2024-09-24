<!DOCTYPE html>
<html lang="en">

<head>
    <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <style>
        #map,
        #mapkota,
        #idnmappesantren {
            width: 100%;
            height: 500px;
            top: 45px;
            margin-bottom: 25px;
        }

        #alfamapmojoroto,
        #mapkotaalfa,
        #mappesantrenalfa {
            width: 100%;
            height: 500px;
            top: 45px;
            margin-bottom: 25px;
        }

        #indomojoroto,
        #indopesantren,
        #indokota {
            display: none;
        }

        #alfamojoroto,
        #alfapesantren,
        #alfakota {
            display: none;
        }

        #alfamidi,
        #mekar {
            display: none;
        }

        #supermarket {
            display: none;
        }

        #tsamaniya {
            display: none;
        }

        .main-menu,
        .sub-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            z-index: 2;
        }

        .main-menu>li {
            position: relative;
        }

        .main-menu>li>a {
            display: block;
            padding: 10px 20px;
            background-color: #fff;
            color: black;
            text-decoration: none;
        }

        .main-menu>li:hover>a {
            background-color: #fff;
        }

        .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            width: 100%;
        }

        .sub-menu>li>a {
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            display: block;
        }

        .sub-menu>li>a:hover {
            background-color: #065E89;
        }

        .main-menu>li:hover>.sub-menu {
            display: block;
        }

        .sub-menu>li:hover>.sub-menu {
            display: inline-block;
            top: 0;
            left: 100%;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <?php
    include "komponen/navbar.php";
    ?>

    <div class="p-3" style="background: var(--secondary500, #11936E);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-light">
                    <h3>Informasi Pasar Modern</h3>
                    <p class="text-light">Kota Kediri</p>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial section-padding">
        <div class="container">
            <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>
            <div class="row d-flex">
                <div class="col text-center">
                    <div class="drop">
                        <ul class="main-menu">
                            <li><a href="#" class="border-2 border-black border dropdown-toggle border-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minimarket</a>
                                <ul class="sub-menu custom-tbl">
                                    <li><a href="#" class="dropdown-item custom-tbl">Indomaret</a>
                                        <ul class="sub-menu custom-tbl">
                                            <li><a class="dropdown-item custom-tbl" onclick="show('indomojoroto')">Mojoroto</a></li>
                                            <li><a class="dropdown-item custom-tbl" onclick="show('indopesantren')">Pesantren</a></li>
                                            <li><a class="dropdown-item custom-tbl" onclick="show('indokota')">Kota</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="dropdown-item custom-tbl">Alfamart</a>
                                        <ul class="sub-menu custom-tbl">
                                            <li><a class="dropdown-item custom-tbl" onclick="show('alfamojoroto')">Mojoroto</a></li>
                                            <li><a class="dropdown-item custom-tbl" onclick="show('alfapesantren')">Pesantren</a></li>
                                            <li><a class="dropdown-item custom-tbl" onclick="show('alfakota')">Kota</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item custom-tbl" onclick="show('alfamidi')">Alfamidi</a></li>
                                    <li><a class="dropdown-item custom-tbl" onclick="show('tsamaniya')">Tsamaniya</a></li>
                                    <li><a class="dropdown-item custom-tbl" onclick="show('mekar')">MekarMart</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="drop">
                        <ul class="main-menu">
                            <li>
                                <a href="#" class="border-2 border-black border border-dark" aria-haspopup="true" aria-expanded="false" onclick="show('supermarket')">Supermarket</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div id="indomojoroto">
                <h5 class="text-center my-5">Indomaret Kecamatan Mojoroto</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                    <img src="images/minimarket/indomaret/Indomaret Agus Salim.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Agus Salim</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                    <img src="images/minimarket/indomaret/Indomaret Kemuning.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Kemuning</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                    <img src="images/minimarket/indomaret/Indomaret Raung.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Raung</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                    <img src="images/minimarket/indomaret/indomaret Semeru.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Semeru</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                                    <img src="images/minimarket/indomaret/indomaret veteran.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Veteran</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                                    <img src="images/minimarket/indomaret/Indomaret Wakhid Hasyim.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Wachid Hasyim</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                                    <img src="images/minimarket/indomaret/indomaret penanggungan.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Penanggungan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                                    <img src="images/minimarket/indomaret/Indomaret Mojoroto.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Mojoroto</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
                                    <img src="images/minimarket/indomaret/Indomaret Ahmad Dahlan.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Ahmad Dahlan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
                                    <img src="images/minimarket/indomaret/indomaret gatot subroto.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Gatot Subroto</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
                                    <img src="images/minimarket/indomaret/Indomaret Sersan Bahrun.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Sersan Bahrun</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
                    </div>
                </div>
                <!-- modal indomaret mojoroto -->
                <!--1. Indomaret Agus Salim-->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Agus Salim</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. KH. Agus Salim No.No, Bandar Kidul, Kec. Mojoroto, Kota Kediri, Jawa Timur 64119</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011876.7908447073!2d112.0001491803877!3d-7.82748136227641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856fd8ab8f39b%3A0xb2864ec710ba208d!2sIndomaret%20Agus%20Salim%20Kediri!5e0!3m2!1sid!2sid!4v1716382636712!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--2. Indomaret Kemuning-->
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Kemuning</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Raung No.11, Bandar Kidul, Kec. Mojoroto, Kota Kediri, Jawa Timur 64117</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126484.0959271623!2d111.94733647659748!3d-7.829138400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856fe98d44ca7%3A0x48dbfab1558ed622!2sIndomaret%20Kemuning!5e0!3m2!1sid!2sid!4v1716390114822!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3. Indomaret Raung-->
                <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Raung</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Raung No.154 Banjar Mlati - Mojoroto, Bandar Kidul, Mojoroto, Kota Kediri, East Java 64119</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5554175005536!2d111.99352762956394!3d-7.836786227278265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785655e110636f%3A0x70a65f5eb2529c3d!2sIndomaret%20Raung!5e0!3m2!1sid!2sid!4v1716432349692!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--4. Indomaret Semeru-->
                <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Semeru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Semeru, Tamanan, Kec. Mojoroto, Kota Kediri, Jawa Timur 64116</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6380909888185!2d111.98392637412118!3d-7.8280742777538475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856f0c06c9719%3A0x1ce6b6d043ff5a3c!2sIndomaret%20Semeru!5e0!3m2!1sid!2sid!4v1716432536901!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--5. Indomaret Veteran-->
                <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Veteran</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Veteran No.62, Sukorame, Kec. Mojoroto, Kota Kediri, Jawa Timur 66111</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7971930960484!2d111.99015497412105!3d-7.811281277556297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856dfa4167c37%3A0x93a1ca5c724969c!2sIndomaret%20Veteran!5e0!3m2!1sid!2sid!4v1716433156497!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--6. Indomaret Wachid Hasyim-->
                <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Wachid Hasyim</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jalan KH Wakhid Hasim, Bandar Lor, Mojoroto, Bandar Lor, Kec. Kota, Kota Kediri, Jawa Timur 64118</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6743297558814!2d112.00314387412119!3d-7.824252477708867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570355f5b733%3A0x9d944502e259b33c!2sIndomaret%20Wakhid%20Hasyim!5e0!3m2!1sid!2sid!4v1716433283188!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--7. Indomaret Penanggungan-->
                <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Penanggungan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Penanggungan No.45, Bandar Lor, Kec. Kota, Kota Kediri, Jawa Timur 64114</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011890.2420183899!2d110.84477894687498!3d-7.821939000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856e2ecb81295%3A0xb7096e361a45a9c5!2sATM%20BCA%20Indomaret!5e0!3m2!1sid!2sid!4v1716434167574!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--8. Indomaret Mojoroto-->
                <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Mojoroto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Ruko Mojoroto Indah 3 -4, Mojoroto, Mojoroto, Mojoroto, Kota Kediri, East Java 64112</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8132708178946!2d112.00182573882506!3d-7.80958230057823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78572700000039%3A0xdcb2cb620c2ea678!2sIndomaret%20Mojoroto!5e0!3m2!1sid!2sid!4v1716434425084!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--9. Indomaret Mojoroto-->
                <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Ahmad Dahlan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Ahmad Dahlan No.82, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011871.0908684667!2d110.52977885676356!3d-7.829828779248794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785729b6c404ef%3A0x79d920318c89af69!2sIndomaret%20Ahmad%20Dahlan!5e0!3m2!1sid!2sid!4v1716434513358!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--10. Indomaret Gatot Subroto-->
                <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Gatot Subroto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Gatot Subroto, Mrican, Kec. Mojoroto, Kota Kediri, Jawa Timur 64111</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011988.3745406957!2d110.847046946875!3d-7.781386200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7850d872d8140b%3A0xca82446a7aabf9d8!2sIndomaret%20Gatot%20Subroto!5e0!3m2!1sid!2sid!4v1716434754006!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--11. Indomaret Sersan Bahrun-->
                <div class="modal fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Sersan Bahrun</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Sersanbahrun No. Mrican Mojoroto, Dermo, Mojoroto, Kota Kediri, East Java 64112</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1051201365904!2d111.99325207412043!3d-7.778677677174024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785126c9d1d03b%3A0x1177956e76d52bb4!2sIndomaret%20Sersan%20Bahrun!5e0!3m2!1sid!2sid!4v1716434965917!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===================================alfa mojoroto=================================== -->
            <div id="alfamojoroto">
                <h5 class="text-center my-5">Alfamart Kecamatan Mojoroto</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
                                    <img src="images/minimarket/alfamart/Alfamart Semeru Kediri.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Semeru</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
                                    <img src="images/minimarket/alfamart/alfamart kawi.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Kawi</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
                                    <img src="images/minimarket/alfamart/Alfamart Mojoroto.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Mojoroto</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
                                    <img src="images/minimarket/alfamart/Alfamart Agus Salim.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Agus Salim</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop16">
                                    <img src="images/minimarket/alfamart/Alfamart Mastrip Kediri.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Jl. Mastrip</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop17">
                                    <img src="images/minimarket/alfamart/Alfamart Dr. Sahardjo.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Dr. Sahardjo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop18">
                                    <img src="images/minimarket/alfamart/Alfamart Mrican.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Mrican</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
                    </div>
                </div>
                <!--modal alfamart mojoroto-->
                <!--12. Alfamart Semeru Kediri-->
                <div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Semeru Kediri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Semeru, Semen, Kec. Mojoroto, Kota Kediri, Jawa Timur 64116</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15810.544676837726!2d111.97641171738282!3d-7.8282768999999925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856f0db423829%3A0xb81e97fac92b32b8!2sAlfamart%20Semeru%20Kediri!5e0!3m2!1sid!2sid!4v1716477460367!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--13. Alfamart Kawi-->
                <div class="modal fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Kawi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Kawi No. 2D, 777215 No.Kel, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047683.62143736!2d107.38775218750001!3d-7.8092900000000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785720c3de365d%3A0x99fa0aef76772968!2sAlfamart%20Kawi!5e0!3m2!1sid!2sid!4v1716435386801!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--14. Alfamart Mojoroto-->
                <div class="modal fade" id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Mojoroto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Jaksa Agung Suprapto Kel No.11, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.09823130335!2d111.93246472167964!3d-7.8090148999999975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78577f8f56b5dd%3A0x8e0bd15e13793aef!2sAlfamart!5e0!3m2!1sid!2sid!4v1716435486300!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--15. Alfamart Agus Salim-->
                <div class="modal fade" id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Agus Salim</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl Kh Agus Salim 6, 773118, Kel, Bandar Kidul, Kec. Mojoroto, Kota Kediri, Jawa Timur 64118</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6487412344018!2d112.00238117412115!3d-7.826951277740666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785703edae10df%3A0x1d7b02ade53c239c!2sAlfamart%20Agus%20Salim%2C%20Bandar%20Kidul!5e0!3m2!1sid!2sid!4v1716435669978!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--16. Alfamart Jl. Mastrip-->
                <div class="modal fade" id="staticBackdrop16" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Jl. Mastrip</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl.Mastrip Ruko Rege, Kel, Sukorame, Kec. Mojoroto, Kota Kediri, Jawa Timur 64114</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2023838.9848500176!2d110.66497982499999!3d-7.809873299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570f31f33be1%3A0xab13eb2d3a1b09e6!2sAlfamart%20Mastrip%20Kediri!5e0!3m2!1sid!2sid!4v1716435865174!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--17. Alfamart Dr. Sahardjo-->
                <div class="modal fade" id="staticBackdrop17" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Dr. Sahardjo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Dr. Saharjo IIIB No No.Kel, Campurejo, Kec. Mojoroto, Kota Kediri, Jawa Timur 64116</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7477640908965!2d111.98660877412097!3d-7.816502277617648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856e63506d74b%3A0x52863bf9b81ba105!2sAlfamart%20Dr.%20Sahardjo!5e0!3m2!1sid!2sid!4v1716438255702!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--18. Alfamart Mrican-->
                <div class="modal fade" id="staticBackdrop18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Mrican</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl.Gatot Subroto 17, Kel, Mrican, Kec. Mojoroto, Kota Kediri, Jawa Timur 64111</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0745392889025!2d111.99778667412042!3d-7.781921677211963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7850d80f167e83%3A0x73ecf44f51727b46!2sAlfamart%20Mrican!5e0!3m2!1sid!2sid!4v1716439024867!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================Kecamatan Pesantren===================================-->
            <!--=================================== indomaret ===================================-->
            <div id="indopesantren">
                <h5 class="text-center my-5">Indomaret Kecamatan Pesantren</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop19">
                                    <img src="images/minimarket/indomaret/Indomaret Kilisuci.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Kilisuci</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop20">
                                    <img src="images/minimarket/indomaret/Indomaret Mauni Kediri.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Mauni</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop21">
                                    <img src="images/minimarket/indomaret/indomaret pesantren.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Pesantren</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop22">
                                    <img src="images/minimarket/indomaret/Indomaret Letjend Sutoyo Kediri.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Letjend Sutoyo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal Indomaret Pesantren -->
                <!--19. Indomaret Kilisuci-->
                <div class="modal fade" id="staticBackdrop19" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Kilisuci</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Kilisuci No.kel, Setono Pande, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6371102932467!2d112.01500527412125!3d-7.8281776777551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785709572adb39%3A0x10369744ba0fe6ae!2sIndomaret%20Kilisuci!5e0!3m2!1sid!2sid!4v1716440140003!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--20. Indomaret Mauni Kediri-->
                <div class="modal fade" id="staticBackdrop20" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Mauni Kediri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Mauni, Bangsal, Kec. Kota, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.634517173499!2d112.03316887412122!3d-7.828451077758293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785778ad99d671%3A0x924b7eb502f4050e!2sIndomaret%20Mauni%20Kediri!5e0!3m2!1sid!2sid!4v1716467532617!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--21. Indomaret Pesantren-->
                <div class="modal fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Pesantren</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Mauni No.88, Pesantren, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252965.40191073346!2d111.883724878125!3d-7.8337326999999926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78582a627460e9%3A0xb4d625a26b7ed9c8!2sIndomaret%20Pesantren!5e0!3m2!1sid!2sid!4v1716467971092!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--22. Indomaret Letjend Sutoyo Kediri-->
                <div class="modal fade" id="staticBackdrop22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Letjend Sutoyo Kediri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Letjend Sutoyo, Bangsal, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6725624853366!2d112.02752629999999!3d-7.824438899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785773d87abc8d%3A0xe6ae83375728ea8c!2sIndomaret%20Letjen%20Sutoyo%20Kediri!5e0!3m2!1sid!2sid!4v1716468133616!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================================== alfamart ===================================-->
            <div id="alfapesantren">
                <h5 class="text-center my-5">Alfamart Kecamatan Pesantren</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop23">
                                    <img src="images/minimarket/alfamart/Alfamart Mauni Kediri.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Mauni</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop24">
                                    <img src="images/minimarket/alfamart/Alfamart Imam Bakri.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Imam Bakri</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop25">
                                    <img src="images/minimarket/alfamart/Alfamart Kapten Piere Tendean.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Kapten Tendean</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop36">
                                    <img src="images/minimarket/alfamart/Alfamart Letjend Sutoyo.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom px-0" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Letjend Sutoyo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop37">
                                    <img src="images/minimarket/alfamart/Alfamart Letjend Suprapto.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom px-0" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Letjend Suprapto</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal Alfamart Pesantren -->
                <!--23. Alfamart Mauni-->
                <div class="modal fade" id="staticBackdrop23" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Mauni</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p>Jl. Mauni Kel No.87, Bangsal, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5973594783627!2d112.04297717412135!3d-7.832367677804458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x50553a89c6d3f65%3A0x86169d93e27e1ea8!2sAlfamart%20Mauni%20Kediri!5e0!3m2!1sid!2sid!4v1716468388955!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--24. Alfamart Imam Bakri-->
                <div class="modal fade" id="staticBackdrop24" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Imam Bakri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Brigjend Pol. IBH Pranoto, Pesantren, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5770907633555!2d112.04880277412128!3d-7.834503277829649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78582bc7ba4629%3A0xddf78f871ebf7e9b!2sAlfamart%20Imam%20Bakri!5e0!3m2!1sid!2sid!4v1716468669387!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--25. Alfamart Kapten Tendean-->
                <div class="modal fade" id="staticBackdrop25" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Kapten Tendean</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Kapten Tendean Kel No.400, RT.01/RW.01, Blabak, Kec. Pesantren, Kota Kediri, Jawa Timur 64135</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2840105403398!2d112.02622867412187!3d-7.865319078193749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857e689c94ea9%3A0x40147d77d946285b!2sAlfamart%20Kapten%20Piere%20Tendean!5e0!3m2!1sid!2sid!4v1716468873901!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--36. Alfamart Letjend Sutoyo-->
                <div class="modal fade" id="staticBackdrop36" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Letjend Sutoyo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Letjend Sutoyo Kel No.48, Burengan, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31621.695174558037!2d111.98540890001475!3d-7.820288633902083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857fd7d90add5%3A0x8c7e2a5aded4d6d2!2sAlfamart!5e0!3m2!1sid!2sid!4v1716471758615!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--37. Alfamart Letjend Suprapto-->
                <div class="modal fade" id="staticBackdrop37" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Letjend Suprapto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Letjend Suprapto No.39, Burengan, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63242.505820132836!2d111.98189732883264!3d-7.826121067708792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78576d8f91cbad%3A0xd4132b36996a9754!2sAlfamart%20Letjen%20Suprapto%20Kediri!5e0!3m2!1sid!2sid!4v1716471937278!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--===================================Kecamatan Kota===================================-->
            <!-- ===================================indomaret=================================== -->
            <div id="indokota">
                <h5 class="text-center my-5">Indomaret Kecamatan Kota</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop26">
                                    <img src="images/minimarket/indomaret/Indomaret Ngronggo.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Ngronggo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop27">
                                    <img src="images/minimarket/indomaret/Indomaret Doko Indah.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Doko Indah</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop28">
                                    <img src="images/minimarket/indomaret/Indomaret Selowareh.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Selowareh</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop29">
                                    <img src="images/minimarket/indomaret/Indomaret Joyoboyo.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Joyoboyo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop30">
                                    <img src="images/minimarket/indomaret/Indomaret Sersan Suharmaji.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom px-0" style="background-color: #065E89;">
                                        <p class="card-text text-center" style="color: #fff;">Indomaret Sersan Suharmaji</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal Indomaret kota -->
                <!--26. Indomaret Ngronggo-->
                <div class="modal fade" id="staticBackdrop26" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Ngronggo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Kapten Tendean No.198, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4218185958803!2d112.02703097412167!3d-7.850844278022549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857abb09711ab%3A0xb5781a7695ff3786!2sIndomaret%20Ngronggo!5e0!3m2!1sid!2sid!4v1716469067473!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--27.Indomaret Doko Indah-->
                <div class="modal fade" id="staticBackdrop27" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Doko Indah</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>JL. Ir.Sutami, Banjaran, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.763819735363!2d112.02954927031531!3d-7.81480676034775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857688df6d733%3A0xb413d93f20c9e285!2sIndomaret%20Doko%20Indah!5e0!3m2!1sid!2sid!4v1716469383672!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--28. Indomaret Selowareh-->
                <div class="modal fade" id="staticBackdrop28" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Selowareh</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Selowareh, Ngadirejo, Kec. Kota, Kota Kediri, Jawa Timur 64122</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.800337983608!2d112.02129317412091!3d-7.810948977552367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78574714e8e607%3A0xbd2fa7286a933ec5!2sIndomaret%20Selowareh!5e0!3m2!1sid!2sid!4v1716469487530!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--29. Indomaret Joyoboyo-->
                <div class="modal fade" id="staticBackdrop29" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Joyoboyo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl Kemasan, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7294392849562!2d112.01654977412107!3d-7.818436977640418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785713eb10ef69%3A0x69295d29f48e373a!2sIndomaret%20Joyoboyo!5e0!3m2!1sid!2sid!4v1716469765923!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--30. Indomaret Sersan Suharmaji-->
                <div class="modal fade" id="staticBackdrop30" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomaret Sersan Suharmaji</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Sersan Suharmaji No.29, Manisrenggo, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4693304079838!2d112.00457507412149!3d-7.845847677963498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857b1992e5baf%3A0x38a476aff36ec63d!2sIndomaret%20Sersan%20Suharmaji!5e0!3m2!1sid!2sid!4v1716470156807!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ===================================alfamart=================================== -->
            <div id="alfakota">
                <h5 class="text-center my-5">Alfamart Kecamatan Kota</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop31">
                                    <img src="images/minimarket/alfamart/Alfamart Urip Sumoharjo.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Urip Sumoharjo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop32">
                                    <img src="images/minimarket/alfamart/Alfamart Super Semar.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Super Semar</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop33">
                                    <img src="images/minimarket/alfamart/Alfamart Betet Bawang.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Betet Bawang</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop34">
                                    <img src="images/minimarket/alfamart/Alfamart Ngronggo.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Ngronggo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop35">
                                    <img src="images/minimarket/alfamart/Alfamart Kilisuci.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Kilisuci</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop38">
                                    <img src="images/minimarket/alfamart/Alfamart Mayjend Sungkono.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom px-0" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Mayjend Sungkono</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop39">
                                    <img src="images/minimarket/alfamart/Alfamart Patiunus.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamart Patiunus</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
                    </div>
                </div>
                <!--Modal Alfamart Kota-->
                <!--31. Alfamart Urip Sumoharjo-->
                <div class="modal fade" id="staticBackdrop31" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Urip Sumoharjo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Urip Sumoharjo No.227/ 461, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64127</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31619.40333943176!2d111.98495394888651!3d-7.850465915823459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857d70d160c1b%3A0x57944705cdde0490!2sAlfamart!5e0!3m2!1sid!2sid!4v1716470603988!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--32. Alfamart Super Semar-->
                <div class="modal fade" id="staticBackdrop32" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Super Semar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Super Semar, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64127</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.48606448955!2d112.02200617412147!3d-7.844087077942671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785797c3681eb1%3A0xb73f7a54a61c3b56!2sAlfamart%20Super%20Semar!5e0!3m2!1sid!2sid!4v1716470887548!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--33. Alfamart Betet Bawang-->
                <div class="modal fade" id="staticBackdrop33" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Betet Bawang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Betet Bawang, RT./Rw/RW.:01/09, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64127</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4589379255717!2d112.0301571741216!3d-7.846940877976401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857917f5898ad%3A0x8f7f45bb43f91fab!2sAlfamart%20Betet%20Bawang!5e0!3m2!1sid!2sid!4v1716471078063!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--34. Alfamart Ngronggo-->
                <div class="modal fade" id="staticBackdrop34" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Ngronggo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Urip Sumoharjo No.174, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64127</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15810.282162698943!2d111.99102785541993!3d-7.835193300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785796e5bf0ff5%3A0xb5173012bb4d9126!2sAlfamart%20Ngronggo%20Kediri!5e0!3m2!1sid!2sid!4v1716471269592!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--35. Alfamart Kilisuci-->
                <div class="modal fade" id="staticBackdrop35" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Kilisuci</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Kilisuci No. 72, 682382 No.Kel, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64126</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.632584131027!2d112.01464787412124!3d-7.828654877760714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857095cb8e31f%3A0xfc55cfc78f87667e!2sAlfamart%20Kilisuci%20Kediri!5e0!3m2!1sid!2sid!4v1716471459086!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--38. Alfamart Mayjend Sungkono-->
                <div class="modal fade" id="staticBackdrop38" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Mayjend Sungkono</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Mayjend Sungkono No.66, Semampir, Kec. Kota, Kota Kediri, Jawa Timur 64121</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505965.0779985081!2d111.43196927343749!3d-7.80547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78572f78e07663%3A0xdc579781c38de705!2sAlfamart%20Mayjend%20Sungkono!5e0!3m2!1sid!2sid!4v1716472221270!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--39. Alfamart Patiunus-->
                <div class="modal fade" id="staticBackdrop39" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamart Patiunus</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Patiunus No.82, Jagalan, Kec. Kota, Kota Kediri, Jawa Timur 64125</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7026661908476!2d112.0148181741211!3d-7.82126277767366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857118cbf98d7%3A0x5de3c81098892bce!2sAlfamart%20Patiunus%20Kediri!5e0!3m2!1sid!2sid!4v1716472458898!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Alfamidi -->
            <div id="alfamidi">
                <h5 class="text-center my-5">Alfamidi Kota Kediri</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop41">
                                    <img src="images/minimarket/alfamidi/Alfamidi Kapten Tendean.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamidi Piere Tendean</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop42">
                                    <img src="images/minimarket/alfamidi/Alfamidi Gatot Subroto Mrican.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="font-size:16px; color: #fff;">Alfamidi Gatot Subroto Mrican</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop40">
                                    <img src="images/minimarket/alfamidi/Alfamidi Veteran 2.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #A62E21;">
                                        <p class="card-text text-center" style="color: #fff;">Alfamidi Veteran</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal alfamidi -->

                <!--40. Alfamidi Veteran-->
                <div class="modal fade" id="staticBackdrop40" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamidi Veteran</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Veteran No.54, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64114</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505949.02440264344!2d111.68728856758428!3d-7.8187205354118525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856de7fce180d%3A0xb09ef3fe97c69315!2sAlfamidi%20Veteran%202%20Kediri!5e0!3m2!1sid!2sid!4v1717806164270!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--41. Alfamidi Piere Tendean-->
                <div class="modal fade" id="staticBackdrop41" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamidi Piere Tendean</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Kapten Tendean No.178, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64127</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.433721716191!2d112.02708897412161!3d-7.849592778007717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78579380f2933f%3A0x974e47b6caa8a2c2!2sAlfamidi%20Piere%20Tendean!5e0!3m2!1sid!2sid!4v1717806226510!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--42. Alfamidi Gatot Subroto Mrican-->
                <div class="modal fade" id="staticBackdrop42" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Alfamidi Gatot Subroto Mrican</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Gatot Subroto No.53, Mrican, Kec. Mojoroto, Kabupaten Kediri, Jawa Timur 64112</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.010715195114!2d111.99744357412057!3d-7.788687777291202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7851cd3ce628f9%3A0x7454fcc7b8c4a267!2sAlfamidi%20Gatot%20Subroto%20Mrican!5e0!3m2!1sid!2sid!4v1717806282957!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tsamaniya -->
            <div id="tsamaniya">
                <h5 class="text-center my-5">Tsamaniya Kota Kediri</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop43">
                                    <img src="images/minimarket/tsamaniya/Semampir.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #24C16F;">
                                        <p class="card-text text-center" style="color: #000;">Tsamaniya Minimarket Semampir</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop44">
                                    <img src="images/minimarket/tsamaniya/Tsamaniya burengan.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #24C16F;">
                                        <p class="card-text text-center" style="color: #000;">Tsamaniya Minimarket Burengan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop45">
                                    <img src="images/minimarket/tsamaniya/Tsamaniya bangsal.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #24C16F;">
                                        <p class="card-text text-center" style="color: #000;">Tsamaniya Minimarket Bangsal</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal tsamaniya -->
                <!-- 43. Tsamaniya Semampir -->
                <div class="modal fade" id="staticBackdrop43" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tsamaniya Minimarket Semampir</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Mayor Bismo No.95, RT.04/RW.01, Semampir, Kec. Mojoroto, Kabupaten Kediri, Jawa Timur 64121</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9367714913838!2d112.00670507412063!3d-7.796519377382952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78572dc9089bdd%3A0xaf16c474fac27c30!2sTsamaniya%20Minimarket%20Semampir!5e0!3m2!1sid!2sid!4v1717806840410!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 44.Tsamaniya Burengan -->
                <div class="modal fade" id="staticBackdrop44" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tsamaniya Minimarket Burengan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Letjend Sutoyo No.22, Burengan, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.670557640426!2d112.02529497412118!3d-7.824650377713536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785772544a8369%3A0xd4c1c1ce4035f30c!2sTsamaniya%20Minimarket%20Burengan!5e0!3m2!1sid!2sid!4v1717806899860!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 45. Tsamaniya Bangsal -->
                <div class="modal fade" id="staticBackdrop45" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tsamaniya Minimarket Bangsal</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Mauni No.90B, Bangsal, Kec. Pesantren, Kota Kediri, Jawa Timur 64131</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6079880133148!2d112.03968787412121!3d-7.831247577791233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857a8be1c703b%3A0xe561e2c3a1f1b868!2sTsamaniya%20Minimarket%20Bangsal!5e0!3m2!1sid!2sid!4v1717806987708!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mekarMart -->
            <div id="mekar">
                <h5 class="text-center my-5">MekarMart Kota Kediri</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop46">
                                    <img src="images/minimarket/mekarmart/Mekar Mart Dandangan.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #FFED4D;">
                                        <p class="card-text text-center" style="color: #000;">Mekar Mart Dandangan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop47">
                                    <img src="images/minimarket/mekarmart/Dermo, Kec. Mojoroto.jpeg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #FFED4D;">
                                        <p class="card-text text-center" style="color: #000;">Mekar Mart Dermo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal MekarMart -->
                <!-- 46. Mekar Mart Dandangan -->
                <div class="modal fade" id="staticBackdrop46" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Mekar Mart Dandangan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Singosari No.50, Dandangan, Kec. Kota, Kabupaten Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.07652270368!2d111.94769742167972!3d-7.809158299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785740d5eb06a3%3A0x367290df59642c2e!2sMekar%20Mart!5e0!3m2!1sid!2sid!4v1717807589484!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 47. Mekar Mart Dermo -->
                <div class="modal fade" id="staticBackdrop47" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Mekar Mart Dermo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Sersan Bahrun No.211-227, Dermo, Kec. Mojoroto, Kabupaten Kediri, Jawa Timur 64111</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.07652270368!2d111.94769742167972!3d-7.809158299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78515838161b57%3A0x6cb8cdb9be52486!2sMekar%20Mart!5e0!3m2!1sid!2sid!4v1717807625727!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Supermarket -->
            <div id="supermarket">
                <h5 class="text-center my-5">Supermarket Kota Kediri</h5>
                <div class="container mt-4">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-center">
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop48">
                                    <img src="images/supermarket/transmart.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Transmart Kediri Mall</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop49">
                                    <img src="images/supermarket/super indo.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Super Indo Hasanudin</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop50">
                                    <img src="images/supermarket/golden-.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Golden Swalayan Kediri</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop51">
                                    <img src="images/supermarket/samudra.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Samudra Swalayan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop52">
                                    <img src="images/supermarket/borobudur swalayan.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Borobudur Swalayan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop53">
                                    <img src="images/supermarket/hypermart.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                    <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Hypermart Kediri</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal supermarket -->
                <!-- 48. Transmart Kediri Mall -->
                <div class="modal fade" id="staticBackdrop48" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Transmart Kediri Mall</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Sriratu, Lt. 3 Mall, Jl. Joyoboyo No.10, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15811.152690552708!2d112.00634441213414!3d-7.812234333286624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785714362e7281%3A0x92797bd63ac16b4f!2sTransmart%20Kediri%20Mall!5e0!3m2!1sid!2sid!4v1717809234324!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 49. Super Indo Hasanudin -->
                <div class="modal fade" id="staticBackdrop49" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Super Indo Hasanudin</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Hasanudin No.24, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7878182141576!2d112.014069174121!3d-7.812271777567933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785705e4bf5f13%3A0xdf364b474ce7bf99!2sSuper%20Indo%20Hasanudin!5e0!3m2!1sid!2sid!4v1717809363067!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 50. Golden Swalayan-->
                <div class="modal fade" id="staticBackdrop50" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Golden Swalayan Kediri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Hayam Wuruk No.121-125, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur 64122</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252900.5826051487!2d111.79680006993982!3d-7.939729291944501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785716601575e5%3A0xffcb01289db7ed37!2sGolden%20Swalayan%20Kediri!5e0!3m2!1sid!2sid!4v1717809496375!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 51. Samudra Swalayan -->
                <div class="modal fade" id="staticBackdrop51" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Samudra Swalayan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Brigjen Katamso No.1, Kaliombo, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6445962338357!2d112.00604137031615!3d-7.827388360468775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857c507bd0575%3A0xe5def6ef5b14d422!2sSamudera%20Supermarket%20Kediri!5e0!3m2!1sid!2sid!4v1717809616946!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 52. Borobudur Swalayan -->
                <div class="modal fade" id="staticBackdrop52" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Borobudur Swalayan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Dhoho No.110 - 116, Setono Gedong, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.738904869972!2d112.01043807412098!3d-7.817437677628666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857174ba0b417%3A0x9aea7d4fa8d91656!2sBorobudur%20Swalayan!5e0!3m2!1sid!2sid!4v1717809716867!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 53. Hypermart Kediri -->
                <div class="modal fade" id="staticBackdrop53" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content col-xxl">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hypermart Kediri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Jl. Hasanudin No.2, Balowerti, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7813454963775!2d112.01308277412103!3d-7.81295557757596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7850a55555555d%3A0x7b2a1125f6c9f3c8!2sHypermart%20Kediri!5e0!3m2!1sid!2sid!4v1717809840044!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- footer -->
    <?php
    include "komponen/footer.php";
    ?>


    <!-- SCRIPTS -->
    <script>
        var currentlyVisible = null;

        function show(id) {
            var x = document.getElementById(id);

            if (currentlyVisible) {
                currentlyVisible.style.display = "none";
            }

            if (x.style.display === "none" || !x.style.display) {
                x.style.display = "block";
                currentlyVisible = x;
            } else {
                x.style.display = "none";
                currentlyVisible = null;
            }
        }
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
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

</body>

</html>