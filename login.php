<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="font_awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="image/elaina.png">
	<title>Login</title>
</head>
<body>
	<style>
	footer {
	text-align: center;
	padding: 3px;
	background-color: #041d36;
	color: white;
	font-size: 15px;
	}
	.copy{
	position: relative;
	bottom: -5px;
	}
	</style>

		<!-- Validasi navbar login -->
        <?php include('navbar.php'); ?>
        <br><br><br><br>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 7%;">
			<div class="col-md-6">
				<div class="card p-5">
					<h3 class="text-center">Login</h3>
					<form action="aksi_login.php" method="post">
						<div class="mb-3">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required="">
						</div>	
						<div class="mb-3">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div>
						<button type="submit" id="tombol" class="btn btn-primary mt-3">Login
						</button>
						<a href="register.php" type="submit" id="tombol" class="btn btn-link mt-3" style="text-decoration: none;">
							Tidak punya akun? Klik disini
						</a>
						<a href="gabut.php" type="submit" id="tombol" class="btn btn-link mt-3">
							Bosen? Klik saya
						</a>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<br><br><br><br>
	<footer>
	  <p class="copy fixed-bottom">Copyright © Your Website 2021</p>
	</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="font-awesome/js/all.js"></script>		

</body>
</html>