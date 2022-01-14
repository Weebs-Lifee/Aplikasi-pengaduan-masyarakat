<!DOCTYPE html>
<html>
<head>
	<title>Tambah Akun</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font_awesome/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		.text-right {
			text-align: right !important;
		}
		.text-center {
			text-align: center !important;
		}
		.card {
			box-shadow: 3px 9px 15px -10px #000;
			border-radius: 6px;	
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
        <div class="navbar-nav col-md-5 offset-md-8">
          <a class="nav-item" id="teks" href="index.php" style="color: white; text-decoration: none;"><i class="fa fa-home"></i> Home </a>
          <a class="nav-item" id="teks" href="pengaduan.php" style="color: white; text-decoration: none;"><i class="fa fa-bullhorn"></i> Pengaduan</a>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br><br>
	

	<div class="container-fluid">
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-12">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>Tambah Pengguna</h3>
						</div>
						<div class="col-md-6 text-right">
							<a href="pengguna.php" class="btn btn-primary">
								<i class="fa fa-chevron-left"></i>
								Kembali
							</a>
						</div>
					</div>
					<form method="post" action="aksi_tambah_pengguna.php">
						<div class="mb-3">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" required="" placeholder="Masukan nama anda">
						</div>
						<div class="mb-3">
							<label>Email</label>
							<input type="email" class="form-control" name="email" required="" placeholder="Masukan email anda">
						</div>
						<div class="mb-3">
							<label>Telephone</label>
							<input type="number" class="form-control" name="telp" required="" placeholder="Masukan telephone anda">
						</div>
						<div class="mb-3">
							<label>Alamat</label>
							<textarea class="form-control" rows="3" name="alamat" required="" placeholder="Masukan alamat anda"></textarea>
						</div>
						<div class="mb-3">
							<label>Role</label>
							<select class="form-control" name="role">
								<option value="" selected="" disabled="">-Pilih Sebagai-</option>
								<option value="admin">Admin</option>
								<option value="petugas">Petugas</option>
								<option value="masyarakat">Masyarakat</option>
							</select>
						</div>
						<div class="mb-3">
							<label>Password</label>
							<input type="password" class="form-control" name="password" required="" placeholder="Masukan password anda">
						</div>
						<div>
							<button type="submit" class="btn btn-block btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><br><br><br>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>