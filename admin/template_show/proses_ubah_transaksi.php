<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $pelanggan=$_POST['id_member'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['tlp'];
    
    if(empty($pelanggan)){
        echo "<script>alert('nama transaksi tidak boleh kosong');location.href='../template_add/tambah_transaksi';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='../template_add/tambah_transaksi.php';</script>";
    } else {
        include "config.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update transaksi set pelanggan='".$pelanggan." , alamat='".$alamat."', id_transaksi='".$id_transaksi."' where id_transaksi = '".$id_transaksi."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update transaksi');location.href='tampil_transaksi.php';</script>";
            } else {
                echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update transaksi set pelanggan='".$pelanggan."', alamat='".$alamat."', '".md5($password)."', id_transaksi='".$id_transaksi."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update transaksi');location.href='tampil_transaksi.php';</script>";
            } else {
                echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
            }
        }
        
    } 
}
