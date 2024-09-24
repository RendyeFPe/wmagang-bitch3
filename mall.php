<h6?php include "koneksi.php" ; ?>

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

          <div class="p-3" style="background: var(--secondary500, #11936E); ">
               <div class="container">
                    <div class="row">
                         <div class="col-12 text-center text-light">
                              <h3>Informasi Pusat Perbelanjaan</h3>
                              <p class="text-light">Kota Kediri</p>
                         </div>

                    </div>
               </div>
          </div>


          <div class="container mt-4">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-2 g-lg-3 d-flex justify-content-center card-mall">
                    <div class="col">
                         <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                   <img src="images/mall/Ketos.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                   <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Kediri Town Square</p>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                   <img src="images/mall/kediriMall.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                   <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Kediri Mall</p>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                   <img src="images/mall/ramayana_.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                   <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Ramayana Mall Kediri</p>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                   <img src="images/mall/dhoho-plaza.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                   <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Dhoho Plaza Kediri</p>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                              <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                                   <img src="images/mall/golden teater.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                                   <div class="card-body rounded-0 rounded-bottom" style="background-color: #1B2125;">
                                        <p class="card-text text-center" style="color: #fff;">Golden Theater Kediri</p>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
               </div>
          </div>

          <!--1-->
          <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                    <div class="modal-content col-xxl">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Kediri Town Square</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col">
                                        <p>Jl. Hasanudin No.2, Balowerti, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.781808254446!2d112.01320437407948!3d-7.812906692207613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78573e00ab090b%3A0x238b1d6bc49da7ac!2sKediri%20Town%20Square!5e0!3m2!1sid!2sid!4v1716265463306!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

          <!--2-->
          <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                    <div class="modal-content col-xxl">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Kediri Mall</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col">
                                        <p>Jl. Joyoboyo No.10, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.751973465524!2d112.01716687407956!3d-7.816057792204575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785714362e7281%3A0x92797bd63ac16b4f!2sTransmart%20Kediri%20Mall!5e0!3m2!1sid!2sid!4v1716266916118!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

          <!--3-->
          <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                    <div class="modal-content col-xxl">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Ramayana Mall Kediri</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col">
                                        <p>Jl. Panglima Sudirman, Ringin Anom, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6896352506315!2d112.00861047412111!3d-7.822637777689872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78f84dea2a1429%3A0x9ddfffc6d75c6e07!2sRamayana%20Mall%20Kediri!5e0!3m2!1sid!2sid!4v1716345341662!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

          <!--4-->
          <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                    <div class="modal-content col-xxl">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Dhoho Plaza Kediri</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col">
                                        <p>Jl. Brigjen Katamso No.1A, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                        <div class="ratio ratio-16x9">
                                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6418713833923!2d112.0083436741212!3d-7.827675677749144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570f50000001%3A0x5c6352d797c1c863!2sDhoho%20Plaza%20Kediri!5e0!3m2!1sid!2sid!4v1716345420050!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

          <!--5-->
          <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                    <div class="modal-content col-xxl">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Golden Theater Kediri</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col">
                                        <p>Jl. Hayam Wuruk No.121-125, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur 64122</p>
                                        <div class="ratio ratio-16x9">
                                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7591855702917!2d112.01653647412105!3d-7.815296177603532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78fbe087da166d%3A0xa43226483c0863e2!2sGolden%20Theater%20Kediri!5e0!3m2!1sid!2sid!4v1719365976778!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
          <br>
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