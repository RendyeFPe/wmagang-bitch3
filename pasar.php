<?php
// include "koneksi.php";
?>

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

          @media screen and (max-width: 768px) {
               #text-p {
                    font-size: 70%;
               }
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
                         <h3>Informasi Pasar Rakyat</h3>
                         <p class="text-light">Kota Kediri</p>
                    </div>

               </div>
          </div>
     </div>

     <div class="container mt-4">
          <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-2 d-flex justify-content-center card-mall">
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                              <img src="images/pasar/pasar banjaran.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounde-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p" id="text-p">
                                        <strong class="text-light">Pasar Banjaran</strong> <br>
                                        <span style="color: #fff;">Kel. Banjaran</span>
                                   </p>

                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                              <img src="images/pasar/pasar setonobetek.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Setonobetek</strong> <br>
                                        <span style="color: #fff;">Kel. Pande</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                              <img src="images/pasar/pahing.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Pahing</strong> <br>
                                        <span style="color: #fff;">Kel. Singonegaran</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Mrican</strong> <br>
                                        <span style="color: #fff;">Kel. Mrican</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                              <img src="images/pasar/pasar bandar.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Bandar</strong> <br>
                                        <span style="color: #fff;">Kel. Bandar Lor</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Grosir Ngronggo</strong> <br>
                                        <span style="color: #fff;">Kel. Ngronggo</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Ngadisimo</strong> <br>
                                        <span style="color: #fff;">Kel. Dandangan</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                              <img src="images/pasar/Pasar Mojoroto.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Mojoroto</strong> <br>
                                        <span style="color: #fff;">Kel. Mojoroto</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
                              <img src="images/pasar/Pasar Campurejo.jpg" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Campurejo</strong> <br>
                                        <span style="color: #fff;">Kel. Campurejo</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Muning</strong> <br>
                                        <span style="color: #fff;">Kel. Lirboyo</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Pesantren</strong> <br>
                                        <span style="color: #fff;">Kel. Pesantren</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Tempurejo</strong> <br>
                                        <span style="color: #fff;">Kel. Tempurejo</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Bandar Ngalim</strong> <br>
                                        <span style="color: #fff;">Kel. Bandar Kidul</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Bawang</strong> <br>
                                        <span style="color: #fff;">Kel. Bawang</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop16">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Loak</strong> <br>
                                        <span style="color: #fff;">Kel. Kaliombo</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop17">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Selowarih</strong> <br>
                                        <span style="color: #fff;">Kel. Dandangan</span>
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col">
                    <div class="card border-0" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                         <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
                              <img src="images/pasar/kediri_harmoni.png" class="img-thumbnail p-0 rounded-0 rounded-top">
                              <div class="card-body rounded-0 rounded-bottom" style="background-color: #0C684E;">
                                   <p class="card-text text-center" id="text-p">
                                        <strong class="text-light">Pasar Hewan Gor Jayabaya</strong> <br>
                                        <span style="color: #fff;">Kel. Bandar Kidur</span>
                                   </p>
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
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Banjaran</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Insinyur Sutami No.31, Banjaran, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31621.706125039076!2d112.00291267900514!3d-7.820144167836223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785769010b1f61%3A0x5da78223abcf00d7!2sPasar%20Banjaran!5e0!3m2!1sid!2sid!4v1717038863779!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Setonobetek</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Pattimura, Pasar setonobetek, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.693279568284!2d112.01171337031573!3d-7.822253260419339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570e6d2b80c1%3A0x7ff931eaf4c62ba5!2sPasar%20Setonobetek%20kediri!5e0!3m2!1sid!2sid!4v1717043473105!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Pahing</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jalan HOS Cokroaminoto No.105, Jamsaren, Pesantren, Singonegaran, Kec. Pesantren, Kota Kediri, Jawa Timur 64129</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15810.774130660811!2d112.00398852969157!3d-7.822226555096745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857128ed66a71%3A0x8522d547e18a0c6b!2sUPTD%20Pasar%20Pahing!5e0!3m2!1sid!2sid!4v1717043653665!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Mrican</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Mrican, Kec. Mojoroto, Kota Kediri, Jawa Timur 64111</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1717043868201!5m2!1sid!2sid!6m8!1m7!1sbQxJvynWDX546BbThVYrgQ!2m2!1d-7.782684312155399!2d112.0001182509231!3f91.08451351507638!4f-8.499202666064534!5f0.7820865974627469" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Bandar</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. KH Wachid Hasyim No.64112, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa Timur 64114</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7666780410514!2d112.00336602412096!3d-7.8145048775941754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78572700000001%3A0xc890ddce7a57b3ef!2sPasar%20Bandar!5e0!3m2!1sid!2sid!4v1717043958765!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--6-->
     <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Grosir Ngronggo</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.463666791066!2d112.02242497031776!3d-7.84644346065256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857968310d6a5%3A0x6781ae0f9f26e42d!2sPasar%20Grosir%20Ngronggo!5e0!3m2!1sid!2sid!4v1717044035360!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--7-->
     <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Ngadisimo</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Sersan Kko Harun No.53, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8026707739787!2d112.02112597412095!3d-7.810702477549459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78574007608969%3A0x4dbd01b301c70c49!2sPasar%20Ngadisimo!5e0!3m2!1sid!2sid!4v1717488233545!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--8-->
     <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Mojoroto</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8797413269895!2d112.00099347412079!3d-7.802554277453799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785728849f3109%3A0xb450bab015f3b744!2sPasar%20Mojoroto%20Kota%20Kediri!5e0!3m2!1sid!2sid!4v1717044186260!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--9-->
     <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Campurejo</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jalan Dr. Saharjo, Campurejo, Kec. Mojoroto, Kota Kediri, Jawa Timur 64116</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7154496265434!2d111.9832315703157!3d-7.819913660396829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856ef58e05f49%3A0x709cd0e802d6454d!2sPasar%20Campurejo!5e0!3m2!1sid!2sid!4v1717044305838!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--10-->
     <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Muning</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Pasar Muning, Jl. Semeru, RT.001/RW.005, Lirboyo, Kota Kediri, Jawa Timur 64117</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6406458371375!2d111.99209652695313!3d-7.827804899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78571bda3f0e97%3A0xfc6860748f0f3b86!2sPasar%20Muning!5e0!3m2!1sid!2sid!4v1717044379842!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--11-->
     <div class="modal fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Pesantren</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Pesantren, Kec. Pesantren, Kabupaten Kediri, Jawa Timur 64131</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5815006917646!2d112.04888357412136!3d-7.8340386778241635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78598c09b5acbb%3A0xaeac34c4467d08fc!2sPasar%20Pesantren!5e0!3m2!1sid!2sid!4v1717044453551!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--12-->
     <div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Tempurejo</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Durian, Tempurejo, Kec. Pesantren, Kota Kediri, Jawa Timur 64138</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15810.327016649408!2d112.04115873350013!3d-7.834011973058204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785830a814568f%3A0x8bc53d228c14a4f4!2spasar%20pagi%20tempurejo!5e0!3m2!1sid!2sid!4v1717044588343!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--13-->
     <div class="modal fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar bandar Ngalim</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Bandar Kidul, Kec. Mojoroto, Kota Kediri, Jawa Timur</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6440052396624!2d112.00573217412119!3d-7.827450677746524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857043b42f753%3A0x378df2b8476a8dd1!2sJl.%20Bandar%20Ngalim%2C%20Bandar%20Kidul%2C%20Kec.%20Mojoroto%2C%20Kota%20Kediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1717560879316!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--14-->
     <div class="modal fade" id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Hewan Gor Jayabaya</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Raung No.RT. 1/2, Bandar Kidul, Kec. Mojoroto, Kota Kediri, Jawa Timur 64118</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15810.335781912325!2d111.97669565541995!3d-7.833781099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856ff4e07ae59%3A0x6543088c26ff7591!2sPasar%20Hewan%20Muning!5e0!3m2!1sid!2sid!4v1717561220166!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--15-->
     <div class="modal fade" id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Bawang</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Raya Bawang, Bawang, Kec. Pesantren, Kota Kediri, Jawa Timur 64136</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505931.75316225505!2d111.65731822728213!3d-7.832951232314722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78581a7dce5419%3A0x3083085cafb5d9a5!2sPasar%20Tradisional%20Centong%20Bawang!5e0!3m2!1sid!2sid!4v1717561326768!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--16-->
     <div class="modal fade" id="staticBackdrop16" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Loak</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Padang Padi No.9, Kaliombo, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63243.01975646201!2d111.98096659012246!3d-7.822732784884204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857a16918f7bd%3A0x8112cd6232a010ec!2sPasar%20Loak!5e0!3m2!1sid!2sid!4v1717563856051!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!--17-->
     <div class="modal fade" id="staticBackdrop17" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content col-xxl">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasar Selowarih</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col">
                                   <p>Jl. Selowarih, Dandangan, Kec. Kota, Kota Kediri, Jawa Timur</p>
                                   <div class="ratio ratio-16x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.820601479425!2d112.0216759741209!3d-7.808807527527232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857007dc8af81%3A0x5db4ad7a2f834105!2sPasar%20Selowarih!5e0!3m2!1sid!2sid!4v1717564022730!5m2!1sid!2sid" width="770" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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