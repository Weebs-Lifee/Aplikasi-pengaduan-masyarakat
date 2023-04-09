<!DOCTYPE html>
<html>
<head>
	<title>Detail Pengguna</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font_awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</style>
</head>
<body>
	<?php include('navbar-template.php'); ?>
	<div class="container">
		<button class="btn btn-primary" onclick="window.print()">Cetak Laporan</button>
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-12">
				<div class="card p-5">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>Detail Pengguna</h3>
						</div>
						<div class="col-md-6 text-right">
							<a href="pengguna.php" class="btn btn-primary">
								<i class="fa fa-chevron-left"></i>
								Kembali
							</a>
						</div>
					</div>
					<?php
						include 'koneksi.php';
						$data = mysqli_query($koneksi,"select * from user where id = ".$_GET['id']);
						while($d = mysqli_fetch_array($data)) {
					?>
					<div class="row">
						<div class="col-md-2"><strong>Nama</strong></div>
						<div class="col-md-3"><?php echo $d['nama'] ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Email</strong></div>
						<div class="col-md-3"><?php echo $d['email'] ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Role</strong></div>
						<div class="col-md-3"><?php echo $d['role'] ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Telephone</strong></div>
						<div class="col-md-3"><?php echo $d['telp'] ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Alamat</strong></div>
						<div class="col-md-3"><?php echo $d['alamat'] ?></div>
					</div>

					<?php 
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include('footer-template.php') ?>

<script src="assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>