<?php
    // koneksi database
	include 'break.php';
    include 'koneksi.php';

	$target_dir = "uploads/";
	$isi_laporan = $_POST['isi_laporan'];
	$id = $_POST['id'];
	$user_id = $row['id'];
	$photo = null;
	$date = date('Y-m-d'); //
	$status = 'new';

	$ses_sql = mysqli_query($koneksi,"select * from pengaduan where id = '$id' ");
   
   	$detail_pengaduan  = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   	if ($_FILES["photo"]["tmp_name"]) {
   		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	   	$photo = $target_file;
	   	move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
   	} else {
		$photo = $detail_pengaduan['photo'];
	}
	
	$query = "UPDATE pengaduan set isi_laporan='$isi_laporan', photo='$photo' where id='$id'";
	$send = mysqli_query($koneksi,$query) or die(mysqli_error($koneksi).$query);
    
    header("location:pengaduan.php");
?>