@extends('layouts.app')

@section('content')

<main>
		<div class="row" > 
			<div class="col-lg-2 sidebar" style="background-color: #DCDAD3"  >
				<div  class="kategori-head" style="text-align: center; background-color: #192437;color: white;height: 50px;padding-top: 15px;">
					<h3> &nbsp;&nbsp;SEMUA KATEGORI</h3>
				</div><br>				
				<div class="kategori-link" style="text-align: center; background-color: #DCDAD3;height: 40px;">
					<a href="{{url('/destinasi_all')}}">
						&nbsp;&nbsp;DESTINASI
					</a>
				</div><br>
				<div class="kategori-link" style="text-align: center; background-color: #DCDAD3;height: 40px">
					<a href="{{url('/penginapan_all')}}">&nbsp;&nbsp;
						PENGINAPAN
					</a>
				</div><br>
				<div class="kategori-link" style="text-align: center;background-color: #DCDAD3;height: 40px">
					<a href="{{url('/oleholeh_all')}}">&nbsp;&nbsp;
						PUSAT OLEH - OLEH
					</a>
				</div><br>
				<div class="kategori-link" style="text-align: center;background-color: #DCDAD3;height: 40px">
					<a href="{{url('/kuliner_all')}}">&nbsp;&nbsp;
						KULINER
					</a>
				</div><br>
				<div class="kategori-link" style="text-align: center;background-color: #DCDAD3;height: 40px">
					<a href="{{url('/transportasi_all')}}">&nbsp;&nbsp;
						TRANSPORTASI
					</a>
				</div><br>
				<div class="kategori-link" style="text-align: center;background-color: #5C5156;height: 40px">
					<a href="{{url('/umum_all')}}">&nbsp;&nbsp;
						UMUM
					</a>
				</div><br>
			</div>
					<div class="col-lg-10 content">
			<h1 style="text-align: center;padding-top: 20px;">
					Umum
				</h1><br><br>
				<div style="text-align: center;">
					<a href="{{url('/umum_all')}}"><button  style="height: 30px; width: 90px; bcolor: black;">ALL</button></a>
					<a href="{{url('/umum_bank')}}"><button style="height: 30px; width: 90px;color: black;">BANK</button></a>
					<a href="{{url('/umum_pos')}}"><button style="height: 30px; width: 90px;color: black;background-color: #A05968;">POS </button></a>
					<a href="{{url('/umum_polisi')}}"><button style="height: 30px; width: 90px;color: black;">POLISI</button></a>
					<a href="{{url('/umum_ibadah')}}"><button style="height: 30px; width: 90px;color: black;">IBADAH</button></a>
				</div>



				<div class="row" style="padding-left: 130px;padding-right: 130px;">
            <div class="col-lg-6" style="top: 50px;">
              <div class="card mb-4 box-shadow" style="border: none;">
                <a href="museum_tb.html">
                  <img src="image/tobasa/museum.jpg" style="width: 100%;height: 300px;">
                  <p id="image_label" style="background-color: #A05968;height: 35px; width: 100%; padding-bottom: -20px;" ><span style="color: white; font-size: 18px;padding-left: 200px;">Museum TB Silalahi</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-6" style="top: 50px;">
              <div class="card mb-4 box-shadow"style="border: none;">
                <a href="#" >
                  <img src="image/tobasa/gibeon.jpg"  style="width: 100%;height: 300px;">
                  <p id="image_label" style="background-color: #A05968;height: 35px; width: 100%; padding-bottom: -20px;" ><span style="color: white; font-size: 18px;padding-left: 250px;">Bukit Gibeon</span></p>
                </a>
              </div>
            </div>

            <div class="col-lg-6" style="top: 50px;">
              <div class="card mb-4 box-shadow"style="border: none;" >
                <a href="#">
                  <img src="image/tobasa/eden.jpg"  style="width: 100%;height: 300px;">
                  <p id="image_label" style="background-color: #A05968;height: 35px; width: 100%; padding-bottom: -20px;" ><span style="color: white; font-size: 18px; padding-left: 230px;">Taman Eden</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
 
            <div class="col-lg-6" style="top: 50px;">
              <div class="card mb-4 box-shadow"style="border: none;">
                <a href="#">
                  <img src="image/tobasa/tarabunga.jpg"  style="width: 100%;height: 300px;">
                  <p id="image_label" style="background-color: #A05968;height: 35px; width: 100%; padding-bottom: -20px;" ><span style="color: white; font-size: 18px; padding-left: 200px;">Panatapan Tarabunga</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-6" style="top: 50px;">
              <div class="card mb-4 box-shadow"style="border: none;">
                <a href="#">
                  <img src="image/tobasa/pantai.jpg" style="width: 100%;height: 300px;">
                  <p id="image_label" style="background-color: #A05968;height: 35px; width: 100%; padding-bottom: -20px;" ><span style="color: white; font-size: 18px;padding-left: 200px;">Pantai Lumban Bulbul</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
              </div>

            <div class="col-lg-6" style="top: 50px;">
              <div class="card mb-4 box-shadow"style="border: none;">
                <a href="#">
                  <img src="image/tobasa/situmurun.jpg"  style="width: 100%;height: 300px;">
                  <p id="image_label" style="background-color: #A05968;height: 35px; width: 100%; padding-bottom: -20px;" ><span style="color: white; font-size: 18px;padding-left: 200px;">Air Terjun Situmurun</span></p>
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>

              </div>
              <div class="row text-center" style="margin-left: -100px;">
                            <nav class="blog-pagination" >
		                        <ul class="pagination">
                                    <li class="page-item"><a href="#" class="page-link"><</a></li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">></a></li>
		                        </ul>
		                    </nav>
                    </div>

<br><br><br><br><br><br><br>
            </div>
				
				
			</div>
<!-- 			<div class="col-lg-10 content">
				<h1 style="text-align: center;padding-top: 20px;">
					Destinasi
				</h1><br><br>
				<div style="text-align: center;">
					<button style="height: 30px; width: 60px; background-color: #BDB8AD;">ALL</button>
					<button style="height: 30px; width: 60px;">ALAM</button>
					<button style="height: 30px; width: 60px;">ROHANI</button>
					<button style="height: 30px; width: 60px;">SEJARAH</button>
				</div>
				<br><br>
				<div style="text-align: center;">
					<img src="image/museum.jpg" style="height: 300px; width: 400px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="image/gibeon.jpg"  style="height: 300px; width: 400px;">
				</div><br><br>
				<div style="text-align: center;">
					<img src="image/eden.jpg" style="height: 300px; width: 400px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="image/tarabunga.jpg"  style="height: 300px; width: 400px;">
				</div>
				<br><br>
				<div style="text-align: center;">
					<img src="image/pantai.jpg" style="height: 300px; width: 400px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="image/situmurun.jpg"  style="height: 300px; width: 400px;">
				</div>
				<br><br>


			</div>
 -->		</div>	
	</main>









@endsection