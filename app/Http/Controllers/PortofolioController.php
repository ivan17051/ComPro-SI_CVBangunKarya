<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\Pengalaman;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PortofolioController extends Controller
{
    //Pengalaman
    public function index(){
        $pengalaman = Pengalaman::orderBy('tahun', 'desc')->orderBy('id', 'asc')->paginate(10);

        return view('portofolio.pengalaman.index', ['pengalaman' => $pengalaman]);
    }

    public function store(){
        $pengalaman = new Pengalaman();
        
        $pengalaman->kategori = request('kategori');
        $pengalaman->tahun = request('tahun');
        $pengalaman->pengalaman = request('pengalaman');

        $pengalaman->save();

        return redirect()->action('PortofolioController@index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $pengalaman = Pengalaman::findOrFail($id);

        return view('portofolio.pengalaman.update', ['unit' => $pengalaman]);
    }

    public function update($id){
        $pengalaman = Pengalaman::findOrFail($id);

        $pengalaman->kategori = request('kategori');
        $pengalaman->tahun = request('tahun');
        $pengalaman->pengalaman = request('pengalaman');
        
        $pengalaman->update();

        return redirect()->action('PortofolioController@index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $pengalaman = Pengalaman::findOrFail($id);

        $pengalaman->delete();
        
        return redirect()->action('PortofolioController@index')->with('success', 'Data Berhasil Dihapus');
    }

    //Gallery
    public function indexG(){
        $gallery = Gallery::paginate(20);

        return view('portofolio.gallery.index', ['gallery' => $gallery]);
    }

    public function storeG(){
        $gallery = new Gallery();
        
        $image = request()->file('upload_foto');
        if($image){
            $image_name = now(+7)->format('d-m-Y_H.i.s');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_portofolio.'.$ext;
            $upload_path = 'media/portofolio/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $gallery->upload_foto = $image_url;
        }

        $gallery->save();

        return redirect()->action('PortofolioController@indexG')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroyG($id){
        $gallery = Gallery::findOrFail($id);

        $gallery->delete();
        
        return redirect()->action('PortofolioController@indexG')->with('success', 'Data Berhasil Dihapus');
    }
}
