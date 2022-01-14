<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

 <?php
include('koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM tb_user WHERE id_user='$id'";
$qq = mysqli_query($host,$query);
$val = mysqli_fetch_row($qq);
?>
<div class="col-md-12">
	<div id="halaman">
		<div class="container">
			<form action="profileedit.php" method="POST" style="padding-top: 10px;">
	      <input type="hidden" name="id" value='<?php echo $id ?>'>
	      <input type="hidden" name="edit" value='1'>
					<div class="form-group">
						<label for="barang">Nama</label>
						<input type="text" class="form-control" required="" name="nama" id="barang" value="<?php echo $val[1] ?>">
						<label for="jumlah">Email</label>
						<input type="email" class="form-control" required="" name="email" id="jumlah" value="<?php echo $val[2] ?>" > 
	          <label for="jumlah">No. Telephone</label>
	          <input type="text" class="form-control" required="" name="telp" id="image" value="<?php echo $val[4] ?>">
	          <label for="jumlah">Alamat</label>
	          <input type="text" class="form-control" required="" name="alamat" id="descripsi"ipsi value="<?php echo $val[5] ?>">
					</div>
	  		<a href="admin.php" class="btn btn-danger">Batalkan</a>
	  		<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>