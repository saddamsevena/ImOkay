<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Artikel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelsController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->paginate(5);
    
        return view('admin.artikel.show',compact('artikel'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.artikel.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'isi_artikel' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'top_news' => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/article/img', $foto->hashName());

        Artikel::create([
            'judul' => $request->judul,
            'author' => $request->author,
            'isi_artikel' => $request->isi_artikel,
            'foto' => $foto->hashName(),
            'top_news' => $request->top_news,
        ]);
        return redirect()->route('admin.show.artikel')
                        ->with('success', 'Artikel telah ditambahkan');
    }
    
    public function edit($id)
    {

    }

    public function destroy($id)
    {
        $post = Artikel::where('id', $id)->delete();
        return redirect()->route('admin.show.artikel')
                        ->with('success', 'Artikel telah dihapus');
    }
}