<?php 
include 'koneksi.php';
session_start();
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM pengaduan WHERE id='$id'");
header("location:pengaduan.php");
?>