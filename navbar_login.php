<style type="text/css">
    #tombol{
        border-radius: 10px;
        width: 100%;
    }
    #tombol:hover{
      background-color: white;
      color: black;
      transition: .5s;
    }

    .navbar-brand:hover{
      color: #fff;
      text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #208FC6, 0 0 30px #208FC6, 0 0 40px #208FC6, 0 0 55px #208FC6, 0 0 75px #208FC6;
      transition: .5s;
    }

    .navbar{
      background: #CB356B;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #BD3F32, #CB356B);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #BD3F32, #CB356B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .navbar-nav{
        text-transform: uppercase;
        color: #e6fcff; 
      }
    @media (max-width: 992px){
      .navbar-brand{
        font-size: 15px;
      }
      .navbar-nav{
        text-align: center;
        text-transform: none;
      }
      .navbar-toggler:hover{
        background-color: #fff;
        transition: .5s;
      }
    }
  </style>

<nav class="navbar navbar-expand-lg fixed-top navbar-light">
  <div class="container">
      <a class="navbar-brand" href="#" style="color:white; text-transform: uppercase;"></i>aplikasi pengaduan masyarakat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav offset-md-6" >
          <a class="nav-item nav-link active" href="index.php" style="color: white;"><i class="fa fa-home"></i> Home</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
               <i class="fa fa-user"></i> <?php echo $row['nama']; ?> 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item text-center" href="#">Profile</a>
              <a class="dropdown-item text-center" href="logout.php">Logout</a>
            </div>
          </li>
        </div>
      </div>
  </div>
</nav>



