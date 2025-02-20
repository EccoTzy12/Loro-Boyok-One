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
        return view('detailpenjualan.index', compact(['/detailpenjualan']));
    }
}
