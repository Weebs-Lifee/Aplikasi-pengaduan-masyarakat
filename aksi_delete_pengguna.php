<?php 
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data id yang di kirim dari url
    $id = $_POST['id'];
    
    
    // menghapus data dari database
    mysqli_query($koneksi,"DELETE from user where id='$id'") or die(mysqli_error($koneksi)."DELETE from user where id='$id'");
    
    // mengalihkan halaman kembali ke index.php
    header("location:pengguna.php");
 
?>