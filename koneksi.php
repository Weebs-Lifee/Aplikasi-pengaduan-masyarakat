<?php 
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'pengaduan_masyarakat';
    $koneksi = mysqli_connect($localhost,$username,$password,$database);

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

?>