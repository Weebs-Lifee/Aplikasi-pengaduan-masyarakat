<?php
   include('break.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
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
	}
	</style>
</head>
<body><br><br><br><br><br>

	<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
      <a class="navbar-brand"  href="#" style="color:white; text-transform: uppercase;">aplikasi pengaduan masyarakat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav col-md-5 offset-8">
          <a class="nav-item" id="teks" href="index.php" style="color: white; text-decoration: none;"><i class="fa fa-home"></i> Home </a>
          <a class="nav-item" id="teks" href="pengaduan.php" style="color: white; text-decoration: none;"><i class="fa fa-bullhorn"></i> Pengaduan</a>
        </div>
      </div>
    </div>
  </nav>

	<div class="container-fluid">
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-12">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>Edit Pengaduan</h3>
						</div>
						<div class="col-md-6 text-right">
							<a href="pengaduan.php" class="btn btn-primary">
								<i class="fa fa-chevron-left"></i>
								Kembali
							</a>
						</div>
					</div>
					<form method="post" action="aksi_edit_pengaduan.php" enctype="multipart/form-data">
						
						<?php 
							include 'koneksi.php';
							$query = "SELECT u.id as user_id, u.nama, pen.* from pengaduan pen join user u on pen.user_id = u.id where pen.id = ".$_GET['id'];
							$data = mysqli_query($koneksi,$query);
							while($d = mysqli_fetch_array($data)) {
						?>
						<div class="mb-3">
							<label>Isi Laporan</label>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<textarea class="form-control ckeditor" id="ckeditor" rows="10" name="isi_laporan" required="" placeholder="Masukan pengaduan anda"><?php echo $d['isi_laporan']; ?></textarea>
						</div>
						<div class="mb-3">
							<label>Photo</label>
							<input type="file" class="form-control" name="photo">
						</div>
						<div>
							<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
						</div>
						<?php 
							}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
<br><br><br><br>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</body>
</html>