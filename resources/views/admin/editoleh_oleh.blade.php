

<section id="detail-profil-pramuwisata">
            <div class="container">
                <div class="row">
                    <center>
                        <h3>Profil Oleh Oleh</h3>
                    </center> 
                </div>
                <div class="row">
                <form method="post" enctype="multipart/form-data"  action="{{url('/editoleh_olehpost')}}">
                {{ csrf_field() }}
                    <div class="profile">
                        <input type="text" name="id" value="{{$data->id}}" hidden>
                        <div class="col-lg-4 col-md-4 col-sm-4 img-profile text-center">

                            <img src="/img/avatar.png" alt="">
                            <input type="file"  required name="gambar" id="photo" >
                        </div>
                        
                        
                        <div class="col-lg-8 col-md-8 col-sm-8 info-profile">
                            <h4>Oleh Oleh</h4>
                            <hr>
                            <table>
                           
                            <tr>
                                <td class="pr-80">Nama</td>
                                <td class="pr-20">:</td>
                                <td><input name="nama" id="divisi" type="text" required  value="{{$data->nama}}" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="pr-80">Kategori</td>
                                <td class="pr-20">:</td>
                                <td><input name="kategori" id="divisi" type="text" required  value="{{$data->kategori}}" class="form-control"></td>
                            </tr>
                            
                            </table>
                            
                        </div>
                        <div class="col-lg-12">
                            
                            <div class="pengalaman">
                                <h4>Deskripsi</h4>
                                <hr>
                                <textarea name="deskripsi" id="pengalaman" class="form-control"  required id="exampleFormControlTextarea1" style="resize: none;" rows="8">
                                 {{$data->deskripsi}}
                                </textarea>
                                
                            </div>
                            <br><br>
                            <div class="button-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <a type="reset" class="btn btn-danger" href="{{url('/profileAdmin')}}">
                                    Batal
                                </a>
                                                
                            </div>  
                        </div>
                       

                    </div>
                </form>      
                </div>
                    
            </div>
        </section>
        
       

        <section>
                
        </section>
