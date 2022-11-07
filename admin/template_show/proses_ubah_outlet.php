<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['tlp'];
    
    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='../template_show/ubah_outlet.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='../template_show/ubah_outlet.php';</script>";
    } else {
        include "config.php";
        if(empty($outlet)){
            $update=mysqli_query($conn,"update outlet set nama_outlet='".$nama_outlet."' , alamat='".$alamat."',tlp='".$no_telp."', id_outlet='".$id_outlet."' where id_outlet = '".$id_outlet."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id_outlet=".$id_outlet."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update outlet set nama_outlet='".$nama_outlet."', alamat='".$alamat."',tlp='".$no_telp."', '".md5($password)."', id_outlet='".$id_outlet."' where id_outlet = '".$id_outlet."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='../template_show/tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id_outlet=".$id_outlet."';</script>";
            }
        }
        
    } 
}
