<?php
	include 'break.php';
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$user_id = $row['id'];
		$pengaduan_id = $_POST['pengaduan_id'];
		$tanggapan = $_POST['tanggapan'];
		$date = date('Y-m-d');

		$query = "INSERT INTO tanggapan (user_id,pengaduan_id,tanggapan,tanggal) values('$user_id','$pengaduan_id','$tanggapan', '$date')";
		$send = mysqli_query($koneksi,$query) or die(mysqli_error($koneksi).$query);
	    
	    header("location:detail_pengaduan.php?id=$pengaduan_id");
	}
?>