<!doctype html>
<html lang="en">

<head>
	<title>WashDry : Package Data</title>
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
					<h2 class="heading-section">Tampil Paket</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
							<thead class="thead-primary">
								<tr>
									<th>ID</th>
									<th>Jenis</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "config.php";
								$qry_paket = mysqli_query($conn, "select * from  paket");
								$no = 0;
								while ($data_paket = mysqli_fetch_array($qry_paket)) {
									$no++; ?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $data_paket['jenis'] ?></td>
										<td><?= $data_paket['harga'] ?></td>
										
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