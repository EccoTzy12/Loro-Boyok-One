<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailpenjualan;


class DetailpenjualanController extends Controller
{
    public function index(Request $request){
        $keyword = $request -> keyword;
        $detailpenjualan = detailpenjualan::where('DetailID','LIKE','%'.$keyword.'%')
                                        ->orwhere('PenjualanID','LIKE','%'.$keyword.'%')
                                        ->orwhere('ProdukID','LIKE','%'.$keyword.'%')
                                        ->paginate();
        return view('detailpenjualan.index', compact(['detailpenjualan']));
    }

    public function tambah(){
        return view ('detailpenjualan.tambah');
    }

    Public function kirim(Request $request){
        detailpenjualan::create($request->except(['_token','submit']));
        return redirect('/detailpenjualan');
    }

    public function edit($DetailID){
        $detailpenjualan=detailpenjualan::where('DetailID',$DetailID)->first();
        return view('detailpenjualan.edit',compact(['detailpenjualan']));
    }

    public function update(Request $request, $DetailID){
        $detailpenjualan=detailpenjualan::where('DetailID',$DetailID);
        $detailpenjualan->update($request->except(['_token','submit','_method']));
        return redirect('/detailpenjualan');
    }

    public function delete($DetailID){
        $detailpenjualan=detailpenjualan::where('DEtailID',$DetailID);
        $detailpenjualan->delete();
        return redirect('/detailpenjualan');
    }
}
