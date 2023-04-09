<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/font_awesome/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</style>
</head>
<body>
	<?php include('navbar-template.php'); ?>
	<div class="container-fluid">
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-11">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>User List</h3>
						</div>
						<?php if ($row['role'] == "admin") : ?>
						<div class="col-md-6 text-right">
						<a href="tambah_pengguna.php" class="btn btn-primary">
							<i class="fa fa-plus"></i>
							Add user
							</a>
						</div>
						<?php endif ?>
						
					</div>
					<table class="table table-hover table-striped">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Role</th>
							<th>Phone</th>
							<th class="text-center">Action</th>
						</tr>
						<?php 
							include 'koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * from user ORDER BY created_at desc");
							while($d = mysqli_fetch_array($data)) : ?>
						<tr>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['email']; ?></td>
							<td><?php echo $d['role']; ?></td>
							<td ><?php echo $d['telp']; ?></td>
							<td class="text-center">
								<a href="detail_pengguna.php?id=<?php echo $d['id']; ?>" class="btn btn-info btn-sm">
									<i class="text-white fa fa-info-circle"></i>
								</a>
								<?php if ($row['role'] == 'admin') : ?>
									<a href="edit_pengguna.php?id=<?php echo $d['id']; ?>" class="btn btn-success btn-sm">
										<i class="text-white fa fa-edit"></i>
									</a>
									<a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $d['id']; ?>">
										<i class="text-white fa fa-times"></i>
									</a>
								<?php endif ?>
								
								<!-- Pop up -->
								<div class="modal fade" id="deleteModal<?php echo $d['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content text-left">
											<form action="aksi_delete_pengguna.php" method="POST">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Hapus Pengguna</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													Yakin mau hapus pengguna <strong><?php echo $d['nama']; ?></strong>? data yang di hapus tidak bisa kembali lagi.
													<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Ya, hapus</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<?php endwhile ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>

	<!-- Footer -->
	<?php include('footer-template.php') ?>

<script src="assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>