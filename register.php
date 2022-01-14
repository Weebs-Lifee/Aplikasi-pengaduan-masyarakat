<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="font_awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Daftar Akun</title>	
</head>
<body>
	<style type="text/css">

	@media (max-width: 992px) {
		.card{
			margin-top: 10%;
			font-size: 15px;
		}

		h3{
			font-size: 30px;
		}
		
	}
	</style>


	<?php
	include('navbar.php');
	?>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 15%;">
			<div class="col-md-8">
				<div class="card p-5">
					<h3 class="text-center">Buat Akun</h3>
					<form action="register_proses.php" method="post">
						<div class="mb-3">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" required="">
						</div>
						<div class="mb-3">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required="">
						</div>
						<div class="mb-3">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div>
						<div class="mb-3">
							<label>Telepon</label>
							<input type="number" name="telp" required="" class="form-control">
						</div>
						<div class="mb-3">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat"></textarea>
						</div>
						<div hidden="">
						<select class="form-control" name="role">
		                  <option>masyarakat</option>
		                </select>
						</div>
						<button type="submit" class="btn btn-primary mt-3">Daftar</button>
						<a href="login.php" type="submit" class="btn btn-link mt-3">
							Sudah punya akun? Login di sini
					</form>
				</div>
			</div>
		</div>
	</div>
	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="font-awesome/js/all.js"></script>		

</body>
</html>