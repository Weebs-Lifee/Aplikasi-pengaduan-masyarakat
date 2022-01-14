<?php
   include('break.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
  </nav><br><br><br><br><br>

	<div class="container-fluid">
		<div class="row justify-content-center" style="margin-top: 1%">
			<div class="col-md-11">
				<div class="card p-3">
					<div class="row mb-5">
						<div class="col-md-6">
							<h3>User List</h3>
						</div>
						<?php if ($row['role'] == "admin") { ?>
						<div class="col-md-6 text-right">
						<a href="tambah_pengguna.php" class="btn btn-primary">
							<i class="fa fa-plus"></i>
							Add user
							</a>
						</div>
						<?php } ?>
						
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
							while($d = mysqli_fetch_array($data)) { 
						 ?>
						<tr>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['email']; ?></td>
							<td><?php echo $d['role']; ?></td>
							<td ><?php echo $d['telp']; ?></td>
							<td class="text-center">
								<a href="detail_pengguna.php?id=<?php echo $d['id']; ?>" class="btn btn-info btn-sm">
									<i class="text-white fa fa-info-circle"></i>
								</a>
								<?php if ($row['role'] == 'admin') { ?>
								<a href="edit_pengguna.php?id=<?php echo $d['id']; ?>" class="btn btn-success btn-sm">
									<i class="text-white fa fa-edit"></i>
								</a>
								<a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $d['id']; ?>">
									<i class="text-white fa fa-times"></i>
								</a>
									
								<?php} ?>
								
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
						<?php } ?>
					<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>

<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>