<?php 
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $role = $_POST['role'];
    $date = date('Y-m-d H:m:i');
    $query = "INSERT INTO user (nama,email,password,alamat,telp,role,created_at) values('$nama','$email','$password','$alamat','$telp','$role','$date')";
    
    // menginput data ke database
    $send = mysqli_query($koneksi,$query) or die(mysqli_error($koneksi).$query);
    // mengalihkan halaman kembali ke index.php
    header("location:pengguna.php");
 
?>