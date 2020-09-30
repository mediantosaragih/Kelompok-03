@extends('layouts.admin')

@section('content')

<section>
            <div class="container">
                <div >
                    <center>
                        <h2>Kuliner </h2>
                    </center>
                    <div style="margin-bottom:20px">
                        <a href="{{ url('/tambahkuliner') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Kuliner</a>
                    </div>
                    <div class="table-responsive">                    
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Gambar</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th style="width:50%">Deskripsi</th>
                                    <th>Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kuliners as $kuliner)
                            
                                <tr>                                    
                                    <td></td>
                                    <td class="text-center">
                                        <img style="width:100px;height:70px" src="img/kuliner/{{$kuliner->gambar}}" alt="">
                                    </td>
                                    <td>{{$kuliner->nama}}</td>
                                    <td>{{$kuliner->kategori}}</td>
                                    <td>{{$kuliner->deskripsi}}</td>
                                    <td>
                                        <a href="{{ url('/editkuliner',$kuliner->id) }}" class="btn btn-success button"><i class="fa fa-edit"></i> Edit</a>
                                        <br>                                        
                                        <a href="{{ url('/hapuskuliner',$kuliner->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger button dropdown-item"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>                    
                                </tr>
                                @endforeach
                                                                                            
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- end about -->

        <section>
                
        </section> 

@endsection