<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $stock = Anggota::select('barang')->sum('qty as stockqty')->groupBy('barang')->get();
        $new = Tiket::where('status','=',1)->count();
        $progress = Tiket::where('status','=',2)->count();
        $close = Tiket::where('status','=',3)->count();
        return view('home',compact('new','progress','close'));
    }
}
