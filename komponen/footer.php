<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="shorcut icon" href="images/lpicon2.png">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/templatemo-digital-trend.css">

<!-- <div class="container">
    <div class="row"> -->

<footer class="">
    <div class="site-footer">
        <div class="mx-5">
            <div class="row mb-4">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="footer-text pull-left">
                        <div class="d-flex">
                            <img src="images/dp1.png" class="footer-image" alt="">
                        </div>
                    </div>
                </div>

                <div class="f-line"></div>
                <!-- Alamat -->
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h3 class="text-white lokasi">Alamat</h3>
                    <p class="mb-0 footer-text"
                        style="color:white; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 25 55" fill="none">
                            <g clip-path="url(#clip0_822_4021)">
                                <path
                                    d="M12.5 13.2812C14.2259 13.2812 15.625 11.8821 15.625 10.1562C15.625 8.43036 14.2259 7.03125 12.5 7.03125C10.7741 7.03125 9.375 8.43036 9.375 10.1562C9.375 11.8821 10.7741 13.2812 12.5 13.2812Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20.3125 10.1562C20.3125 17.1875 12.5 22.6562 12.5 22.6562C12.5 22.6562 4.6875 17.1875 4.6875 10.1562C4.6875 8.08425 5.5106 6.09711 6.97573 4.63198C8.44086 3.16685 10.428 2.34375 12.5 2.34375C14.572 2.34375 16.5591 3.16685 18.0243 4.63198C19.4894 6.09711 20.3125 8.08425 20.3125 10.1562Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_822_4021">
                                    <rect width="25" height="25" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        Jl. Penanggungan NO. 7, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa Timur
                    </p>
                </div>
                <div class="col-md-3 col-sm-3 col-sm-3 g-0">
                    <!-- cpntact -->
                    <h4 class="text-white">Hubungi Kami</h4>

                    <p class="text-left text-white">
                        <i class="fa fa-phone footer-icon"></i>
                        0354771908
                    </p>

                    <p class="text-white text-left">
                        <a href="disperdagin@kedirikota.go.id" class="text-white">
                            <i class="fa fa-envelope footer-icon"></i>
                            disperdagin@kedirikota.go.id
                        </a>
                    </p>
                    <p class="text-white">
                        <!-- youtube icon -->
                        <a href="#" class="social-icon" style="color: #fff;">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <!-- instagram icon -->
                        <a href="#" class="social-icon" style="color: #fff;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- WhatsApp Icon -->
                        <a href="#" class="social-icon" style="color: #fff;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </p>
                </div>

                <div class="f-line"></div>
                <!-- count function -->
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <p class="text-white text-left">Statistik Pengunjung</p>
                    <div class="px-0">
                        <p class="fw-bolder text-white">
                            <?php
                            // koneksi
                            $conn = mysqli_connect('localhost', 'root', '', 'data_harga_pokok');

                            // pilih database
                            $count_query = mysqli_query($conn, "SELECT * FROM tb_counter");

                            // logika
                            if ($count_query) {
                                $row = mysqli_fetch_array($count_query);
                                $current_count = $row['counts'];
                                $new_count = $current_count + 1;
                                $update_count = mysqli_query($conn, "UPDATE tb_counter SET counts = '" . $new_count . "'");
                                echo $new_count;
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }

                            // close connection
                            mysqli_close($conn);
                            ?>
                            /Hari
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="mx-auto" style="font-size:10px;">
            <div class="justify-cont ent-center">
                <div class="Copyright">
                    <p class="copyright-text text-white">Copyright &copy; 2023 DISPERDAGIN</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- <div class="divider mb-4"> </div> -->