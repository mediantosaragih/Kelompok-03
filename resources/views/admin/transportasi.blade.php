@extends('layouts.admin')

@section('content')

<section>
            <div class="container">
                <div >
                    <center>
                        <h2>Transportasi </h2>
                    </center>
                    <div style="margin-bottom:20px">
                        <a href="{{ url('/tambahtransportasi') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Transportasi</a>
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
                                @foreach($transportasis as $transportasi)
                            
                                <tr>                                    
                                    <td></td>
                                    <td class="text-center">
                                        <img style="width:100px;height:70px" src="img/transportasi/{{$transportasi->gambar}}" alt="">
                                    </td>
                                    <td>{{$transportasi->nama}}</td>
                                    <td>{{$transportasi->kategori}}</td>
                                    <td>{{$transportasi->deskripsi}}</td>
                                    <td>
                                        <a href="{{ url('/edittransportasi',$transportasi->id) }}" class="btn btn-success button"><i class="fa fa-edit"></i> Edit</a>
                                        <br>                                        
                                        <a href="{{ url('/hapustransportasi',$transportasi->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger button dropdown-item"><i class="fa fa-trash"></i> Hapus</a>
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