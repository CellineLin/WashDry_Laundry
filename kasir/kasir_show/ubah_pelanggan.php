<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "config.php";
    $qry_get_pelanggan = mysqli_query($conn, 'select * from member where id_member = '  . $_GET['id_member']);
    $data_member = mysqli_fetch_array($qry_get_pelanggan);
    ?>
    <h3>Tambah Member</h3>
    <form action="proses_ubah_pelanggan.php" method="post">
        <input type="hidden" name="id_member" value="<?= $data_member['id_member'] ?>">
        Nama Pelanggan :
        <input type="text" name="nama" value="<?= $data_member['nama'] ?>" class="form-control">
        Jenis Kelamin :
        <?php
        $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
        ?>
        <select name="jk" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender) :
                if ($key_gender == $data_member['jk']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
            ?>
                <option value="<?= $key_gender ?>" <?= $selek ?>><?= $val_gender ?></option>
            <?php endforeach; ?>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $data_member['alamat'] ?></textarea>
            <option></option>
            <?php
            include "config.php";
            $qry_pelanggan = mysqli_query($conn, "select * from member");
            while ($data_member = mysqli_fetch_array($qry_pelanggan)) {
                if ($data_member['id_member']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
            }
            ?>  
        <input type="submit" name="simpan" value="Ubah Pelanggan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>