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

    public function viewHome($value='')
    {
        return view('pulsa.home');
    }

    public function getInsertPulsa($value='')
    {
        $personil = Personil::groupBy('nama_personil')->get();
        return view('pulsa.insert', compact('personil'));
    }

    public function getAjaxNohp($nohp='')
    {
        $personil = Personil::select('no_hp_telkomsel', 'no_hp_indosat')->where('id', $nohp)->get();
        return $personil->toArray();
    }

    public function postInsertPulsa($value='')
    {

    }

   
    
}
