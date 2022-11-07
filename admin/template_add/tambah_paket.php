<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>WashDry | Add Package</title>
</head>

<body>


    <div class="content">
        <form action="proses_tambah_paket.php" method="post">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-12">
                        <div class="form h-100">
                            <h3>Tambah Data Paket</h3>

                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        Jenis Paket :
                                        <select name="jenis" class="form-control"><br>
                                            Jenis Paket
                                            <option></option>
                                            <option value="kiloan">Kiloan</option>
                                            <option value="selimut">Selimut</option>
                                            <option value="bed_cover">Bed Cover</option>
                                            <option value="kaos">Kaos</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Harga :
                                        <input type="text" name="harga" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary rounded-0 py-2 px-4">
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4">
                            </div>
                            <div id="form-message-success">
                                Berhasil menambahkan Paket
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>