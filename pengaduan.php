<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/font_awesome/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include('navbar-template.php'); ?>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-11">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>List Pengaduan</h3>
						</div>
						<?php if ($row['role'] === "masyarakat") { ?>
							<div class="col-md-6 text-right">
								<a href="tambah_pengaduan.php" class="btn btn-primary">
									<i class="fa fa-plus"></i>
									Buat Pengaduan
								</a>
							</div>		
						<?php } ?>
					</div>
					<table class="table table-hover table-bordered table-striped">
						<tr>
							<th>Tanggal</th>
							<th>Pelapor</th>
							<th>Pengaduan</th>
							<th class="text-center">Status</th>
							<th class="text-center">Aksi</th>
						</tr>
						<?php 
							include 'koneksi.php';
							if ($row['role'] === 'masyarakat') {
								$query = "SELECT u.id as user_id, u.nama, pen.* from pengaduan pen join user u on pen.user_id = u.id where user_id = ".$row['id'];
							} else {
								$query = "SELECT u.id as user_id, u.nama, pen.* from pengaduan pen join user u on pen.user_id = u.id";
							}
							
							$data = mysqli_query($koneksi,$query);
							while($d = mysqli_fetch_array($data)) { ?>
							<tr>
								<td><?php echo $d['tanggal']; ?></td>
								<td><?php echo $d['nama']; ?></td>
								<td><?php echo $d['isi_laporan']; ?></td>
								<td class="text-center">
									<?php if ($d['status'] == 'new') { ?>
									<span class="badge rounded text-white bg-primary">New</span>
									<?php } else if ($d['status'] == 'proses') { ?>
									<span class="badge rounded text-white bg-warning">Proses</span>
									<?php } else if ($d['status'] == 'selesai') { ?>
									<span class="badge rounded text-white bg-success">Selesai</span>
									<?php } ?>
								</td>
								<td class="text-center">
									<a href="detail_pengaduan.php?id=<?php echo $d['id']; ?>" class="btn btn-info btn-sm">
									<i class="text-white fa fa-info-circle"></i>
									</a>
									<?php if ($row['role'] === 'masyarakat') { ?>
									<a href="edit_pengaduan.php?id=<?php echo $d['id']; ?>" class="btn btn-success btn-sm">
									<i class="text-white fa fa-edit"></i>
									</a>
									<a href="pengaduan_hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-success btn-sm">
									<i class="text-white fa fa-trash"></i>
									</a>
									<?php } ?>
								</td>
							</tr>
						<?php } ?>
					</table>
				</div>asa
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