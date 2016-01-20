<?php

namespace Pulsa\Http\Controllers;

use Illuminate\Http\Request;

use Pulsa\Http\Requests;
use Pulsa\Http\Controllers\Controller;

use Pulsa\Models\Personil;
use Pulsa\Models\Transaksi;

use DB;

class pulsaController extends Controller
{

    public function index()
    {
    	$personil = Personil::all();
        return view('home', compact('personil'));
    }

    public function pemakaian($bulan='', $tahun='')
    {
    	$transaksi = Transaksi::where(DB::raw('MONTH(tanggal_bayar)'), '=', $bulan)->where(DB::raw('YEAR(tanggal_bayar)'), '=', $tahun)->get();
    	return view('transaksi.bulan');
    }

   
    
}
