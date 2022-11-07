<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "config.php";
    $qry_get_paket = mysqli_query($conn, 'select * from paket where id_paket = '  . $_GET['id_paket']);
    $data_paket = mysqli_fetch_array($qry_get_paket);
    ?>
    <h3>Tambah paket</h3>
    <form action="../template_show/proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value="<?= $data_paket['id_paket'] ?>">
        Jenis paket :
        <input type="text" name="jenis" value="<?= $data_paket['jenis'] ?>" class="form-control">
        Harga :
        <textarea name="harga" class="form-control" rows="4"><?= $data_paket['harga'] ?></textarea>
        <?php
        include "config.php";
        $qry_paket = mysqli_query($conn, "select * from paket");
        while ($data_paket = mysqli_fetch_array($qry_paket)) {
            if ($data_paket['id_paket']) {
                $selek = "selected";
            } else {
                $selek = "";
            }
        }
        ?>
        <input type="submit" name="simpan" value="Ubah paket" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>