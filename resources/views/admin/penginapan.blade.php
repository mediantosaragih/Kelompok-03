@extends('layouts.admin')

@section('content')

<section>
            <div class="container">
                <div >
                    <center>
                        <h2>Penginapan </h2>
                    </center>
                    <div style="margin-bottom:20px">
                        <a href="{{ url('/tambahpenginapan') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Penginapan</a>
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
                                @foreach($penginapans as $penginapan)
                            
                                <tr>                                    
                                    <td></td>
                                    <td class="text-center">
                                        <img style="width:100px;height:70px" src="img/penginapan/{{$penginapan->gambar}}" alt="">
                                    </td>
                                    <td>{{$penginapan->nama}}</td>
                                    <td>{{$penginapan->kategori}}</td>
                                    <td>{{$penginapan->deskripsi}}</td>
                                    <td>
                                        <a href="{{ url('/editpenginapan',$penginapan->id) }}" class="btn btn-success button"><i class="fa fa-edit"></i> Edit</a>
                                        <br>                                        
                                        <a href="{{ url('/hapuspenginapan',$penginapan->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger button dropdown-item"><i class="fa fa-trash"></i> Hapus</a>
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