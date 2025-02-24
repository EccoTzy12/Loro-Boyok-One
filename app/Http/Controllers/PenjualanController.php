<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $penjualan = penjualan::where('PenjualanID','LIKE','%'.$keyword.'%')
                                ->orwhere('PelangganID','LIKE','%'.$keyword.'%')
                                ->paginate();
        return view ('penjualan.index',compact(['penjualan']));
    }

    public function tambah()
    {
        return view ('penjualan.tambah');
    }

    public function kirim(Request $request)
    {
        penjualan::create($request->except(['_token','submit']));
        return redirect('/penjualan');
    }

    public function delete($PenjualanID)
    {
        $penjualan = penjualan::where('PenjualanID',$PenjualanID);
        $penjualan->delete();
        return redirect('/penjualan');
    }

    public function edit($PenjualanID)
    {
        $penjualan = penjualan::where('PenjualanID',$PenjualanID)->first();
        return view('penjualan.edit',compact(['penjualan']));
    }

    public function update(Request $request,$PenjualanID)
    {
        $penjualan = penjualan::where('PenjualanID',$PenjualanID);
        $penjualan->update($request->except(['_token','submit','_method']));
        return redirect('/penjualan');
    }
}
