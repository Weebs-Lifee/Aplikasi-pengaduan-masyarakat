<?php
    // koneksi database
	include 'break.php';
  include 'koneksi.php';

	$target_dir = "uploads/";
	$isi_laporan = $_POST['isi_laporan'];
	$user_id = $row['id'];
	$date = date('Y-m-d'); //
	$status = 'new';
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["photo"]["tmp_name"]);
	if($check !== false) {
		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
		$query = "INSERT INTO pengaduan (user_id,isi_laporan,photo,tanggal,status) values('$user_id','$isi_laporan','$target_file', '$date', '$status')";
		$send = mysqli_query($koneksi,$query) or die(mysqli_error($koneksi).$query);
	    
	    header("location:pengaduan_sukses.php");
	} else {
		echo "File is not an image.";
	}
?>