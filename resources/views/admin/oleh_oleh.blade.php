@extends('layouts.admin')

@section('content')

<section>
            <div class="container">
                <div >
                    <center>
                        <h2>Oleh Oleh </h2>
                    </center>
                    <div style="margin-bottom:20px">
                        <a href="{{ url('/tambaholeh_oleh') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Oleh Oleh</a>
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
                                @foreach($oleh_olehs as $oleh_oleh)
                            
                                <tr>                                    
                                    <td></td>
                                    <td class="text-center">
                                        <img style="width:100px;height:70px" src="img/oleh_oleh/{{$oleh_oleh->gambar}}" alt="">
                                    </td>
                                    <td>{{$oleh_oleh->nama}}</td>
                                    <td>{{$oleh_oleh->kategori}}</td>
                                    <td>{{$oleh_oleh->deskripsi}}</td>
                                    <td>
                                        <a href="{{ url('/editoleh_oleh',$oleh_oleh->id) }}" class="btn btn-success button"><i class="fa fa-edit"></i> Edit</a>
                                        <br>                                        
                                        <a href="{{ url('/hapusoleh_oleh',$oleh_oleh->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger button dropdown-item"><i class="fa fa-trash"></i> Hapus</a>
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