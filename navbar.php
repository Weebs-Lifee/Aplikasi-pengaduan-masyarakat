<style type="text/css">
  .btn{
    border-radius: 10px;
    width: 100%;
  }
  .navbar-nav{
    text-transform: uppercase;
    color: #e6fcff; 
  }
  .btn:hover{
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
  /* background: #CB356B;
  background: -webkit-linear-gradient(to right, #BD3F32, #CB356B);
  background: linear-gradient(to right, #BD3F32, #CB356B);*/
  background-color: #0093E9;
  background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
  }

  #teks{
    position: relative;
    top: 7px;
  }
  @media (max-width: 992px){
    .navbar-brand{
      font-size: 15px;
    }
    .navbar-nav{
      text-transform: none;
      text-align: center;
    }
  }
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
      <a class="navbar-brand"  href="#" style="color:white; text-transform: uppercase;">aplikasi pengaduan wibu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav col-md-7 offset-md-6">
          <a class="nav-item nav-link active text-white" id="teks" href="https://instagram.com/adin_shobirin"><i class="fas fa-info"></i> Tentang Saya</a>
           <a class="nav-item nav-link active" href="login.php"><button class="btn btn-outline-light">MASUK</button></a>
           <a class="nav-item nav-link active" href="register.php"><button class="btn btn-primary">DAFTAR</button></a>
        </div>
      </div>
    </div>
  </nav>