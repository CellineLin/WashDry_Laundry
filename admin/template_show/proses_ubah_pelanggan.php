<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['jk'];
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='../kasir_show/ubah_pelanggan';</script>";

    } else {
        include "config.php";
            $update=mysqli_query($conn,"update member set nama='".$nama_member."', jk='".$gender."', alamat='".$alamat."' where id_member = '".$id_member."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_member=".$id_member."';</script>";
            }
        }
        
    } 

