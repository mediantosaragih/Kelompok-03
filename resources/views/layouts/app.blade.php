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
    <div class="head1" class="row" style="text-align: left; height: 60px;">
      <div class="col-lg-4">
      <a href="{{url('/index')}}" style="color: white;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PESONA <br>&nbsp; DANAU TOBA
      </a>
      </div>
      <div class="col-lg-4" style="text-align: right; top: -10px;margin-top: 20px;">
        <input type="text" name="email" class="box" placeholder="Cari di Sini" style="color: black;font-size: 15px; height: 30px;width: 300px"></input>
        <a href="#" class="fa fa-search" style="color: black;"></a>
      </div>
      <div class="col-lg-4" style="text-align: right;margin-top: 10px; ">
        <a type="button" href="{{ url('/login') }}" class="btn" style="background-color: white;color: black">ADMIN</a>
      </div>
    </div>
    <div class="head1" class="row" style="text-align: left; height: 30px;padding-top: 12px;margin-top: -5px; background-color: #DCDAD3; color: blue; font-size: 17px;">
      <div class="col-lg-6" style="top: -10px;">
        <!-- &nbsp;&nbsp;&nbsp;Pesona Agenda -->
        <a href="{{url('/index')}}" style="color: black">BERANDA</a>&nbsp;&nbsp;&nbsp;
        <a href="#" style="color: black">
           <select onChange="document.location.href=this.options[this.selectedIndex].value;" style="background: #DCDAD3;border-color: #DCDAD3">
              <option value="target link 1 disini">DESTINASI</option>
              <option value="target link 1 disini">DAIRI</option>
              <option value="target link 1 disini">HUMBAHAS</option>
              <option value="target link 1 disini">KARO</option>
              <option value="target link 1 disini">PAK-PAK BARAT</option>
              <option value="target link 1 disini">SAMOSIR</option>
              <option value="target link 1 disini">SIMALUNGUN</option>
              <option value="target link 1 disini">TAPANULI UTARA</option>
              <option value="{{url('destinasi_all')}}">TOBA</option>
            </select>


        </a>&nbsp;&nbsp;&nbsp;
        <a href="{{url('/utama.agenda')}}" style="color: black">AGENDA</a>
      </div>
      
    </div>
    <div class="head3" style="height: 10px; font-size: 15px;background-color: white; color: #67419A; text-align: left;margin-bottom: 14px;">&nbsp;&nbsp;&nbsp; Beranda</div>
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

