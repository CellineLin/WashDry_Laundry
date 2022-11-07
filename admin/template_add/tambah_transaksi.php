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
        <form action="proses_tambah_transaksi.php" method="post">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-12">
                        <div class="form h-100">
                            <h3>Tambah Data Transaksi</h3>
                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">

                                <div class="col-md-6 form-group mb-3">
                                        Outlet
                                        <select name="id_outlet" class="form-control"><br>
                                            <option></option>
                                            <?php
                                            include "config.php";
                                            $qry_outlet = mysqli_query($conn, "select * from outlet");
                                            while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
                                                echo '<option value="' . $data_outlet['id_outlet'] . '">' . $data_outlet['nama_outlet'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        Nama Pelanggan
                                        <select name="id_member" class="form-control"><br>
                                            <option></option>
                                            <?php
                                            include "config.php";
                                            $qry_member = mysqli_query($conn, "select * from member");
                                            while ($data_member = mysqli_fetch_array($qry_member)) {
                                                echo '<option value="' . $data_member['id_member'] . '">' . $data_member['nama'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        Jenis Paket
                                        <select name="id_paket" class="form-control"><br>
                                            <option></option>
                                            <?php
                                            include "config.php";
                                            $qry_paket = mysqli_query($conn, "select * from paket");
                                            while ($data_paket = mysqli_fetch_array($qry_paket)) {
                                                echo '<option value="' . $data_paket['id_paket'] . '">' . $data_paket['jenis'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Tanggal Order:
                                        <input type="date" name="tgl" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Banyak Laundry:
                                        <input type="number" name="qty" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Batas Waktu:
                                        <input type="date" name="batas_waktu" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Tanggal Bayar:
                                        <input type="date" name="tgl_bayar" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Status Order:
                                        <select name="status" class="form-control"><br>
                                        <option></option>
                                        <option value="baru">Baru</option>
                                        <option value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                        <option value="diambil">Diambil</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        Status Pembayaran:
                                        <select name="pembayaran" class="form-control"><br>
                                        <option></option>
                                        <option value="belum_bayar">Belum dibayar</option>
                                        <option value="dibayar">Dibayar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary rounded-0 py-2 px-4">
                                        <a href="../template_show/tampil_transaksi.php" class=""></a>
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