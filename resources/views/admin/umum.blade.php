@extends('layouts.admin')

@section('content')

<section>
            <div class="container">
                <div >
                    <center>
                        <h2>Layanan Umum </h2>
                    </center>
                    <div style="margin-bottom:20px">
                        <a href="{{ url('/tambahumum') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Umum</a>
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
                                @foreach($umums as $umum)
                            
                                <tr>                                    
                                    <td></td>
                                    <td class="text-center">
                                        <img style="width:100px;height:70px" src="img/umum/{{$umum->gambar}}" alt="">
                                    </td>
                                    <td>{{$umum->nama}}</td>
                                    <td>{{$umum->kategori}}</td>
                                    <td>{{$umum->deskripsi}}</td>
                                    <td>
                                        <a href="{{ url('/editumum',$umum->id) }}" class="btn btn-success button"><i class="fa fa-edit"></i> Edit</a>
                                        <br>                                        
                                        <a href="{{ url('/hapusumum',$umum->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger button dropdown-item"><i class="fa fa-trash"></i> Hapus</a>
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