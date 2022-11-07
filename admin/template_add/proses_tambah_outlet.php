<?php
if($_POST){
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['tlp'];

    if(empty($nama_outlet)){
        echo "<script>alert('Nama outlet harus diisi');location.href='tambah_outlet.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } elseif(empty($no_telp)){
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "config.php";
        $insert=mysqli_query($conn,"insert into outlet (nama_outlet, alamat, tlp) value ('".$nama_outlet."','".$alamat."','".$no_telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='../template_show/tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
