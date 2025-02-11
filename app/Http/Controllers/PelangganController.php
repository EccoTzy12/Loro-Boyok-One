<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $pelanggan=pelanggan::where('PelangganID','LIKE','%'.$keyword.'%')
                            ->orWhere('NamaPelanggan','LIKE','%'.$keyword.'%')
                            ->orWhere('Alamat','LIKE','%'.$keyword.'%')
                            ->orWhere('NomerTelepon','LIKE','%'.$keyword.'%')
                            ->paginate();
        return view ('Pelanggan.index',compact(['pelanggan']));
    }

    public function tambah(){
        return view('Pelanggan.tambah');
    }

    public function kirim(Request $request){
        pelanggan::create($request->except(['_token','submit']));
        return redirect('/Pelanggan');
    }

    public function edit($PelangganID){
        $pelanggan=pelanggan::where('PelangganID',$PelangganID)->first();
        return view('Pelanggan.edit',compact([$PelangganID]));
    }

    public function update(Request $request, $PelangganID){
        $pelanggan=pelanggan::where('PelangganID',$PelangganID);
        $pelanggan->update($request->except(['_token','submit','_method']));
        return redirect('/Pelanggan');
    }

    public function delete($PelangganID){
        $pelanggan=pelanggan::where('PelangganID',$PelangganID);
        $pelanggan->delete();
        return redirect('/Pelanggan');
    }
}