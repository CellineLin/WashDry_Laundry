<!doctype html>
<html lang="en">

<head>
	<title>WashDry : Transaction</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Tampil Transaksi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
							<thead class="thead-primary">
								<tr>
									<th>NO</th>
									<th>Nama Outlet</th>
									<th>Date Order</th>
									<th>Batas Waktu</th>
									<th>Status Pembayaran</th>
									<th>Tgl Bayar</th>
									<th>Pelanggan</th>
									<th>Paket</th>
									<th>Order Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "config.php";
								$qry_transaksi = mysqli_query($conn, "select * from transaksi 
								JOIN outlet ON outlet.id_outlet = transaksi.id_transaksi JOIN member ON member.id_member = transaksi.id_member JOIN paket ON paket.id_paket = transaksi.id_paket
								");
								$no = 0;
								while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {
									$no++; ?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $data_transaksi['nama_outlet'] ?></td>
										<td><?= $data_transaksi['tgl'] ?></td>
										<td><?= $data_transaksi['batas_waktu'] ?></td>
										<td><?= $data_transaksi['tgl_bayar'] ?></td>
										<td><?= $data_transaksi['nama'] ?></td>
										<td><?= $data_transaksi['jenis'] ?></td>
										<td><?= $data_transaksi['status'] ?></td>
										<td><?= $data_transaksi['pembayaran'] ?></td>

										<a href="tampil_detail_transaksi.php"></a>
										
									</tr>
								<?php
								}
								
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<?php 
	var_dump($data_transaksi);
	?>
</body>

</html>