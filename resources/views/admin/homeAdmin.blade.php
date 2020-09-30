@extends('layouts.admin')

@section('content')
        <!-- start home -->
        <section id="home" class="text-center">
          <div class="templatemo_headerimage">
            <div class="flexslider">
              <ul class="slides">
                <li>
                    <img src="{{ ('images/slider/1.jpg') }}" alt="Slide 1">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                          <h1 class="wow fadeInDown" data-wow-delay="2000">Selamat datang di website HPI tobasa</h1>
                          <h2 class="wow fadeInDown" data-wow-delay="2000">
                            <span class="rotate"></span>
                        </h2>
                        
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ ('images/slider/2.jpg') }}" alt="Slide 2">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                          <h1 class="wow fadeInDown" data-wow-delay="2000">Penyedia layanan pramuwisata tobasa</h1>
                          <h2 class="wow fadeInDown" data-wow-delay="2000">
                            <span class="rotate"></span>
                        </h2>                        
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ ('images/slider/3.jpg') }}" alt="Slide 3">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                          <h1 class="wow fadeInDown" data-wow-delay="2000">Kami siap melayani anda</h1>
                          <h2 class="wow fadeInDown" data-wow-delay="2000">
                            <span class="rotate"></span>
                        </h2>                        
                        
                        </div>
                    </div>
                </li>
              </ul>
            </div>
          </div>                
        </section>
        <!-- end home -->



        <!-- start berita -->
        <section id="berita">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8 wow fadeInLeft" data-wow-delay="2000">
                        <h3>Berita
                            <a type="button" href="{{ url('/addBerita') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Berita</a></h3>
                        <div class="row berita">
                            
                        	@foreach($destinasi as $destinasi)
                                <div class="col-lg-6 col-sm-12 col-xs-12 berita">
                                    <a type="button" class="btn btn-success button" href="{{ url('/editBerita', $berita->id) }}" style=""><i class="fa fa-edit"></i></a>
                                    <a type="button"  class="btn btn-danger button dropdown-item" href="{{url('/deleteBerita',$berita->id)}}" 
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                                    <img src="/img/berita/{{$berita->gambar}}" class="img-responsive" alt="company 1">
                                    <h3>{{$berita->judul}}</h3><a href="">  Lanjut membaca</a>
                                </div>
                        		 
                        	@endforeach
                        </div>
                        
                    </div>
                    <div class="col-sm-4 col-md-4 wow fadeInRight" data-wow-delay="2000">
                        <h3>Rencana Kerja
                        	<a type="button" href="{{ url('/addRencana') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Rencana Kerja</a></h3>
                        </h3>
                        
						</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end berita -->
        
        
        
        <!-- start about -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <center>
                        <h3>Tentang HPI Tobasa</h3>
                    </center> 
                </div>
                <div class="row">
                    <div class="blog">
                        <div class="gambar" style="background-image: url('img/pelantikan-hpi.jpg');"></div>        
                        
                        <div class="col-sm-12 konten">
                            <h3>Terbentuknya DPC HPI Tobasa</h3>
                            <p>&nbsp &nbsp &nbsp Guna mendukung sektor pariwisata di Kabupaten Toba Samosir (Tobasa), Dewan Pimpinan Cabang (DPC) Himpunan Pramuwisata Indonesia (HPI) Kabupaten Tobasa dibentuk.
                                Pembentukan itu ditandai dengan pelantikan pengurus periode 2017-2022 oleh Ketua DPD HPI Sumatera Utara Kus Endro di Aula Hotel Marsaringar di Balige, Senin (18/9).
                                Pelantikan itu dihadiri langsung oleh Direktur Destinasi Pariwisata Badan Pengelola Otorita Danau Toba (BPODT) M Tata S Ridwanullah, Bupati Tobasa Darwin Siagian, Kapolres Tobasa AKBP Elvianus Laoli, Ketua DPRD Boike Pasaribu, Wakil Ketua DPRD Tony M Simanjuntak, Danramil Balige Kapt Inf M Simanjuntak, Asisten II Jhonpiter Silalahi, Kadis Pariwisata Tobasa Ultrisonlahir Simangunsong, dan para anggota HPI Tobasa.
                                
                                    Dalam kesempatan itu, Kus Endro berpesan agar seluruh pengurus dan anggota bekerja memajukan pariwisata. “Jangan bangga dilantik, tetapi harus bisa bekerja memajukan pariwisata,” ungkapnya.
                                Direktur Destinasi Pariwisata BPODT M Tata S Ridwanullah mengapresiasi terbentuknya HPI di Tobasa yang diharapkan menjadi mitra dalam pembangunan sektor pariwisata di daerah itu.
                                Bupati Darwin Siagian berpesan agar HPI Tobasa turut serta membangun pariwisata di Tobasa. “Bekerjalah sebaik mungkin untuk menarik minat wisatawan sekaligus mempromosikan sektor wisata di daerah kita ini,” pungkasnya.
                                Sementara itu, Kapolres Tobasa AKBP Elvianus Laoli juga menyambut baik terbentuknya HPI Tobasa. “Selamat kepada pengurus.
                                Untuk memulai itu memang sangat sulit, tetapi tetap semangat. Fokus dengan tujuan organisasi. Dalam melaksanakan tugas, mari kita berkomitmen bahwa negara kita negara yang bermoral, patuh hukum. Jangan karena tantangan, lantas menghalalkan segala cara,” ungkapnya.
    
                            </p>
                        </div>
                    </div>
                    

                </div>    
            </div>
        </section>
        
        </section>
        <!-- end about -->
@endsection