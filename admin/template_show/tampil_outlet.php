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
					<h2 class="heading-section">Tampil Outlet</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
							<thead class="thead-primary">
								<tr>
									<th>ID</th>
									<th>Nama Outlet</th>
									<th>Alamat</th>
									<th>No Telepon</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "config.php";
								$qry_outlet = mysqli_query($conn, "select * from  outlet");
								$no = 0;
								while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
									$no++; ?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $data_outlet['nama_outlet'] ?></td>
										<td><?= $data_outlet['alamat'] ?></td>
										<td><?= $data_outlet['tlp'] ?></td>
										<td><a href="ubah_outlet.php?id_outlet=<?= $data_outlet['id_outlet'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus_outlet.php?id_outlet=<?= $data_outlet['id_outlet'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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
	var_dump($data_outlet);
	?>
</body>

</html>