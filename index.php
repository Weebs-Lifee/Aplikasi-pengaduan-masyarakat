<?php
	include 'koneksi.php';
	$pengaduan = mysqli_query($koneksi, "SELECT COUNT(*) as total_pengaduan FROM pengaduan");
	$pengaduan_row = mysqli_fetch_assoc($pengaduan);
	$total_pengaduan = $pengaduan_row['total_pengaduan'];
	
	// menghitung jumlah user
	$user = mysqli_query($koneksi, "SELECT COUNT(*) as total_user FROM user");
	$user_row = mysqli_fetch_assoc($user);
	$total_user = $user_row['total_user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/font_awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<style type="text/css">
		.card {
			box-shadow: 0px 0px 1px rgba(51, 109, 205, 0.1), 0px 5px 8px -2px rgba(51, 109, 205, 0.1);
			border-radius: 24px;
		}
		.bg-primary {
			transition : .5s;
		}
		.bg-primary:hover {
			background-color : 
		}
		.bg-info:hover {
			background-color: red !important;	
		}
		.navbar {
     /* background: #CB356B;
      background: -webkit-linear-gradient(to right, #BD3F32, #CB356B);
      background: linear-gradient(to right, #BD3F32, #CB356B);*/
      background-color: #0093E9;
      background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
    }
  	
  	.navbar-nav{
      text-transform: uppercase;
      color: #e6fcff; 
  	}

  	.navbar-brand:hover{
      color: #fff;
      text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #208FC6, 0 0 30px #208FC6, 0 0 40px #208FC6, 0 0 55px #208FC6, 0 0 75px #208FC6;
      transition: .5s;
  	}

  	#teks{
      position: relative;
      top: 7px;
    }
    .welcome{
    	font-size: 130pt;
    }
    
    @media (max-width: 992px){
	 .navbar-brand{
	    font-size: 15px;
    }
    .navbar-nav{
        text-transform: none;
        text-align: center;
    }
    #teks:hover, #teks1:hover{
    	background-color: black;
    }
    .welcome{
      font-size: 70px;
    }
	}
	</style>
</head>
<body>
	<?php include('navbar-template.php'); ?>
  <h1 class="text-center">Welcome <span style="text-transform: uppercase; font-family: 'Viga', sans-serif;">"<?php echo $row['nama']; ?>"<br></span><p class="welcome">¯\_(ツ)_/¯</p></h1>

	<?php if ($row['role'] !== 'masyarakat') : ?>
		<div class="container">
			<br><br><br><br>
			<div class="row justify-content-center" style="margin-top: 1%">
				<a href="pengaduan.php" class="col-5 text-decoration-none">
					<div class="card bg-primary p-3">
						<div class="row">
							<div class="col-md-4">
								<i class="text-white fa fa-bullhorn fa-5x"></i>
							</div>
							<div class="col-7">
								<h4 class="text-white"><strong>Total Laporan</strong></h4>
								<h2 class="text-white"><?= $total_pengaduan; ?></h2>
							</div>
						</div>
					</div>
				</a>
				<a href="pengguna.php" class="col-5">
					<div class="card bg-success p-3">
						<div class="row">
							<div class="col-md-4">
								<i class="text-white fa fa-users fa-5x"></i>
							</div>
							<div class="col-7">
								<h4 class="text-white"><strong>Total User</strong></h4>
								<h2 class="text-white"><?= $total_user; ?></h2>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div><br><br><br>
	<?php endif ?>
	
	<!-- Footer -->
	<?php include('footer-template.php') ?>

<script src="assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>