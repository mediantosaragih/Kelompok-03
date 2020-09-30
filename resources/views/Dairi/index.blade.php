@extends('layouts.app')

@section('content')

 <main>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 35px; text-align  : center; font-family: sans-serif;padding-top: 20px;">FESTIVAL DANAU <br> TOBA 2019</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">Festival Danau Toba <br> akan berlangsung <br> selama empat hari <br>   pada 9-12 Desember <br>  2019.Dilaksanakan di <br>  seluruh kawasan <br>  danau Toba</h3>
        </div>
        <div class="col-sm-9 gambar" >
        <img src="image/solu.jpg" style="width: 1200px;height: 650px;">
        </div>  
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 35px; text-align: center; font-family: sans-serif; padding-top: 20px;">12.12 HOTEL <br> TIARA BUNGA</h1><br><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 12% <br>   MENGINAP DI HOTEL <br>  BERLAKU dari Tanggal <br>  12-14 DESEMBER <br></h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/kolam.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
        <h1 style="font-size: 35px; text-align: center; font-family: sans-serif;">12.12 Swimbath <br> Destinasi</h1><br><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 20% <br>   Rekreasi bersama <br>  Keluarga, <br>  BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/swimbath.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Carolina <br> Cottages</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 15% <br> Dengan   menginap  <br>  lebih <br>  dari satu hari. <br>BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/carolina.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Alloyna <br> Country Cottage</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 25% <br> Dengan   menginap  <br>  lebih <br>  dari satu hari. <br>BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/cottage.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Grand <br> Maju Hotel</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 15% <br> Dengan   menginap  <br>  lebih <br>  dari satu hari. <br>BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/hotel.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Brews <br> Brothers Coffee</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 32% <br> Minum Coffee di Brews Brothers Coffee.  <br>  Berlaku dari Tanggal <br>  12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/brothers.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>



       
  </div>


</div><br>  <br><br>
<div style="padding-left: 50px;" >
  <h2 style="background-color: #D3C2D2; width: 1350px;padding-left: 100px;letter-spacing: 2px; font-size: 35px;  ">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="text-align: center;"> Simalungun</strong><br><br>  Kabupaten ini memiliki 32 kecamatan dengan luas 438.660 ha<br> atau 6,12 % dari luas wilayah Provinsi Sumatra Utara.<br> Kecamatan yang paling luas adalah Kecamatan Hatonduhan <br>dengan luas 33.626 ha,  yang paling kecil adalah Kecamatan <br>Jawa Maraja Bah Jambi dengan luas 3.897 ha. Keseluruhan<br> kecamatan terdiri dari 345 desa/nagori dan 22 kelurahan.<br><br>
  </h2>
</div>
<div style="padding-left: 50px;"><br>
  <h1 style="font-size: 50px; font-family: sans-serif;" >Kategori</h1><br><br>
</div>
          <div class="row" style="padding-left: 50px;padding-right: 50px;">
            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <a href="#" id="image_div">
                  <img src="image/simalungun/destinasi.jpg" style="width: 450px;height: 500px;">
                  <p id="image_label"><span>DESTINASI</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <a href="#" id="image_div">
                  <img src="image/simalungun/transportasi.jpg" style="width: 450px;height: 500px;">
                  <p id="image_label"><span>TRANSPORTASI</span></p>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <a href="#" id="image_div">
                  <img src="image/simalungun/penginapan.jpg" style="width: 450px;height: 500px;">
                  <p id="image_label" style="padding-left: 70px;"><span>PENGINAPAN</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
 
            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <a href="#" id="image_div">
                  <img src="image/simalungun/oleholeh.jpg" style="width: 450px;height: 500px;">
                  <p id="image_label"><span>PUSAT OLEH - OLEH</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <a href="" id="image_div">
                  <img src="image/simalungun/kuliner.jpg" style="width: 450px;height: 500px;">
                  <p id="image_label"><span>KULINER</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <a href="#" id="image_div">
                  <img src="image/simalungun/umum.jpg" style="width: 450px;height: 500px;">
                  <p id="image_label" style="padding-left: 50px;"><span>LAYANAN UMUM</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
 
 
                <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3602210938716!2d99.1458446148483!3d2.385674398261408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1587597636575!5m2!1sid!2sid" width="1380" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
        </div>
        </div>
    </div>


</main>

@endsection