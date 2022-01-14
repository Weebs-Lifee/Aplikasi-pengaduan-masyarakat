<?php
   include('break.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="font_awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.text-right {
			text-align: right !important;
		}
		.text-center {
			text-align: center !important;
		}
		.card {
			box-shadow: 7px 12px 20px -9px #000;
			border-radius: 10px;	
		}
		.bg-primary:hover {
			background-color: #0d6efd6b !important;	
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
	<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
      <a class="navbar-brand"  href="#" style="color:white; text-transform: uppercase;">aplikasi pengaduan wibu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav col-md-9 offset-md-6">
          <a class="nav-item" id="teks" href="index.php" style="color: white; text-decoration: none;"><i class="fa fa-home"></i> Home </a>
          <a class="nav-item" id="teks" href="pengaduan.php" style="color: white; text-decoration: none;"><i class="fa fa-bullhorn"></i> Pengaduan</a>
          <?php if ($row['role'] !== 'masyarakat') { ?>
	        <li class="nav-item">
	          <a class="nav-link" href="pengguna.php" id="teks1">
	          	<span style="color: #ffff;"><i class="fa fa-user"></i> Pengguna</span>
	          </a>
	        </li>
	    	<?php }?>
	    	<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
               <i class="fa fa-user"></i> <?php echo $row['nama']; ?> 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item text-center" href="#">Profile</a>
              <a class="dropdown-item text-center" href="logout.php">Logout</a>
            </div>
          	</li>
        </div>
      </div>
    </div>
  </nav>

	<br><br><br><br><br>
  <center><h1>Welcome <span style="text-transform: uppercase; font-family: 'Viga', sans-serif;">"<?php echo $row['nama']; ?>"<br></span><p class="welcome">¯\_(ツ)_/¯</p></h1>
  </center>

	<!-- <div class="container">
		<br><br><br><br>
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-5">
				<div class="card bg-primary p-3">
					<div class="row">
						<div class="col-md-4">
							<i class="text-white fa fa-bullhorn fa-5x"></i>
						</div>
						<div class="col-7">
							<h4 class="text-white"><strong>Buat Laporan Sekarang</strong></h4>
							<h2 class="text-white">2</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --><br><br><br>

<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>