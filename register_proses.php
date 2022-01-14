<?php
include('koneksi.php');
$nama		= $_POST['nama'];
$email		= $_POST['email'];
$password	= md5($_POST['password']);
$telephone  = $_POST['telp'];
$alamat		= $_POST['alamat'];
$role       = $_POST['role'];

// $query = "INSERT INTO tb_user (nama, email, password, telp, alamat) VALUES ('". $nama. "','". $email ."','". $password ."','". $telephone ."','". $alamat ."')";
// $foo = mysqli_query($host,$query);

$query  = "INSERT INTO user (nama, email, password, alamat, telp,  role) VALUES ('$nama', '$email', '$password', '$alamat', '$telephone', '$role')";
$foo  = mysqli_query($koneksi, $query);
header('Location: register_sukses.php');

?>