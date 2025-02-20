<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    Public function index(Request $request){
        $keyword = $request -> keyword;
        $produk = produk::where('ProdukID','LIKE','%'.$keyword.'%')
                        ->orwhere('NamaProduk','LIKE','%'.$keyword.'%')
                        ->paginate();
        return view('produk.index',compact(['produk']));
    }

    public function tambah(){
    return view('produk.tambah');
    }

    public function kirim(Request $request){
        produk::create($request->except(['_token','_submit']));
    return redirect('/produk');
    }

    public function delete($ProdukID){
        $produk = produk::where('ProdukID',$ProdukID);
        $produk -> delete();
        return redirect('/produk');
    }

    public function edit($produkID){
        $produk = produk::where('ProdukID',$ProdukID)->first();
        return view('produk.edit',compact(['produk']));
    }

    public function update(Request $request,$ProdukID){
        $produk = produk::where('ProdukID',$ProdukID);
        $produk -> update($request->except(['_token','submit','_method']));
        return redirect('/produk');
    }
}
