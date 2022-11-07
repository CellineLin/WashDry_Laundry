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

    <title>WashDry | Add Outlet</title>
</head>

<body>


    <div class="content">
        <form action="proses_tambah_outlet.php" method="post">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-12">
                        <div class="form h-100">
                            <h3>Tambah Data Outlet</h3>

                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        Nama Outlet :
                                        <input type="text" name="nama_outlet" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Alamat :
                                        <input type="text" name="alamat" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        No. Telepon :
                                        <input type="number" name="tlp" value="" class="form-control" required>
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
                                Berhasil menambahkan outlet
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