<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Objek Relational Mapping)
    	$listKategoriArtikel=kategori_artikel::all(); //select * from kategori_artikel


    	//blade
    	return view('kategori_artikel.index',compact('listKategoriArtikel'));
    	//return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	$kategoriArtikel=kategori_artikel::where('id', $id)->first(); // select * from kategori_artikel where id=$id limit 1
    	$kategoriArtikel=kategori_artikel::find($id);

    	return view ( 'kategori_artikel.show', compact('kategoriArtikel'));
    }
}
