<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="shorcut icon" href="images/lpicon2.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">

   
</head>
<body>
    <div class="container">
        <div class="row">
            <di class="col-12">
                <form>
                    <table>
                        <tr>
                            <td>
                                <label for="exampleInputEmail1" class="form-label">Tanggal Pemesanan</label>
                                <input type="date" class="form-control" aria-describedby="emailHelp">
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputEmail1" class="form-label">Nama/Perusahaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputPassword1" class="form-label">No Hp/Tlp</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <?php
                                    $timbangan = array (
                                        "Ukuran Panjang",
                                        "Takaran Basah",
                                        "Takaran Kering",
                                        "Meter Taksi (Luar Kantor)",
                                        "Meter Kadar Air",
                                        "Pompa Ukur BBM (Luar Kantor)",
                                        "Meter Air",
                                        "TUM BBM (Kantor)",
                                        "Timbangan Milisimal",
                                        "Timbangan Sentisimal",
                                        "Timbangan Desimal",
                                        "Timbangan Meja",
                                        "Timbangan Dacin",
                                        "Timbangan Pegas",
                                        "Timbangan Neraca",
                                        "Timbangan Jembatan (Luar Kantor)",
                                        "Timbangan Elektronik",
                                        "Timbangan Cepat",
                                        "Timbangan BBI",
                                        "Timbangan Cepat Meja"
                                    );
                                    ?>
                                    <label class="form-label">Regrister Tera Ulang</label>

                                    <?php foreach ($timbangan as $index => $ukur): ?>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio<?= $index ?>" name="options" value="<?= $ukur ?>">
                                            <label class="form-check-label" for="radio<?= $index ?>"><?= $ukur ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                    
                                    <!-- Add more checkboxes as needed -->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputPassword1" class="form-label">Merk/Tipe/No Seri</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputPassword1" class="form-label">Kapasitas Max/e</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
