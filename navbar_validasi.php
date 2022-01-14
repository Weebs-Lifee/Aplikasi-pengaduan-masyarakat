<?php
session_start();
 if($_SESSION == null){ 
  include('navbar.php'); ?>
  <!-- navbar sebelum login -->
<?php } else{ 
  include('navbar_login.php'); 
  ?>
<?php } ?>