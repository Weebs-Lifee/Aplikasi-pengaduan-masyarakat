<?php  ?>
<?php
   include('break.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
	<style type="text/css">
		body {
			background-color: aqua;
		}
		.text-right {
			text-align: right !important;
		}
		.text-center {
			text-align: center !important;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Aplikasi Pengaduan Masyarakat</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">	          
	        	<a class="nav-link" href="index.php">
	          		<span class="badge rounded-pill bg-primary"><i class="fa fa-home"></i> Home</span>
	      		</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link" href="#">
	          		<span class="badge rounded-pill bg-primary"><i class="fa fa-user"></i> Pengaduan</span>
	      		</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="pengguna.php">
	          	<span class="badge rounded-pill bg-primary"><i class="fa fa-user"></i> Pengguna</span>
	          </a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="logout.php">
	          	<span class="badge rounded-pill bg-danger"><i class="fa fa-sign-out"></i> Logout</span>
	          </a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-12">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>List Pengaduan</h3>
						</div>
					</div>
					<table class="table table-hover table-striped">
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
							while($d = mysqli_fetch_array($data)) {
						?>
						<tr>
							<td><?php echo $d['tanggal']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['isi_laporan']; ?></td>
							<td class="text-center">
								<?php if ($d['status'] == 'new') { ?>
								<span class="badge rounded-pill bg-primary">New</span>
								<?php } else if ($d['status'] == 'proses') { ?>
								<span class="badge rounded-pill bg-warning">Proses</span>
								<?php } else if ($d['status'] == 'selesai') { ?>
								<span class="badge rounded-pill bg-success">Selesai</span>
								<?php } ?>
							</td>
							<td class="text-center">
								<a href="detail_pengaduan.php?id=<?php echo $d['id']; ?>" class="btn btn-info btn-sm">
									<i class="text-white fa fa-info-circle"></i>
								</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>