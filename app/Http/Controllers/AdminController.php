<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Destinasi;
use App\Transportasi;
use App\Penginapan;
use App\Oleh_oleh;
use App\Kuliner;
use App\Umum;

class AdminController extends Controller
{
    public function login(){
        return view('/login');
    }
    public function loginPost(Request $request){
        $this->validate($request,[
            'username' =>'required',
            'password'=>'required'
        ]);
        
        

        $username = $request->username;
        $password = $request->password;
        

        $data = Admin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->name);
                Session::put('login',TRUE);
                return redirect('homeAdmin');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function index()
    {
        // mengambil data dari table pegawai
        $destinasi = DB::table('destinasi')->get();
        // mengirim data pegawai ke view index
        return view('admin/destinasi',['destinasi' => $destinasi]);

         $transportasi = DB::table('transportasi')->get();
        // mengirim data pegawai ke view index
        return view('admin/transportasi',['transportasi' => $transportasi]);

        // $admin = DB::table('kuliner')->get();
        // return view('index',['kuliner' => $admin]);

        // $admin = DB::table('oleh_oleh')->get();
        // return view('index',['oleh_oleh' => $admin]);

        // $admin = DB::table('penginapan')->get();
        // return view('index',['penginapan' => $admin]);

     

        // $admin = DB::table('umum')->get();
        // return view('index',['umum' => $admin]);
 
    }
    public function toba()
    {
        return view ('admin.index');
    }
    public function destinasi()
    {
        $destinasis = Destinasi::all();

        return view ('admin.destinasi',['destinasis'=>$destinasis]);
    }
    public function tambahdestinasi(){
        return view('admin.tambahdestinasi');
    }
    public function editdestinasi($id){
        $data = Destinasi::findOrFail($id);

        return view('admin.editdestinasi', compact('data'));
    }
    public function tambahdestinasipost(Request $request){    
        
        
        $data = new Destinasi();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/destinasi',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        return redirect('/destinasi');
    }


    
    public function editdestinasipost(Request $request){     
        
        
        $data = Destinasi::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('img/destinasi/'.$data->gambar); 
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/destinasi',$newName);
            $data->gambar= $newName;
        }
        $data->deskripsi= $request->deskripsi;
        $data->save();
        
        return redirect('/destinasi');
    }
    public function hapusdestinasi($id){     
        Destinasi::find($id)->delete();
    
        return redirect('destinasi');
    }


    //transportasi//
    public function transportasi()
    {
        $transportasis = Transportasi::all();

        return view ('admin.transportasi',['transportasis'=>$transportasis]);
    }
    public function tambahtransportasi(){
        return view('admin.tambahtransportasi');
    }
    public function edittransportasi($id){
        $data = Transportasi::findOrFail($id);

        return view('admin.edittransportasi', compact('data'));
    }
    public function tambahtransportasipost(Request $request){    
        
        
        $data = new Transportasi();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/transportasi',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        return redirect('/transportasi');
    }


    
    public function edittransportasipost(Request $request){     
        
        
        $data = Transportasi::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('img/destinasi/'.$data->gambar); 
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/destinasi',$newName);
            $data->gambar= $newName;
        }
        $data->deskripsi= $request->deskripsi;
        $data->save();
        
        return redirect('/transportasi');
    }
    public function hapustransportasi($id){     
        transportasi::find($id)->delete();
    
        return redirect('transportasis');
    }
    



    //Penginapan//
    public function penginapan()
    {
        $penginapans = Penginapan::all();

        return view ('admin.penginapan',['penginapans'=>$penginapans]);
    }
    public function tambahpenginapan(){
        return view('admin.tambahpenginapan');
    }
    public function editpenginapan($id){
        $data = Penginapan::findOrFail($id);

        return view('admin.editpenginapan', compact('data'));
    }
    public function tambahpenginapanpost(Request $request){    
        
        
        $data = new Penginapan();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/penginapan',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        return redirect('/penginapan');
    }


    
    public function editpenginapanpost(Request $request){     
        
        
        $data = Penginapan::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('img/penginapan/'.$data->gambar); 
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/penginapan',$newName);
            $data->gambar= $newName;
        }
        $data->deskripsi= $request->deskripsi;
        $data->save();
        
        return redirect('/penginapan');
    }
    public function hapuspenginapan($id){     
        penginapan::find($id)->delete();
    
        return redirect('penginapan');
    }
    
    //Oleh Oleh//
    public function oleh_oleh()
    {
        $oleh_olehs = Oleh_oleh::all();

        return view ('admin.oleh_oleh',['oleh_olehs'=>$oleh_olehs]);
    }
    public function tambaholeh_oleh(){
        return view('admin.tambaholeh_oleh');
    }
    public function editoleh_oleh($id){
        $data = Oleh_oleh::findOrFail($id);

        return view('admin.editoleh_oleh', compact('data'));
    }
    public function tambaholeh_olehpost(Request $request){    
        
        
        $data = new Oleh_oleh();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/oleh_oleh',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        return redirect('/oleh_oleh');
    }


    
    public function editoleh_olehpost(Request $request){     
        
        
        $data = Oleh_oleh::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('img/oleh_oleh/'.$data->gambar); 
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/oleh_oleh',$newName);
            $data->gambar= $newName;
        }
        $data->deskripsi= $request->deskripsi;
        $data->save();
        
        return redirect('/oleh_oleh');
    }
    public function hapusoleh_oleh($id){     
        oleh_oleh::find($id)->delete();
    
        return redirect('oleh_oleh');
    }
    



    //Kuliner//
    public function kuliner()
    {
        $kuliners = Kuliner::all();

        return view ('admin.kuliner',['kuliners'=>$kuliners]);
    }
    public function tambahkuliner(){
        return view('admin.tambahkuliner');
    }
    public function editkuliner($id){
        $data = Kuliner::findOrFail($id);

        return view('admin.editkuliner', compact('data'));
    }
    public function tambahkulinerpost(Request $request){    
        
        
        $data = new Kuliner();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/kuliner',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        return redirect('/kuliner');
    }


    
    public function editkulinerpost(Request $request){     
        
        
        $data = Kuliner::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('img/kuliner/'.$data->gambar); 
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/kuliner',$newName);
            $data->gambar= $newName;
        }
        $data->deskripsi= $request->deskripsi;
        $data->save();
        
        return redirect('/kuliner');
    }
    public function hapuskuliner($id){     
        kuliner::find($id)->delete();
    
        return redirect('kuliner');
    }

    //Layanan Umum//
    public function umum()
    {
        $umums = Umum::all();

        return view ('admin.umum',['umums'=>$umums]);
    }
    public function tambahumum(){
        return view('admin.tambahumum');
    }
    public function editumum($id){
        $data = Umum::findOrFail($id);

        return view('admin.editumum', compact('data'));
    }
    public function tambahumumpost(Request $request){    
        
        
        $data = new Umum();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/umum',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        return redirect('/umum');
    }


    
    public function editumumpost(Request $request){     
        
        
        $data = Umum::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('img/umum/'.$data->gambar); 
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/umum',$newName);
            $data->gambar= $newName;
        }
        $data->deskripsi= $request->deskripsi;
        $data->save();
        
        return redirect('/kuliner');
    }
    public function hapusumum($id){     
        umum::find($id)->delete();
    
        return redirect('umum');
    }

}