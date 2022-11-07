<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "config.php";
    $qry_get_transaksi = mysqli_query($conn, 'select * from transaksi where id_transaksi = '  . $_GET['id_transaksi']);
    $data_transaksi = mysqli_fetch_array($qry_get_transaksi);
    ?>
    <h3>Tambah transaksi</h3>
    <form action="proses_tambah_transaksi.php" method="post">
        <input type="hidden" name="id_transaksi" value="<?= $data_transaksi['id_transaksi'] ?>">
        <?php
            $qry_get_nama=mysqli_query($conn, "select * from member");
            $data_nama = mysqli_fetch_array($qry_get_nama);
        ?>
        <textarea name="tgl" class="form-control" rows="4" value="id_member"><?= $data_nama['nama'] ?></textarea>
        Nama Pelanggan :
        <textarea name="tgl" class="form-control" rows="4"><?= $data_transaksi['tgl'] ?></textarea>
        Tanggal :
        <textarea name="tgl" class="form-control" rows="4"><?= $data_transaksi['tgl'] ?></textarea>
        Batas Pembayaran :
        <textarea name="batas_waktu" class="form-control" rows="4"><?= $data_transaksi['batas_waktu'] ?></textarea>
        Tanggal Pembayaran :
        <textarea name="tgl_bayar" class="form-control" rows="4"><?= $data_transaksi['tgl_bayar'] ?></textarea>
        Status Pemesanan :
        <textarea name="status" class="form-control" rows="4"><?= $data_transaksi['status'] ?></textarea>
        Status Pembayaran :
        <textarea name="pembayaran" class="form-control" rows="4"><?= $data_transaksi['pembayaran'] ?></textarea>
        <?php
        include "config.php";
        $qry_transaksi = mysqli_query($conn, "select * from transaksi");
        while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {
            if ($data_transaksi['id_transaksi']) {
                $selek = "selected";
            } else {
                $selek = "";
            }
        }
        ?>
        <input type="submit" name="simpan" value="Ubah transaksi" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php 
var_dump($data_transaksi)?>
</body>

</html>