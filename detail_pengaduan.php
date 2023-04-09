<!DOCTYPE html>
<html>
<head>
	<title>Detail Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="assets/font_awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include('navbar-template.php'); ?>
	<div class="container">
	<?php if ($row['role'] === 'admin') { ?>
		<button class="btn btn-primary" onclick="window.print()">Cetak Laporan</button>
	
		<?php } ?>
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-12">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>Detail Pengguna</h3>
						</div>
						<div class="col-md-6 text-right">
							<a href="pengaduan.php" class="btn btn-primary">
								<i class="fa fa-chevron-left"></i>
								Kembali
							</a>
						</div>
					</div>

					<?php 
						include 'koneksi.php';
						$query = "SELECT u.id as user_id, u.nama, pen.* from pengaduan pen join user u on pen.user_id = u.id where pen.id = ".$_GET['id'];
						$data = mysqli_query($koneksi,$query);
						while($d = mysqli_fetch_array($data)) {
					?>
					<div class="row">
						<div class="col-md-2"><strong>Tanggal</strong></div>
						<div class="col-md-3"><?php echo $d['tanggal']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Pelapor</strong></div>
						<div class="col-md-3"><?php echo $d['nama']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Isi Laporan</strong></div>
						<div class="col-md-3"><?php echo $d['isi_laporan']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Status</strong></div>
						<div class="col-md-3">
							<?php if ($d['status'] == 'new') { ?>
							<span class="badge rounded bg-primary text-white">New</span>
							<?php } else if ($d['status'] == 'proses') { ?>
							<span class="badge rounded bg-warning text-white">Proses</span>
							<?php } else if ($d['status'] == 'selesai') { ?>
							<span class="badge rounded bg-success text-white">Selesai</span>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"><strong>Photo</strong></div>
						<div class="col-md-3"><img width="100%" src="	<?php echo $d['photo']; ?>"></div>
					</div>
					<?php } ?>
					<div class="row">
						<div class="col-md-6">
							<h3><strong>Riwayat Tanggapan</strong></h3>
						</div>
						<?php if ($row['role'] !== 'masyarakat') { ?>
						<div class="col-md-6 text-right">
							<button class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#tanggapan">
								<i class="fa fa-plus"></i>
							</button>
						</div>
						<?php }?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hovered table-striped">
								<tr>
									<th>Tanggal</th>
									<th>Dibuat oleh</th>
									<th>Tanggapan</th>
								</tr>
								<?php 
									include 'koneksi.php';
									$query = "SELECT u.id as user_id, u.nama, tg.* from  tanggapan tg join user u on tg.user_id = u.id where tg.pengaduan_id = ".$_GET['id'];
									$data = mysqli_query($koneksi,$query);
									while($d = mysqli_fetch_array($data)) {
								?>
								<tr>
									<td><?php echo $d['tanggal']; ?></td>
									<td><?php echo $d['nama']; ?></td>
									<td><?php echo $d['tanggapan']; ?></td>
								</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br><br>

	<!-- Footer -->
	<?php include('footer-template.php') ?>


	<!-- Modal -->
	<div class="modal fade" id="tanggapan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah tanggapan</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <form action="aksi_tambah_tanggapan.php" method="POST">
		      <div class="modal-body">
		        	<label>Berikan Tanggapan</label>
		        	<input type="hidden" name="pengaduan_id" value="<?php echo $_GET['id']; ?>">
		        	<textarea rows="10" name="tanggapan" placeholder="masukan tanggapan anda disini" class="form-control"></textarea>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="text-left btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		      </div>

	      </form>
	    </div>
	  </div>
	</div>

<script src="assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>