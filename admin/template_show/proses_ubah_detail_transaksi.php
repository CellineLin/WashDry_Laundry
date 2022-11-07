<?php
$id_transaksi = $_POST['id_transaksi'];
$pembayaran = $_POST['pembayaran'];
$tgl_bayar = $_POST['tgl_bayar'];
$status = $_POST['status'];
$qty = $_POST['qty'];


include 'config.php';
$qry_detail_transaksi = mysqli_query($conn, "select id_bill from detail_transaksi where id_transaksi= '" . $id_transaksi . "'");
$dt_detail_transaksi = mysqli_fetch_array($qry_detail_transaksi);
$sql = "update transaksi join detail_transaksi on detail_transaksi.id_transaksi = transaksi.id_transaksi set  tgl_bayar = '" . $tgl_bayar . "', status = '" . $status . "', qty = '" . $qty . "',pembayaran = '" . $pembayaran . "'
        where detail_transaksi.id_bill= '" . $dt_detail_transaksi['id_bill']. "' ";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('Success edit transaksi ');location.href='tampil_transaksi.php';</script>";
} else {
  echo "<script>alert('Failed edit transaksi');location.href='tampil_transaksi.php';</script>";
}