<?php
    include("koneksi.php");
    session_start();
    
    $error = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($koneksi,$_POST['email']);
      $mypassword = mysqli_real_escape_string($koneksi,$_POST['password']);
      
      $sql = "SELECT id FROM user WHERE email = ? and password = ?";
      $stmt = mysqli_prepare($koneksi, $sql);
      mysqli_stmt_bind_param($stmt, "ss", $myusername, md5($mypassword)); 
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      
      if(mysqli_stmt_num_rows($stmt) == 1) {
          $_SESSION['login_user'] = $myusername;
          echo '<script>
          alert("Selamat Datang '.$myusername.'");
          window.location.href="index.php";
          </script>';
      } else {
         $error = "Username / Password kamu salah, Tolong coba lagi ya ^_^";
         echo '<script>
               alert("'.$error.'");
               window.location.href="login.php";
               </script>'; 
               die();
      }
      
      mysqli_stmt_close($stmt);
    }
?>