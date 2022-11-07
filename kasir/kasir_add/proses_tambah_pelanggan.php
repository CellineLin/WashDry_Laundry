<?php
if($_POST){
    $nama_pelanggan=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['jk'];

    if(empty($nama_pelanggan)){
        echo "<script>alert('Nama pelanggan harus diisi');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "config.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jk) value ('".$nama_pelanggan."','".$alamat."','".$gender."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
