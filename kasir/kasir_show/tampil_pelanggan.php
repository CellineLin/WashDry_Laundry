<!doctype html>
<html lang="en">

<head>
	<title>WashDry : Customer Data</title>
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
					<h2 class="heading-section">Tampil Pelanggan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
							<thead class="thead-primary">
								<tr>
									<th>ID</th>
									<th>Nama Pelanggan</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "config.php";
								$qry_pelanggan = mysqli_query($conn, "select * from member");
								$no = 0;
								while ($data_pelanggan = mysqli_fetch_array($qry_pelanggan)) {
									$no++; ?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $data_pelanggan['nama'] ?></td>
										<td><?= $data_pelanggan['alamat'] ?></td>
										<td><?= $data_pelanggan['jk'] ?></td>
										<td><?= $data_pelanggan['no_telp'] ?></td>
										<td><a href="ubah_pelanggan.php?id_member=<?= $data_pelanggan['id_member'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus_pelanggan.php?id_member=<?= $data_pelanggan['id_member'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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

</body>

</html>