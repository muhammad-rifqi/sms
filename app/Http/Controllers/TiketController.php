<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tiket;
use App\Kategori;
use App\Progress;
use App\Close;
use DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = DB::table('tikets')
        ->select(DB::raw('*, datediff(tanggal_selesai, tanggal_masuk) as selisih'))
        ->get();
        return view('tiket.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jumlah = Tiket::count();

        if($jumlah > 0){
            $single = Tiket::orderBy('id', 'desc')->first();
            $notik = $single->id + 1;
            $hasil = sprintf("%07s", $notik);
        }else{
            $hasil = sprintf("%07s",1);
        }
        $ip = $_SERVER['REMOTE_ADDR'];

        $kategori = Kategori::all();

        return view('tiket.form', compact('hasil','ip','kategori'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->file('foto') != NULL) {

          
            $foto = $request->file('foto');
            $nama_file = $foto->getClientOriginalName();
            $newName = explode(".", $nama_file);
            $ext = end($newName);
            $ganti_nama = time().'.'.$ext;
            $destination = 'upload/';
            $foto->move($destination,$ganti_nama);

            $a = new Tiket();
            $a->no_tiket = $request->no_tiket;
            $a->tanggal_masuk = $request->tanggal_masuk;
            $a->nama = $request->nama;
            $a->handphone = $request->handphone;
            $a->email = $request->email;
            $a->ip_address = $request->ip_address;
            $a->isi_pengaduan = $request->isi_pengaduan;
            $a->foto = $ganti_nama;
            $a->kategori = $request->kategori;
            $a->status = $request->status;
            $a->operator = $request->operator;
            $a->save();            
        } 

        return redirect('/dashboard/tiket')->with('status', 'Tiket created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $data = Tiket::findOrFail($id);
        return view('tiket.edit',compact('data','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file('foto') != NULL) {
 
            $foto = $request->file('foto');
            $nama_file = $foto->getClientOriginalName();
            $newName = explode(".", $nama_file);
            $ext = end($newName);
            $ganti_nama = time().'.'.$ext;
            $destination = 'upload/';
            $foto->move($destination,$ganti_nama);

            $a = Tiket::findOrFail($id);
            $a->no_tiket = $request->no_tiket;
            $a->tanggal_masuk = $request->tanggal_masuk;
            $a->nama = $request->nama;
            $a->handphone = $request->handphone;
            $a->email = $request->email;
            $a->ip_address = $request->ip_address;
            $a->isi_pengaduan = $request->isi_pengaduan;
            $a->foto = $ganti_nama;
            $a->kategori = $request->kategori;
            $a->status = $request->status;
            $a->operator = $request->operator;
            $a->save();            

        } else {
            $a = Tiket::findOrFail($id);
            $a->no_tiket = $request->no_tiket;
            $a->tanggal_masuk = $request->tanggal_masuk;
            $a->nama = $request->nama;
            $a->handphone = $request->handphone;
            $a->email = $request->email;
            $a->ip_address = $request->ip_address;
            $a->isi_pengaduan = $request->isi_pengaduan;
            $a->kategori = $request->kategori;
            $a->status = $request->status;
            $a->operator = $request->operator;
            $a->save();        
        }

        return redirect('/dashboard/tiket')->with('status', 'Tiket updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$foto)
    {
        if(!empty($foto)){
            $data = Tiket::findOrFail($id);
            $data->delete();
            unlink(public_path('upload/'.$foto));
            return redirect('/dashboard/tiket')->with('status', 'Tiket Deleted!');
        }else{
            $data = Tiket::findOrFail($id);
            $data->delete();
            return redirect('/dashboard/tiket')->with('status', 'Tiket Deleted!');
        }
        
    }

    public function delete($id)
    {
            $data = Tiket::findOrFail($id);
            $data->delete();
            return redirect('/dashboard/tiket')->with('status', 'Tiket Deleted!');
        
    }


    public function close($id)
    {
        $data = Tiket::findOrFail($id);
        return view('tiket.close',compact('data'));
    }


    public function progress($id)
    {
        $data = Tiket::findOrFail($id);
        return view('tiket.progress',compact('data'));
    }


    public function update_progress(Request $request)
    {


        $update = Tiket::where('id', $request->id_tiket)->update( array('status'=>'2'));
        if($update){
            $a = new Progress();
            $a->id_tiket = $request->id_tiket;
            $a->no_tiket = $request->no_tiket;
            $a->no_progress = $request->no_progress;
            $a->tanggal_progress = $request->tanggal_progress;
            $a->pengaduan = $request->pengaduan;
            $a->tanggapan = $request->tanggapan;
            $a->status = $request->status;
            $a->operator = $request->operator;
            $a->log = 1;
            $a->save(); 
        }       

        return redirect('/dashboard/tiket')->with('status', 'Tiket Progress!');
    }

    public function update_close(Request $request)
    {

        
        $update = Tiket::where('id', $request->id_tiket)->update( array('status'=>'3','tanggal_selesai'=> $request->tanggal_close));
        if($update){
            $a = new Close();
            $a->id_tiket = $request->id_tiket;
            $a->no_tiket = $request->no_tiket;
            $a->no_close = $request->no_close;
            $a->tanggal_close = $request->tanggal_close;
            $a->pengaduan = $request->pengaduan;
            $a->penutupan = $request->penutupan;
            $a->status = $request->status;
            $a->operator = $request->operator;
            $a->log = 1;
            $a->save();        
        }

        return redirect('/dashboard/tiket')->with('status', 'Tiket Close!');
    }


    public function new()
    {
        $data = Tiket::where('status','=','1')->get();
        return view('log.new',compact('data'));
    }

    public function onprogress()
    {
        $data = Progress::all();
        return view('log.progress',compact('data'));
    }


    public function done()
    {
        $data = Close::all();
        return view('log.close',compact('data'));
    }


}
