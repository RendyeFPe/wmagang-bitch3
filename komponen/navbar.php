<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        /* mail floating */
        .mail-floating .right-button {
        display: flex;
        flex-direction: row;
        float: right;
        position: fixed;
        right: 15px;
        bottom: 15px;
        z-index: 99;
        padding: 12px;
        background: #076797;
        background-size: 200% 100%;
        border-radius: 10px;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .mail-floating .right-button:hover {
        background-position: right;
        }

        .mail-floating .mail-label {
        color: white;
        font-style: normal;
        margin-top: 5px;
        margin-left: 5px;
        }

        .mail-floating .emoji {
        width: 16px;
        height: 16px;
        margin-bottom: 3px;
        margin-left: 4px;
        }
    </style>
</head>
<div class="loading-screen">
    <div class="loader"></div>
</div>

<style>
    @media screen and (max-width: 768px) {
        
    }
</style>
<!-- MENU BAR -->
<!-- , ISI,Layanan(Dropdown), Zona Integritas, UNDUHAN-->

<body>
    <nav class="navbar banner">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="col">
                    <a href="index.php">
                        <div class="logo mx-5">
                            <img src="images/dp1.png" alt="Header Image">
                        </div>
                    </a>
                    <!-- <div class="container d-flex justify-content-between align-items-center">
                              </div> -->
                </div>
            </div>
            <div class="row right-side mx-5">
                <div class="col">
                    <p class="text-light mx-1 tagline">Harmoni Kediri</p>
                </div>
                <div class="col z-5" id="btn-find">
                    <form class="d-flex bg-light f-search rounded my-2" role="search">
                        <input type="text" placeholder="Find" class="border-0 rounded" id="input-box" name="keyword">
                        <button class="btn border-0 bg-white py-0 px-2" type="submit" id="tombol-cari" name="cari">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                fill="none">
                                <g clip-path="url(#clip0_705_3966)">
                                    <path
                                        d="M11.375 19.5C15.8623 19.5 19.5 15.8623 19.5 11.375C19.5 6.88769 15.8623 3.25 11.375 3.25C6.88769 3.25 3.25 6.88769 3.25 11.375C3.25 15.8623 6.88769 19.5 11.375 19.5Z"
                                        stroke="#A8A8A8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M17.1204 17.1204L22.75 22.75" stroke="#A8A8A8" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_705_3966">
                                        <rect width="26" height="26" rx="8" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </form>
                    <div class="result-box z-4" id="result-box"></div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg position-sticky z-1" style="background-color: #fff;">
        <div class="container-fluid mx-5 my-3">
            <a class="navbar-brand" href="index.php" style="color: black;">
                <svg class="img-fluid mb-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 28 28" fill="none">
                    <g clip-path="url(#clip0_29_929)">
                        <path d="M24.5 13.125V23.625C24.5 23.8571 24.4078 24.0797 24.2437 24.2438C24.0796 24.4079 23.8571 24.5 23.625 24.5H17.5C17.2679 24.5 17.0454 24.4079 16.8813 24.2438C16.7172 24.0797 16.625 23.8571 16.625 23.625V17.9375C16.625 17.8215 16.5789 17.7102 16.4969 17.6282C16.4148 17.5461 16.3035 17.5 16.1875 17.5H11.8125C11.6965 17.5 11.5852 17.5461 11.5031 17.6282C11.4211 17.7102 11.375 17.8215 11.375 17.9375V23.625C11.375 23.8571 11.2828 24.0797 11.1187 24.2438C10.9546 24.4079 10.7321 24.5 10.5 24.5H4.375C4.14294 24.5 3.92038 24.4079 3.75628 24.2438C3.59219 24.0797 3.5 23.8571 3.5 23.625V13.125C3.50022 12.661 3.68473 12.216 4.01297 11.888L12.763 3.13801C13.0911 2.81007 13.5361 2.62585 14 2.62585C14.4639 2.62585 14.9089 2.81007 15.237 3.13801L23.987 11.888C24.3153 12.216 24.4998 12.661 24.5 13.125Z" fill="#3985AC"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_29_929">
                        <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- =============
                     tentang
                     =============-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="tentangDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black;">Tentang</a>
                        <ul class="dropdown-menu" aria-labelledby="tentangDropdown">
                            <li><a href="tentang.php" class="dropdown-item">Profil</a></li>
                            <li><a href="struktur.php" class="dropdown-item">Struktur Organisasi</a></li>
                            <li><a href="programKegiatan.php" class="dropdown-item">Program</a></li>
                        </ul>
                    </li>
                    <!-- =============
                     informasi
                     =============-->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="informasiDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black;">Informasi</a>
                        <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                            <li><a href="informasi-pasar.php" class="dropdown-item">Informasi Harga</a></li>
                            <li><a href="pasar.php" class="dropdown-item">Pasar Rakyat</a></li>
                            <li><a href="pasar-modern.php" class="dropdown-item">Pasar Modern</a></li>
                            <li><a href="mall.php" class="dropdown-item">Pusat Perbelanjaan</a></li>
                            <li><a href="ikm.php" class="dropdown-item">Industri Kecil Menengah</a></li>
                        </ul>
                    </li>
                    <!-- =============
                     layanan
                     =============-->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="layananDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black;">Layanan</a>
                        <ul class="dropdown-menu" aria-labelledby="layananDropdown" id="layanan-dropdown">
                            <li>
                                <a href="https://banmod.indagkediri.online/" target="_blank"
                                    class="dropdown-item">BantuanModal</a>
                            </li>
                            <li><a href="halal.php" class="dropdown-item">Sertifikasi Halal</a></li>
                            <li><a href="merk.php" class="dropdown-item">Legalitas Merk</a></li>
                            <li><a href="sinas.php" class="dropdown-item">SIINas</a></li>
                            <li><a href="tera.php" class="dropdown-item">Tera/Tera Ulang</a></li>
                            <li><a href="td_gudang.php" class="dropdown-item">Tanda Daftar Gudang</a></li>
                            <li><a href="minhol.php" class="dropdown-item">Perpanjangan Minuman Beralkohol</a></li>
                        </ul>
                    </li>
                    <!-- =============
                     produk-unggulan, zona-integritas, survey
                     =============-->
                    <li class="nav-item">
                        <a href="https://pusakaumkm.id/home/" class="nav-link" target="_blank"
                            style="color: black;">Produk
                            Unggulan</a>
                    </li>
                    <li class="nav-item">
                        <a href="zona-integritas.php" class="nav-link smoothScroll" style="color: black;">Zona
                            Integritas</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="survey_pasar/index.php" class="nav-link smoothScroll" style="color: black;">Survey</a>
                    </li> -->
                    <!-- =============
                     unduhan
                     =============-->
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle" id="unduhan-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">Unduhan</a>
                        <ul class="dropdown-menu" aria-labelledby="layanan-dropdown-toggle" id="uduhan-dropdown">
                            <li><a href="unduhan-renstra.php" class="dropdown-item">Rencana Strategis</a></li>
                            <li><a href="unduhan-renja.php" class="dropdown-item">Rencana Kerja</a></li>
                            <li><a href="unduhan-laporan.php" class="dropdown-item">Laporan</a></li>
                        </ul>
                    </li>
                    <!-- =============
                     sosmed
                     =============-->
                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll" style="color: black;">Serbu Pasar</a>
                    </li>
                    <!--social icon-->
                    <div class="grid coloum-gap-4">
                        <div class="g-col-6 mx-auto social-icons py-2 p-3"
                            style="gap: 10px; font-size: 24px; margin-left: 70rem;">
                            <!-- youtube icon -->
                            <a href="https://www.youtube.com/@disperdaginkotakediri7304" target="_blank" class="social-icon" style="color: #000000;">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <!-- Instagram Icon -->
                            <a href="https://www.instagram.com/disperdagin_kotakediri" target="_blank" class="social-icon" style="color: #000000;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <!-- WhatsApp Icon -->
                            <a href="#" class="social-icon" style="color: #000000;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- mail floating -->
    <div class="mail-floating">
        <a href="mailto:disperdagin@kedirikota.go.id?subject=Chat&body=Halo DISPERDAGIN!" target="_blank" rel="noopener noreferrer" class="right-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                <g clip-path="url(#clip0_1044_1001)">
                    <path d="M29.5291 7.14111H5.60412C5.02727 7.14111 4.47405 7.36955 4.06616 7.77616C3.65827 8.18277 3.42912 8.73426 3.42912 9.3093V30.9911C3.42661 31.4046 3.54394 31.8099 3.767 32.1585C3.99007 32.5071 4.30937 32.784 4.68654 32.956C4.97395 33.0894 5.28707 33.1588 5.60412 33.1593C6.1147 33.1581 6.60835 32.9766 6.99748 32.6471L7.00971 32.6376L11.4494 28.8229H29.5291C30.106 28.8229 30.6592 28.5945 31.0671 28.1879C31.475 27.7813 31.7041 27.2298 31.7041 26.6548V9.3093C31.7041 8.73426 31.475 8.18277 31.0671 7.77616C30.6592 7.36955 30.106 7.14111 29.5291 7.14111ZM21.9166 21.2343H13.2166C12.9282 21.2343 12.6516 21.1201 12.4476 20.9168C12.2437 20.7135 12.1291 20.4377 12.1291 20.1502C12.1291 19.8627 12.2437 19.5869 12.4476 19.3836C12.6516 19.1803 12.9282 19.0661 13.2166 19.0661H21.9166C22.205 19.0661 22.4816 19.1803 22.6856 19.3836C22.8895 19.5869 23.0041 19.8627 23.0041 20.1502C23.0041 20.4377 22.8895 20.7135 22.6856 20.9168C22.4816 21.1201 22.205 21.2343 21.9166 21.2343ZM21.9166 16.8979H13.2166C12.9282 16.8979 12.6516 16.7837 12.4476 16.5804C12.2437 16.3771 12.1291 16.1014 12.1291 15.8138C12.1291 15.5263 12.2437 15.2506 12.4476 15.0473C12.6516 14.844 12.9282 14.7297 13.2166 14.7297H21.9166C22.205 14.7297 22.4816 14.844 22.6856 15.0473C22.8895 15.2506 23.0041 15.5263 23.0041 15.8138C23.0041 16.1014 22.8895 16.3771 22.6856 16.5804C22.4816 16.7837 22.205 16.8979 21.9166 16.8979Z" fill="#FDFDFD"/>
                </g>
                <defs>
                    <clipPath id="clip0_1044_1001">
                    <rect width="30" height="31" fill="white" transform="translate(0.166626 0.636475)"/>
                    </clipPath>
                </defs>
            </svg>
            <span class="mail-label">
                Hubungi Kami
                <img src="images/hand-emoji.png" class="emoji" alt="">
            </span>
        </a>
    </div>
</body>
</div>
<script src="js/live-search.js"></script>