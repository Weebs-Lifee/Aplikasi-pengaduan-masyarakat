<?php 
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $role = $_POST['role'];
    $date = date('Y-m-d H:m:i');
    $query = "UPDATE user set nama='$nama', email='$email', alamat='$alamat', telp='$telp', role='$role' where id='$id'";
    
    // menginput data ke database
    $send = mysqli_query($koneksi,$query) or die(mysqli_error($koneksi).$query);
    // mengalihkan halaman kembali ke index.php
    header("location:pengguna.php");
 
?>