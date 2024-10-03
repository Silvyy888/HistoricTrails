<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function create(){
        return view('admin.artikel-create');
    }

    public function show(){
        // $data['produk'] = Produk::all();
        $data['artikel'] = Article::orderby('judul','asc')->get();
        $data['total'] = $data['artikel']->count();

        return view('admin.dshbrd-admin', $data);
    }

    public function search(Request $request){
        $data['artikel'] = Article::where('judul',$request->cari)->orWhere('kategori',$request->cari)->get();
        $data['total'] = $data['artikel']->count();

        return view('admin.dshbrd-admin',$data);
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image'
        ]);
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request -> file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        $artikel = Article::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);
        if($artikel){
            Session::flash('pesan','Data berhasil ditambahkan');
        }else{
            Session::flash('pesan','Data gagal ditambahkan');
        }

        return redirect('dshbrd');
    }

    public function edit(Request $request){
        $data['artikel'] = Article::all();
        $data['artikel'] = Article::find($request->id);
        return view('admin.artikel-edit',$data);
    }

    public function update(Request $request){
        // $produk = Produk::find($request->id);

        // Storage::delete($produk->foto);

        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        // $update =
        $update = Article::where('id',$request->id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);
        if($update){
            Session::flash('pesan','Artikel berhasil diubah');
        }else{
            Session::flash('pesan','Artikel gagal diubah');
        }
        return redirect('dshbrd');
    }

    public function delete(Request $request)
    {
        $artikel = Article::find($request->id);
        $delete = Article::where('id', $request->id)->delete();
        if ($delete) {
            if($artikel->foto) {
                Storage::delete('foto/' .$artikel->foto);
            }
            Session::flash('pesan', 'Artikel berhasil dihapus');
        }else{
            Session::flash('pesan', 'Artikel gagal dihapus');
        }
        return redirect('dshbrd');
    }
}
