<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $id_member=$_POST['id_member'];
    $id_paket=$_POST['id_paket'];
    $qty=$_POST['qty'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $pembayaran=$_POST['pembayaran'];
    


    if(empty($id_member)){
        echo "<script>alert('Nama outlet harus diisi');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($tgl)){
        echo "<script>alert('tanggal tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($batas_waktu)){
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($id_paket)){
        echo "<script>alert('Pilih jenis paket');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($qty)){
        echo "<script>alert('Tentukan jumlah pemesanan');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($tgl_bayar)){
        echo "<script>alert('Tentukan tanggal pembayaran');location.href='tambah_transaksi.php';</script>";
    } else {
        include "config.php";
        $insert=mysqli_query($conn,"insert into transaksi (id_outlet, id_member, id_paket, tgl, batas_waktu, tgl_bayar, status, pembayaran) value ('".$id_outlet."','".$id_member."','".$id_paket."', '".$tgl."','".$batas_waktu."', '".$tgl_bayar."', '".$status."', '".$pembayaran."')");
        if($insert){
            include "config.php";
            $qry_get_transaksi = mysqli_query($conn, "select max(id_transaksi) as id_transaksi from transaksi");
            $data_transaksi = mysqli_fetch_array($qry_get_transaksi);
            $insert_detail = mysqli_query($conn, "insert into detail_transaksi ( id_transaksi, id_paket, qty) value
            ('" . $data_transaksi['id_transaksi'] . "','" . $id_paket . "','" . $qty . "')") or
                die(mysqli_error($conn));
            echo "<script>alert('Sukses menambahkan data transaksi');location.href='tambah_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data transaksi');location.href='tambah_transaksi.php'>;</script>";
        }
        
    }
}
