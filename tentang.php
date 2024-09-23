<!DOCTYPE html>
<html lang="en">

<head>

     <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="jpg/png" href="images/lpicon2.png">

     <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

     <!-- Tautan ke Leaflet CSS -->
     <link rel="stylesheet" href="css/leaflet.css"/>
     
     <!-- Tautan ke Leaflet dan Google Maps JavaScript -->
     <script src="js/leaflet.js"></script>

</head>

<body>
     <style>
          #logo-img img {
               height: 199px;
          }

          .dotted {
               font-family: 'Segoe UI';
               color: #076797;
               font-size: 30px;
               font-weight: 600;
          }

          @media screen and (max-width: 768px) {
               #con-hub {
                    width: 100%;
               }

               #con-hub .icon-contact {
                    width: 100%;
               }

               #con-hub .text-contact {
                    width: 100%;
                    overflow: auto;
               }

               #logo-img img {
                    width: 100%;
                    height: 100%;
               }

               #table-profile {
                    margin-top: 1rem;
               }

               #table-profile tr td h3 {
                    width: 440px;
               }

               #table-profile {
                    width: 300px;
               }

               .profile-dinas {
                    text-align: justify;
               }

               .profile-dinas p {
                    font-size: 17px;
               }

               #con-loc {
                    width: 100%;
                    justify-content: center;
               }

               #location {
                    width: 100%;
                    display: grid;
                    grid-template-rows: 1fr 1fr;
                    /* justify-content: center; */
               }

               #location #text-loc {
                    justify-content: center;
                    align-items: center;
                    width: 100%;
               }

               #location #maps {
                    width: auto;
               }
          }
     </style>

     <?php
     include "komponen/navbar.php";
     ?>

     <div class="p-3" style="background: var(--secondary500, #11936E); ">
          <div class="container">
               <div class="row">
                    <div class="col-12 text-center text-light">
                         <h3>Profil</h3>
                         <p class="text-light">DISPERDAGIN Kota Kediri</p>
                    </div>

               </div>
          </div>
     </div>

     <!--logo-->
     <div class="container" id="logo-img">
          <div class="row">
               <div class="col-12 text-center" data-aos="fade-up">
                    <img src="images/d1.png" class="img-fluid">
               </div>
          </div>
     </div>

     <!--profile-->
     <div class="container ">
          <div class="row p-5">
               <div class="col-12 col-md-4">
                    <div class="card" style="width: 20rem; border-radius: 8px; background: linear-gradient(155deg, #076797 46.75%, #12946D 97.9%);" data-aos="fade-up" data-aos-delay="100">
                         <div class="potision-absolute">
                              <img src="images/dp1.png" style="width:50%; height: auto;" class="img-fluid">
                         </div>

                         <div class="">
                              <img src="images/ft1.png" class="card-img-top p-2">
                              <div class="card-body">
                                   <h5 class="text-center text-light">Kepala Dinas</h5>
                                   <p class="text-bold text-center text-light" style="font-size:16px;">WAHYU KUSUMA WARDANI, SSTP.MM</p>
                              </div>
                         </div>
                    </div>

               </div>
               <div class="col-12 col-sm-8"> <!-- Menempatkan tabel di sisi kanan -->
                    <div class="profile-dinas">
                         <div class="container bg-white" style="border-radius: 8px;" data-aos="fade-up">
                              <div class="row p-3">
                                   <div class="col-12 ">
                                        <h2 class="mb-3" data-aos="fade-up">Profil Dinas</h2>
                                        <p class="text-justify" data-aos="fade-up" data-aos-delay="100">
                                             Dinas Perdagangan dan Perindustrian Kota Kediri adalah salah satu bagian penting dari Pemerintah Kota Kediri yang memiliki peran vital dalam mengelola dan mengembangkan sektor perdagangan dan perindustrian. Mulai dari merancang kebijakan pembangunan yang inovatif, mengawasi dan mengatur izin usaha industri, hingga mengelola sistem informasi industri nasional, dilakukan dengan tujuan untuk mendorong pertumbuhan ekonomi dan memastikan perkembangan industri yang berkelanjutan. Dinas Perdagangan dan Perindustrian Kota Kediri berkomitmen untuk menciptakan lingkungan usaha yang kondusif dan mendukung kemajuan industri lokal.
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                         
                         <table class="table-profile" id="table-profile">
                              <tr style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                   <td class="label">NIP</td>
                                   <td class="separator">:</td>
                                   <td class="value">19760207 199602 1 002</td>
                              </tr>
                              <tr style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                   <td class="label">Jabatan</td>
                                   <td class="separator">:</td>
                                   <td class="value">PEMBINA UTAMA MUDA</td>
                              </tr>
                              <tr style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                   <td class="label">GOL. RUANG</td>
                                   <td class="separator">:</td>
                                   <td class="value">IV/c</td>
                              </tr>
                         </table>
                    </div> -->
               </div>
          </div>
     </div>


     <!--Tupoksi dinas-->



     <center>
          <h1 class="mb-3" style="font-family: 'Segoe UI'; font-size: 20px; font-weight: 700; color: #032B3F;">
               Bidang DISPERDAGIN
          </h1>
     </center>

     <div class="container">
          <div class="row row-cols-2 row-cols-md-4 g-2 g-lg-3 d-flex justify-content-center gap-5">
               <!-- collapse 1 -->
               <div class="col-8 text-center">
                    <p class="d-inline-flex ">
                         <a class="btn px-5 py-3" style="font-size: 24px; font-family: 'Segoe UI'; font-weight: 600; background: #076797; color: white;" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Perdagangan
                         </a>
                    </p>
                    <div class="collapse" id="collapseExample1">
                         <div class="card card-body px-2" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <p style="font-family: 'Segoe UI'; font-size: 16px; color: #076797;">
                                   Merencanakan, melaksanakan, mengkoordinasikan dan mengendalikan kebijakan pengembangan perdagangan dalam dan luar negeri, kebijakan stabilitasi harga barang dan rekomendasi perizinan usaha.
                              </p>
                         </div>
                    </div>
               </div>
               <!-- collapse 2 -->
               <div class="col-8 text-center">
                    <p class="d-inline-flex ">
                         <a class="btn px-5 py-3" style="font-size: 24px; font-family: 'Segoe UI'; font-weight: 600; background: #076797; color: white;" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Perindustrian
                         </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                         <div class="card card-body px-2" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <p style="font-family: 'Segoe UI'; font-size: 16px; color: #076797;">
                                   Merencanakan, melaksanakan, mengkoordinasikan dan mengendalikan kebijakan perencanaan dan pembangunan industri,
                                   pengendalian usaha izin usaha industri, dan pengelolaan sistem informasi
                                   industri nasional.
                              </p>
                         </div>
                    </div>
               </div>
               <!-- collapse 3 -->
               <div class="col-8 text-center">
                    <p class="d-inline-flex ">
                         <a class="btn px-5 py-3" style="font-size: 24px; font-family: 'Segoe UI'; font-weight: 600; background: #076797; color: white;" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Kemetrologian
                         </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                         <div class="card card-body px-2" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <p style="font-family: 'Segoe UI'; font-size: 16px; color: #076797;">
                                   Merencanakan, melaksanakan, mengkoordinasikan dan
                                   mengendalikan kebijakan standarisasi dan perlindungan konsumen.
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <div class="bg-white">
          <div class="container" id="con-loc">
               <div class="row" id="location">
                    <div class="col-6 p-4 alamat-content" data-aos="fade-up" id="text-loc">
                         <div class="card shadow bg-body rounded" style="border-top: 3px solid #076797; border-bottom: 3px solid #076797;">
                              <div class="card-body p-3 card-content" data-aos="fade-up" data-aos-delay="100">
                                   <div class="container-loc" style="display: grid; grid-template-columns: 1fr 13fr; gap: 10px; justify-content: center; align-items: center; ">
                                        <div class="icon-loc" style="background-color: #076797; border-radius:100%;padding:10px;">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 19 19" fill="none">
                                                  <path d="M9.5 4.75C8.91284 4.75 8.33886 4.92411 7.85065 5.25032C7.36244 5.57654 6.98193 6.04019 6.75723 6.58266C6.53253 7.12513 6.47374 7.72204 6.58829 8.29792C6.70284 8.87381 6.98559 9.40279 7.40078 9.81797C7.81596 10.2332 8.34494 10.5159 8.92083 10.6305C9.49671 10.745 10.0936 10.6862 10.6361 10.4615C11.1786 10.2368 11.6422 9.85631 11.9684 9.3681C12.2946 8.87989 12.4688 8.30591 12.4688 7.71875C12.4688 6.93139 12.156 6.17628 11.5992 5.61953C11.0425 5.06278 10.2874 4.75 9.5 4.75ZM9.5 9.5C9.1477 9.5 8.80332 9.39553 8.51039 9.19981C8.21747 9.00408 7.98916 8.72589 7.85434 8.4004C7.71952 8.07492 7.68425 7.71677 7.75298 7.37125C7.82171 7.02572 7.99135 6.70833 8.24047 6.45922C8.48958 6.2101 8.80697 6.04046 9.1525 5.97173C9.49802 5.903 9.85617 5.93827 10.1817 6.07309C10.5071 6.20791 10.7853 6.43622 10.9811 6.72914C11.1768 7.02207 11.2812 7.36645 11.2812 7.71875C11.2812 8.19117 11.0936 8.64424 10.7595 8.97828C10.4255 9.31233 9.97242 9.5 9.5 9.5ZM9.5 1.1875C7.76841 1.18946 6.1083 1.87821 4.88388 3.10263C3.65946 4.32705 2.97071 5.98716 2.96875 7.71875C2.96875 10.0492 4.04566 12.5192 6.08594 14.8623C7.0027 15.9211 8.03452 16.8745 9.1623 17.7049C9.26214 17.7748 9.38108 17.8123 9.50297 17.8123C9.62486 17.8123 9.7438 17.7748 9.84363 17.7049C10.9693 16.8741 11.9992 15.9207 12.9141 14.8623C14.9514 12.5192 16.0312 10.0492 16.0312 7.71875C16.0293 5.98716 15.3405 4.32705 14.1161 3.10263C12.8917 1.87821 11.2316 1.18946 9.5 1.1875ZM9.5 16.4766C8.27316 15.5117 4.15625 11.9678 4.15625 7.71875C4.15625 6.3015 4.71925 4.9423 5.7214 3.94015C6.72355 2.938 8.08275 2.375 9.5 2.375C10.9173 2.375 12.2765 2.938 13.2786 3.94015C14.2807 4.9423 14.8438 6.3015 14.8438 7.71875C14.8438 11.9663 10.7268 15.5117 9.5 16.4766Z" fill="white" />
                                             </svg>
                                        </div>
                                        <div class="text-loc">
                                             <h3 class="text-width-bold" style="color: var(--primary500, #076797);">
                                                  Alamat Kantor</h3>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col" style="margin-left:50px; margin-top:20px; font-size:10px;">
                                             <p><strong class="text-dark">Kantor DISPERDAGIN Kota Kediri:
                                                  </strong><br>
                                                  Jl. Penanggungan No. 7, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa
                                                  Timur 64114</p>
                                             <p><strong class="text-dark"> Unit Metrologi Legal:
                                                  </strong><br>
                                                  Jl. Penanggungan No. 45, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa
                                                  Timur 64114</p>
                                             <p><strong class="text-dark"> Unit Metrologi Tangki Ukur Mobil (TUM): </strong><br>
                                                  Jl. Sudanco Supriadi No.3, Mojoroto, Kec. Mojoroto, Kota Kediri,
                                                  Jawa Timur 64114</p>
                                        </div>

                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-6 p-4 map-info" data-aos="fade-up" data-aos-delay="100">
                         <div>
                              <?php
                              include "profil/maps.php";
                              ?>
                         </div>

                    </div>
               </div>
          </div>
     </div>
     <br>

     <div class="container mb-5">
          <div class="row">
               <div class="col-12" data-aos="fade-up">
                    <center>
                         <u class="dotted">Kontak Kami</u>
                    </center>
               </div>
          </div>
     </div>


     <div class="container mb-5 hub-info" id="con-hub" style="display: grid; grid-template-columns: 1fr;">
          <div class="icon-contact icon-up " style="display: grid; grid-template-columns: 1fr 15fr; margin: 0em 0.5em 1.5em 0.3em; gap: 5px; justify-content: center; align-items: center;" data-aos="fade-up" data-aos-delay="200">
               <svg class="bg-primary rounded-5 p-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 19 19" fill="none">
                    <path d="M16.625 3.5625H2.375C2.21753 3.5625 2.06651 3.62506 1.95516 3.73641C1.84381 3.84776 1.78125 3.99878 1.78125 4.15625V14.25C1.78125 14.5649 1.90636 14.867 2.12906 15.0897C2.35176 15.3124 2.65381 15.4375 2.96875 15.4375H16.0312C16.3462 15.4375 16.6482 15.3124 16.8709 15.0897C17.0936 14.867 17.2188 14.5649 17.2188 14.25V4.15625C17.2188 3.99878 17.1562 3.84776 17.0448 3.73641C16.9335 3.62506 16.7825 3.5625 16.625 3.5625ZM15.0983 4.75L9.5 9.88223L3.90168 4.75H15.0983ZM16.0312 14.25H2.96875V5.50629L9.09848 11.1254C9.20802 11.2259 9.3513 11.2817 9.5 11.2817C9.6487 11.2817 9.79198 11.2259 9.90152 11.1254L16.0312 5.50629V14.25Z" fill="#fff" />
               </svg>

               <div class="text-contact">
                    <a href="hello@company.com">
                         <h3>Email</h3>
                    </a>
                    <a style="width: 100px; font-size: 16px;" href="disperdagin@kedirikota.go.id">disperdagin@kedirikota.go.id</a>
               </div>
          </div>
          <div class="icon-contact icon-up" style="display: grid; grid-template-columns: 1fr 15fr; margin: 0em 0.5em 1.5em 0.3em; gap: 5px; justify-content: center; align-items: center;" data-aos="fade-up" data-aos-delay="300">
               <svg class="bg-primary rounded-5 p-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 19 19" fill="none">
                    <path d="M16.504 11.7608L13.0076 10.194L12.9979 10.1896C12.8164 10.1119 12.6184 10.0808 12.4218 10.0989C12.2252 10.1171 12.0363 10.1839 11.872 10.2935C11.8527 10.3063 11.8341 10.3201 11.8164 10.3351L10.0099 11.8751C8.86544 11.3192 7.68387 10.1465 7.12798 9.01693L8.67024 7.18298C8.68508 7.16443 8.69919 7.14588 8.71255 7.12584C8.81974 6.96204 8.88477 6.77428 8.90187 6.57927C8.91896 6.38426 8.88758 6.18805 8.81051 6.0081V5.9992L7.2393 2.49681C7.13743 2.26174 6.96226 2.06591 6.73995 1.93857C6.51764 1.81123 6.2601 1.7592 6.00579 1.79025C5.0001 1.92259 4.07698 2.41648 3.40882 3.1797C2.74067 3.94291 2.37319 4.92324 2.37501 5.93759C2.37501 11.8306 7.16954 16.6251 13.0625 16.6251C14.0769 16.6269 15.0572 16.2594 15.8204 15.5913C16.5836 14.9231 17.0775 14 17.2099 12.9943C17.241 12.7401 17.189 12.4826 17.0618 12.2603C16.9346 12.038 16.739 11.8628 16.504 11.7608ZM13.0625 15.4376C10.5438 15.4348 8.12903 14.4331 6.34803 12.6521C4.56703 10.8711 3.56526 8.45631 3.56251 5.93759C3.55971 5.21284 3.82083 4.51185 4.29708 3.96553C4.77333 3.41922 5.43215 3.06493 6.15051 2.96884C6.15022 2.97181 6.15022 2.97479 6.15051 2.97775L7.70911 6.46603L6.17501 8.3022C6.15944 8.32012 6.14529 8.33923 6.1327 8.35935C6.02101 8.53074 5.95549 8.72807 5.94249 8.93222C5.92949 9.13637 5.96944 9.34042 6.05848 9.52459C6.73091 10.8999 8.11657 12.2751 9.50669 12.9468C9.69221 13.035 9.89744 13.0736 10.1023 13.0588C10.3072 13.0439 10.5047 12.9762 10.6756 12.8622C10.6947 12.8494 10.713 12.8355 10.7306 12.8206L12.5348 11.2813L16.0231 12.8436C16.0231 12.8436 16.029 12.8436 16.0313 12.8436C15.9363 13.563 15.5826 14.2232 15.0362 14.7006C14.4898 15.178 13.7881 15.44 13.0625 15.4376Z" fill="#fff" />
               </svg>

               <div class="text-contact" style="width: 100%;">
                    <a href="+62 338 883 1">
                         <h3>Phone</h3>
                    </a>
                    <a style="width: 100px; font-size: 16px;" href="0354771908">0354771908</a>
               </div>
          </div>
          <div class="icon-contact icon-sec" style="display: grid; grid-template-columns: 1fr 15fr; margin: 0em 0.5em 1.5em 0.3em; gap: 5px; justify-content: center; align-items: center;" data-aos="fade-up" data-aos-delay="400">
               <svg class="bg-primary rounded-5 p-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 19 19" fill="none">
                    <path d="M9.5 5.9375C8.7954 5.9375 8.10663 6.14644 7.52078 6.53789C6.93493 6.92934 6.47832 7.48573 6.20868 8.13669C5.93904 8.78765 5.86849 9.50395 6.00595 10.195C6.14341 10.8861 6.48271 11.5208 6.98093 12.0191C7.47916 12.5173 8.11393 12.8566 8.80499 12.994C9.49605 13.1315 10.2123 13.061 10.8633 12.7913C11.5143 12.5217 12.0707 12.0651 12.4621 11.4792C12.8536 10.8934 13.0625 10.2046 13.0625 9.5C13.0615 8.55547 12.6859 7.6499 12.018 6.98202C11.3501 6.31413 10.4445 5.93848 9.5 5.9375ZM9.5 11.875C9.03027 11.875 8.57109 11.7357 8.18052 11.4747C7.78995 11.2138 7.48554 10.8428 7.30579 10.4089C7.12603 9.9749 7.07899 9.49737 7.17063 9.03666C7.26227 8.57596 7.48847 8.15277 7.82062 7.82062C8.15277 7.48847 8.57596 7.26227 9.03666 7.17063C9.49737 7.07899 9.9749 7.12603 10.4089 7.30579C10.8428 7.48554 11.2138 7.78995 11.4747 8.18052C11.7357 8.57109 11.875 9.03027 11.875 9.5C11.875 10.1299 11.6248 10.734 11.1794 11.1794C10.734 11.6248 10.1299 11.875 9.5 11.875ZM13.0625 1.78125H5.9375C4.83556 1.78243 3.77908 2.2207 2.99989 2.99989C2.2207 3.77908 1.78243 4.83556 1.78125 5.9375V13.0625C1.78243 14.1644 2.2207 15.2209 2.99989 16.0001C3.77908 16.7793 4.83556 17.2176 5.9375 17.2188H13.0625C14.1644 17.2176 15.2209 16.7793 16.0001 16.0001C16.7793 15.2209 17.2176 14.1644 17.2188 13.0625V5.9375C17.2176 4.83556 16.7793 3.77908 16.0001 2.99989C15.2209 2.2207 14.1644 1.78243 13.0625 1.78125ZM16.0312 13.0625C16.0312 13.8499 15.7185 14.605 15.1617 15.1617C14.605 15.7185 13.8499 16.0312 13.0625 16.0312H5.9375C5.15014 16.0312 4.39503 15.7185 3.83828 15.1617C3.28153 14.605 2.96875 13.8499 2.96875 13.0625V5.9375C2.96875 5.15014 3.28153 4.39503 3.83828 3.83828C4.39503 3.28153 5.15014 2.96875 5.9375 2.96875H13.0625C13.8499 2.96875 14.605 3.28153 15.1617 3.83828C15.7185 4.39503 16.0312 5.15014 16.0312 5.9375V13.0625ZM14.25 5.64062C14.25 5.81677 14.1978 5.98897 14.0999 6.13543C14.002 6.28189 13.8629 6.39605 13.7002 6.46346C13.5375 6.53086 13.3584 6.5485 13.1856 6.51414C13.0129 6.47977 12.8542 6.39495 12.7296 6.27039C12.6051 6.14584 12.5202 5.98714 12.4859 5.81438C12.4515 5.64161 12.4691 5.46254 12.5365 5.2998C12.604 5.13706 12.7181 4.99796 12.8646 4.9001C13.011 4.80223 13.1832 4.75 13.3594 4.75C13.5956 4.75 13.8221 4.84383 13.9891 5.01086C14.1562 5.17788 14.25 5.40442 14.25 5.64062Z" fill="#fff" />
               </svg>

               <div class="text-contact" style="width: 100%;">
                    <a href="https://www.instagram.com/disperdagin_kotakediri" target="_blank">
                         <h3 style="width: 100px;">Instagram</h3>
                    </a>
                    <a style="width: 100px; font-size: 16px;" href="https://www.instagram.com/disperdagin_kotakediri">https://www.instagram.com/disperdagin_kotakediri</a>
               </div>
          </div>
          <div class="icon-contact icon-third" style="display: grid; grid-template-columns: 1fr 15fr; margin: 0em 0.5em 1.5em 0.3em; gap: 5px; justify-content: center; align-items: center;" data-aos="fade-up" data-aos-delay="500">
               <svg class="bg-primary rounded-5 p-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 19 19" fill="none">
                    <path d="M11.5941 10.4553L8.20973 8.19907C8.12477 8.14238 8.026 8.10983 7.92397 8.10489C7.82195 8.09994 7.7205 8.1228 7.63045 8.17101C7.5404 8.21922 7.46513 8.29097 7.41268 8.37862C7.36022 8.46627 7.33255 8.56651 7.33262 8.66865V13.1812C7.33255 13.2833 7.36022 13.3835 7.41268 13.4712C7.46513 13.5588 7.5404 13.6306 7.63045 13.6788C7.7205 13.727 7.82195 13.7499 7.92397 13.7449C8.026 13.74 8.12477 13.7074 8.20973 13.6507L11.5941 11.3945C11.6715 11.343 11.7349 11.2732 11.7788 11.1913C11.8227 11.1093 11.8457 11.0178 11.8457 10.9249C11.8457 10.832 11.8227 10.7405 11.7788 10.6585C11.7349 10.5766 11.6715 10.5068 11.5941 10.4553ZM8.46074 12.1271V9.72627L10.2643 10.9249L8.46074 12.1271ZM16.5219 6.80161C16.4555 6.54168 16.3282 6.30127 16.1505 6.10022C15.9729 5.89917 15.75 5.74323 15.5002 5.64528C13.0832 4.71176 9.23633 4.72022 9.0248 4.72022C8.81328 4.72022 4.96637 4.71176 2.54937 5.64528C2.2996 5.74323 2.07671 5.89917 1.89907 6.10022C1.72143 6.30127 1.59415 6.54168 1.52771 6.80161C1.34509 7.50528 1.12793 8.79134 1.12793 10.9249C1.12793 13.0585 1.34509 14.3445 1.52771 15.0482C1.59405 15.3083 1.72129 15.5488 1.89893 15.75C2.07657 15.9512 2.29952 16.1072 2.54937 16.2052C4.86484 17.0986 8.48894 17.1296 8.97827 17.1296H9.07134C9.56066 17.1296 13.1869 17.0986 15.5002 16.2052C15.7501 16.1072 15.973 15.9512 16.1507 15.75C16.3283 15.5488 16.4556 15.3083 16.5219 15.0482C16.7045 14.3431 16.9217 13.0585 16.9217 10.9249C16.9217 8.79134 16.7045 7.50528 16.5219 6.80161ZM15.4297 14.769C15.4082 14.8555 15.3666 14.9357 15.3081 15.003C15.2496 15.0702 15.1761 15.1227 15.0934 15.1561C12.8618 16.0177 9.0664 16.0022 9.02974 16.0022H9.0248C8.98673 16.0022 5.19412 16.0163 2.96113 15.1561C2.87848 15.1227 2.8049 15.0702 2.74644 15.003C2.68798 14.9357 2.6463 14.8555 2.62481 14.769C2.45348 14.1253 2.25605 12.9393 2.25605 10.9249C2.25605 8.9105 2.45348 7.72456 2.61987 7.08434C2.64096 6.99732 2.68247 6.91657 2.74095 6.84877C2.79943 6.78097 2.87321 6.72807 2.9562 6.69444C5.1081 5.86315 8.71386 5.84834 9.00929 5.84834H9.02833C9.0664 5.84834 12.8625 5.83565 15.092 6.69444C15.1747 6.7278 15.2482 6.78027 15.3067 6.84755C15.3652 6.91484 15.4068 6.99502 15.4283 7.08152C15.5961 7.72456 15.7936 8.9105 15.7936 10.9249C15.7936 12.9393 15.5961 14.1253 15.4297 14.7655V14.769Z" fill="#fff" />
               </svg>

               <div class="text-contact" style="width: 100%;">
                    <a href="https://www.youtube.com/@disperdaginkotakediri7304" target="_blank">
                         <h3 style="width: 100px;">Youtube</h3>
                    </a>
                    <a style="width: 100px; font-size: 16px;" href="https://www.youtube.com/@disperdaginkotakediri7304">https://www.youtube.com/@disperdaginkotakediri7304</a>
               </div>
          </div>
          <div class="icon-contact icon-third" style="display: grid; grid-template-columns: 1fr 15fr; margin: 0em 0.5em 1.5em 0.3em; gap: 5px; justify-content: center; align-items: center;" data-aos="fade-up" data-aos-delay="600">
               <svg class="bg-primary rounded-5 p-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 19 19" fill="none">
                    <path d="M9.5 1.78125C7.97338 1.78125 6.48104 2.23395 5.2117 3.08209C3.94235 3.93024 2.95302 5.13574 2.36881 6.54616C1.78459 7.95658 1.63174 9.50856 1.92957 11.0059C2.2274 12.5031 2.96254 13.8785 4.04202 14.958C5.12151 16.0375 6.49686 16.7726 7.99415 17.0704C9.49144 17.3683 11.0434 17.2154 12.4538 16.6312C13.8643 16.047 15.0698 15.0576 15.9179 13.7883C16.7661 12.519 17.2188 11.0266 17.2188 9.5C17.2164 7.45358 16.4024 5.49166 14.9554 4.04462C13.5083 2.59759 11.5464 1.78361 9.5 1.78125ZM16.0313 9.5C16.0318 10.1023 15.9486 10.7018 15.7841 11.2812H12.9259C13.108 10.1007 13.108 8.89927 12.9259 7.71875H15.7841C15.9486 8.29819 16.0318 8.89767 16.0313 9.5ZM7.57032 12.4688H11.4297C11.0495 13.7146 10.3894 14.857 9.5 15.8086C8.61092 14.8567 7.95092 13.7144 7.57032 12.4688ZM7.28086 11.2812C7.07701 10.1025 7.07701 8.8975 7.28086 7.71875H11.7251C11.9289 8.8975 11.9289 10.1025 11.7251 11.2812H7.28086ZM2.96875 9.5C2.96824 8.89767 3.05142 8.29819 3.2159 7.71875H6.07407C5.89198 8.89927 5.89198 10.1007 6.07407 11.2812H3.2159C3.05142 10.7018 2.96824 10.1023 2.96875 9.5ZM11.4297 6.53125H7.57032C7.95053 5.28542 8.61058 4.14303 9.5 3.19141C10.3891 4.14328 11.0491 5.28559 11.4297 6.53125ZM15.3136 6.53125H12.6699C12.3367 5.3088 11.7751 4.16046 11.0148 3.14688C11.9334 3.36755 12.7935 3.78425 13.536 4.36841C14.2785 4.95257 14.8859 5.69038 15.3165 6.53125H15.3136ZM7.9852 3.14688C7.2249 4.16046 6.66332 5.3088 6.33012 6.53125H3.68348C4.11415 5.69038 4.72155 4.95257 5.46405 4.36841C6.20655 3.78425 7.06659 3.36755 7.9852 3.14688ZM3.68348 12.4688H6.33012C6.66332 13.6912 7.2249 14.8395 7.9852 15.8531C7.06659 15.6325 6.20655 15.2158 5.46405 14.6316C4.72155 14.0474 4.11415 13.3096 3.68348 12.4688ZM11.0148 15.8531C11.7751 14.8395 12.3367 13.6912 12.6699 12.4688H15.3165C14.8859 13.3096 14.2785 14.0474 13.536 14.6316C12.7935 15.2158 11.9334 15.6325 11.0148 15.8531Z" fill="#fff" />
               </svg>

               <div class="text-contact" style="width: 100%;">
                    <a href="https://www.youtube.com/@disperdaginkotakediri7304">
                         <h3 style="width: 100px;">Website</h3>
                    </a>
                    <a style="width: 100px; font-size: 16px;" href="https://www.youtube.com/@disperdaginkotakediri7304">https://www.youtube.com/@disperdaginkotakediri7304</a>
               </div>
          </div>
     </div>
     <br>

     <!-- footer -->
     <?php
     include "komponen/footer.php";
     ?>


     <!-- SCRIPTS -->
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
               var scrollUpIcon = document.querySelector('.scroll-up-icon');

               // Tampilkan tombol ketika pengguna menggulir ke bawah
               window.addEventListener('scroll', function() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                         scrollUpIcon.style.display = 'block';
                    } else {
                         scrollUpIcon.style.display = 'none';
                    }
               });

               // Smooth scroll ke atas ketika tombol diklik
               scrollUpIcon.addEventListener('click', function() {
                    smoothScrollToTop();
               });

               // Fungsi untuk melakukan smooth scroll ke atas
               function smoothScrollToTop() {
                    var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
                    if (currentPosition > 0) {
                         window.requestAnimationFrame(smoothScrollToTop);
                         window.scrollTo(0, currentPosition - currentPosition / 8);
                    }
               }
          });
     </script>

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