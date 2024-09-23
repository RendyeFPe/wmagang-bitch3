<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <!-- Sidebar -->


  <div id="content-wrapper">

    <div class="container-fluid">
      <!-- Page Content -->
      <style>
        .floating-message {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          background-color: #076797;
          color: #fff;
          padding: 10px 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          z-index: 9999;
        }

        .floating-message-Error {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          background-color: #FF5240;
          color: #fff;
          padding: 10px 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          z-index: 9999;
        }

        .input-group #tanggal,
        .input-group #harga,
        .input-group #barang {
          border: solid 1px #11936E;
          border-radius: 5px;
        }

        .input-group span {
          background-color: #11936E;
          border: solid 1px #11936E;
          color: #fff;
        }

        .input-group #satuan {
          height: 38px;
          margin-top: 31px;
          border: solid 1px #11936E;
          border-radius: 5px;
        }

        .btn .submit {
          background-color: #076797;
          color: white;
          border: #076797 1px solid;
          border-radius: 5px;
        }

        .btn .submit:hover {
          background-color: white;
          color: #076797;
          cursor: pointer;
        }

        .btn .reset {
          background-color: #FF5240;
          border: #FF5240 1px solid;
          border-radius: 5px;
        }

        .btn .reset:hover {
          background-color: white;
          color: #FF5240;
          cursor: pointer;
        }

        hr {
          width: 27%;
          border: solid 1px;
        }

        .card {
          background-color: #ECF9FF;
          border: solid 1px #ECF9FF;
          box-shadow: 0px 4px 12px 0px rgba(0, 0, 0, 0.25);
          border-radius: 10px;
          margin-top: 2rem;
          padding: 1rem;
        }

        table {
          margin: auto 3rem auto 3rem;
        }

        @media screen and (max-width: 768px) {
          #inputForm {
            width: 100%;
          }

          table {
            width: 100%;
            margin: 0;
          }
        }
      </style>
      <center>
        <h2>Input Data Harga Komoditas</h2>
        <hr>
      </center>


      <form id="inputForm" action="action.php" method="POST" onsubmit="return validateForm()">
        <div class="card">
          <table>
            <tr style="display:flex;">
              <!-- <td>
                        Tanggal
                    </td> -->
              <td>
                <div class="input-group mb-3">
                  <?php
                  $tanggalHariIni = date("Y-m-d");
                  ?>
                  <input type="date" name="tanggal[]" id="tanggal" class="form-control"
                    value="<?php echo $tanggalHariIni; ?>">
                </div>
              </td>
            </tr>
            <tr style="display:flex; margin-bottom: 2rem;">
              <!-- <td>
                        Lokasi
                    </td> -->
              <td>
                <?php
                // session_start(); // Pastikan session_start() dipanggil untuk memulai sesi
                
                // Mendefinisikan opsi lokasi berdasarkan peran pengguna
                $lokasiOptions = array(
                  'surveyorBandar' => 'Pasar Bandar',
                  'surveyorPahing' => 'Pasar Pahing',
                  'surveyorSetonobetek' => 'Pasar Setono Betek'
                );

                $selectedLokasi = 'pilih-lokasi'; // Default value
                
                if (isset($_SESSION['user_role']) && array_key_exists($_SESSION['user_role'], $lokasiOptions)) {
                  $selectedLokasi = $lokasiOptions[$_SESSION['user_role']];
                }
                ?>
                <div class="input-group mb-3">
                  <!-- <label name="lokasi[]" id="lokasi" class="form-label">Lokasi: <?php echo $selectedLokasi; ?></label> -->
                  <label for="lokasi">Lokasi: <?php echo $selectedLokasi; ?></label>
                  <input type="hidden" name="lokasi[]" id="lokasi" class="form-control"
                    value="<?php echo $selectedLokasi; ?>">
                  <!-- <select name="lokasi[]" id="lokasi" class="form-select">
                    <option value="pilih-lokasi" <?php echo $selectedLokasi == 'pilih-lokasi' ? 'selected' : ''; ?>>Pilih Lokasi</option>
                    <option value="Pasar Bandar" <?php echo $selectedLokasi == 'Pasar Bandar' ? 'selected' : ''; ?>>Pasar Bandar</option>
                    <option value="Pasar Pahing" <?php echo $selectedLokasi == 'Pasar Pahing' ? 'selected' : ''; ?>>Pasar Pahing</option>
                    <option value="Pasar Setono Betek" <?php echo $selectedLokasi == 'Pasar Setono Betek' ? 'selected' : ''; ?>>Pasar Setono Betek</option>
                  </select> -->
                </div>
              </td>
            </tr>
            <?php
            $barang = array(
              "Beras Premium" => "beras.webp",
              "Beras Medium" => "beras_medium.webp",
              "Gula Kristal Putih" => "gula_pasir.webp",
              "Minyak Goreng Curah" => "minyak_curah.webp",
              "Minyak Goreng Kemasan Premium" => "minyak_kemasan.webp",
              "Minyak Goreng Kemasan Sederhana" => "minyak_botol.webp",
              "Minyak Goreng MINYAKITA" => "minyakita.webp",
              "Daging Sapi Paha Belakang" => "daging.webp",
              "Daging Ayam Ras" => "ayam_ras.webp",
              "Daging Ayam Kampung" => "ayam_kampung.webp",
              "Telur Ayam Ras" => "telur_ras.webp",
              "Telur Ayam Kampung" => "telur_kampung.webp",
              "SKM Merk Bendera" => "skm_bendera.webp",
              "SKM Merk Indomilk" => "skm_indomilk.webp",
              "Susu Bubuk Merk Bendera (Instant)" => "sb_bendera.webp",
              "Susu Bubuk Merk Indomilk (Instant)" => "sb_indomilk.webp",
              "Jagung Pipilan Kering" => "jagung.webp",
              "Garam Beryodium Bata" => "garam_bata.webp",
              "Garam Beryodium Halus" => "garam_halus.webp",
              "Terigu Protein Sedang (Kemasan)" => "terigu.webp",
              "Kedelai Impor" => "kedelai.webp",
              "Kedelai Lokal" => "kedelai_lokal.webp",
              "Indomie Rasa Kari Ayam" => "kari_ayam.webp",
              "Cabe Merah Keriting" => "cabe_keriting.webp",
              "Cabe Merah Besar" => "cabe_merah.webp",
              "Cabe Rawit Merah" => "cabe_rawit.webp",
              "Bawang Merah" => "bamer.webp",
              "Bawang Putih Sinco/Honan" => "baput.webp",
              "Ikan Asin Teri" => "ikan_teri.webp",
              "Kacang Hijau" => "kacang_hijau.webp",
              "Kacang Tanah" => "kacang_tanah.webp",
              "Ketela Pohon" => "ketela_pohon.webp",
              "Kol/Kubis" => "kubis.webp",
              "Kentang" => "kentang.webp",
              "Tomat Merah" => "tomat.webp",
              "Wortel" => "wortel.webp",
              "Buncis" => "buncis.webp",
              "Ikan Bandeng" => "bandeng.webp",
              "Ikan Kembung" => "kembung.webp",
              "Ikan Tuna" => "tuna.webp",
              "Ikan Tongkol" => "tongkol.webp",
              "Ikan Cakalang" => "cakalang.webp",
              "Gas LPG 3Kg" => "LPG.webp"
            );

            $satuan = array("Kg", "3Kg", "1 Liter", "397 gr/kl", "390 gr/kl", "400 gr/dos", "Buah", "Bungkus");
            foreach ($barang as $item => $gambar) {
              ?>
              <tr>
                <td>
                  <div class="input-group">
                    <label for="barang"><?php echo $item; ?></label>
                    <input type="hidden" name="barang[]" id="barang" class="form-control" value="<?php echo $item; ?>">
                    <input type="hidden" name="gambar[]" value="<?php echo $gambar; ?>">

                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" name="harga_sekarang[]" id="harga" class="form-control" aria-label="Amount"
                      placeholder="Masukkan Harga">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <select name="satuan[]" id="satuan" class="form-select">
                      <option value="satuan">Pilih Satuan</option>
                      <?php
                      foreach ($satuan as $s) {
                        echo "<option value='$s'>$s</option>";
                      }
                      ?>
                    </select>
                  </div>
                </td>
              </tr>

              <?php
            }
            ?>

          </table>
          <div class="btn">

            <input class="submit" name="submit" type="submit" value="Submit">
            <input class="reset" name="reset" type="reset" value="Reset">

          </div>
        </div>
      </form>



    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<script>
  function validateForm() {
    var tanggal = document.getElementById('tanggal').value;
    var satuan = document.getElementById('satuan').value;
    var inputs = document.querySelectorAll('input[type="text"]');
    var filled = true;

    inputs.forEach(function (input) {
      if (input.value === '') {
        filled = false;
      }
    });

    if (tanggal === '' || satuan === 'satuan' || !filled) {
      // Jika ada field yang belum terisi
      var floatingError = document.createElement('div');
      floatingError.className = 'floating-message-Error';
      floatingError.innerText = 'Data tidak boleh kosong';
      document.body.appendChild(floatingError);
      setTimeout(function () {
        floatingError.remove();
      }, 3000); // Munculkan pesan error selama 3 detik
      return false; // Menghentikan pengiriman formulir
    } else {
      // Jika semua field sudah terisi
      var floatingSuccess = document.createElement('div');
      floatingSuccess.className = 'floating-message';
      floatingSuccess.innerText = 'Data berhasil disimpan';
      document.body.appendChild(floatingSuccess);
      setTimeout(function () {
        floatingSuccess.remove();
      }, 3000); // Munculkan pesan sukses selama 3 detik
      return true; // Lanjutkan pengiriman formulir
    }
  }
</script>

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>