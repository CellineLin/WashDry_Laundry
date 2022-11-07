<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "config.php";
    $qry_get_outlet = mysqli_query($conn, 'select * from outlet where id_outlet = '  . $_GET['id_outlet']);
    $data_outlet = mysqli_fetch_array($qry_get_outlet);
    ?>
    <h3>Ubah outlet</h3>
    <form action="../template_show/proses_ubah_outlet.php" method="post">
        <input type="hidden" name="id_outlet" value="<?= $data_outlet['id_outlet'] ?>">
        Nama outlet :
        <input type="text" name="nama_outlet" value="<?= $data_outlet['nama_outlet'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $data_outlet['alamat'] ?></textarea>
        No Telp :
        <textarea name="tlp" class="form-control" rows="4"><?= $data_outlet['tlp'] ?></textarea>
        <?php
        include "config.php";
        $qry_outlet = mysqli_query($conn, "select * from outlet");
        while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
            if ($data_outlet['id_outlet']) {
                $selek = "selected";
            } else {
                $selek = "";
            }
        }
        ?>
        <input type="submit" name="simpan" value="Ubah outlet" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>