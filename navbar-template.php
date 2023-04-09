<?php
   include('break.php');
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
      <a class="navbar-brand"  href="#" style="color:white; text-transform: uppercase;">aplikasi pengaduan masyarakat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav col-md-9 offset-md-6">
          <li class="nav-item">
	          <a class="nav-link" href="index.php" id="teks1">
	          	<span class="text-white"><i class="fa fa-home"></i> Home</span>
	          </a>
	        </li>
          <li class="nav-item">
	          <a class="nav-link" href="pengaduan.php" id="teks1">
	          	<span class="text-white"><i class="fa fa-bullhorn"></i> Pengaduan</span>
	          </a>
	        </li>
          <?php if ($row['role'] !== 'masyarakat') : ?>
	        <li class="nav-item">
	          <a class="nav-link" href="pengguna.php" id="teks1">
	          	<span style="color: #fff;"><i class="fa fa-user"></i> Pengguna</span>
	          </a>
	        </li>
	    	<?php endif?>
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
  </nav><br><br><br>