<?php

namespace App\Http\Controllers\Artikel;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    
    public function create()
    {
        return view('artikel.add');
    }


    public function index()
    {
        $artikel= Artikel::latest()->paginate(10);
        $artikelterbaru = Artikel::latest()->paginate(5);
        return view ('artikel.home',compact('artikel','artikelterbaru'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    

    public function read($id)
    {
        $artikel = DB::table('artikels')->where('id',$id)->get();
        return view('artikel.artikel',['artikel'=>$artikel]);
    }
}
