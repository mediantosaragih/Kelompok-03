<!DOCTYPE html> 
<html>
<head>
  <title>PARIWISATA</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/stylees.css">
  <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.slim.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
 
</head>
<body>
  <header>
    <div class="head1" class="row" style="text-align: left; height: 80px;">
      <div class="col-lg-6" >
      <a href="{{url('/homeAdmin')}}" style="color: white;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PESONA <br>&nbsp; DANAU TOBA
      </a>
      </div>
      <div class="col-lg-6" style="text-align: right; ">
        <a href="{{url('/logout')}}" >Logout</a>
      </div>
    </div>
    <div class="head1" class="row" style="text-align: left; height: 40px; background-color: white; color: black;">
      <div class="col-lg-6" style="top: -10px;">
        &nbsp;&nbsp;&nbsp;Home Admin
      </div>
      
    </div>
    <div class="head3" style="height: 30px; font-size: 15px; text-align: left;">&nbsp;&nbsp;&nbsp; HOME</div>
  </header>



    @yield('content')


    <br><br><br>



   <footer>
    
    <div class="foot" style="height: 130px;">
      <div class="col-sm-9" style="text-align: left; font-size: 15px;" >
        <a>Hubungi Kami</a><br><br>
        Jl. Sisingamangaraja No. 14<br>
        pariwisata@gmail.com<br>
        082212345678        
      </div>
      <div class="col-sm-1" style="text-align: right;padding-right: 10px;"><br>
        <a href="#" style="color: white; height: 50px;" >
          <i class="fa fa-instagram square fa-2x"></i>
        </a>
      </div>
      <div class="col-sm-1" style="text-align: center;"><br>
        <a href="#" style="color: white">
        <i class="fa fa-twitter square fa-2x"></i>
        </a>
      </div>
      <div class="col-sm-1" style="text-align: left;"><br>
        <a href="#" style="color: white">
          <i class="fa fa-facebook square fa-2x"></i>
        </a>
      </div>
     <!-- <br>  
    <div>
      <img src="image/icon/ig.jpg" style="height: 50px;">
      <img src="image/icon/twiter.jpg" style="height: 50px;">
      <img src="image/icon/fb.jpg" style="height: 50px;">
    </div>
 -->

    </div>
    
  </footer>

  <script src="js/bootstrap.js"></script>
   
</body>
</html>

