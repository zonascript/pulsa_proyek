<?php

namespace Pulsa\Http\Controllers;

use Illuminate\Http\Request;

use Pulsa\Http\Requests;
use Pulsa\Http\Controllers\Controller;

use Pulsa\Models\Personil;
use Pulsa\Models\Transaksi;
use Pulsa\Models\rekap_pulsa as Rekap;
use Pulsa\Models\loadUpload as LogUpload;

use DB;

class pulsaController extends Controller
{

    public function getIndex(Request $request)
    {
        $tahun = $request->input('tahun');
        if($tahun!=''){
            $rekap = Rekap::where('tahun', $tahun)->get();
        }else{
            $rekap = Rekap::select('*')->get();
        }            
        $i = 0;
        $waktu[$i] = '';
        foreach ($rekap as $key => $value) {
            if($waktu[$i]  != $value['bulan'].'-'.$value['tahun']){
                $i++;
                $waktu[$i] = $value['bulan'].'-'.$value['tahun'];
            }
            $tahun = $value['tahun'];
            $bulan[$i] = $value['bulan'];
        }
        return view('pulsa.index', compact('waktu', 'rekap', 'tahun', 'bulan'));
    }
    //TODO; tamabh fitur

    public function getPemakaian($value='')
    {
        $personil = Personil::get();
        return view('pulsa.insert', compact('personil'));
    }

    public function postPemakaian(Request $request)
    {
        $req = $request->all();
        // $req['pemakaian'] = 
        $trans = Transaksi::where('no_hp', $req['no_hp'])->where('pemakaian_bulan', $req['pemakaian_bulan'])->get();
        if (count($trans)==0) {
            # code...
            Transaksi::create($req);
            \Session::flash('alert-success', 'Berhasil Menambahkan Pemakaian');
        }else{
            \Session::flash('alert-warning', 'Pemakaian Sudah ada Sebelumnya');
        }
        return redirect()->back();
        # code...
    }

    // public function index()
    // {
    // 	$personil = Personil::all();
    //     return view('home', compact('personil'));
    // }

    // public function pemakaian($bulan='', $tahun='')
    // {
    // 	$transaksi = Transaksi::where(DB::raw('MONTH(tanggal_bayar)'), '=', $bulan)->where(DB::raw('YEAR(tanggal_bayar)'), '=', $tahun)->get();
    // 	return view('transaksi.bulan');
    // }

    // public function viewHome($value='')
    // {
    //     return view('pulsa.home');
    // }

    // public function getInsertPulsa($value='')
    // {
    //     $personil = Personil::groupBy('nama_personil')->get();
    //     return view('pulsa.insert', compact('personil'));
    // }

    public function getAjaxNohp($nohp='')
    {
        $personil = Personil::select('no_hp_telkomsel', 'no_hp_indosat')->where('id', $nohp)->get();
        return $personil->toArray();
    }

    public function getUploadPemakaian($value='')
    {
        return view('pulsa.uploadExcel');
    }

    public function postUploadPemakaian(Request $request)
    {
        $file1 = $request->file('excel');
        
        $data = \Excel::load($file1)->get()->toArray();
        Rekap::insert($data);
        $put_file = Storage::disk('local')->put('file/excel',  File::get($file1));

        return redirect('pulsa');
    }


    // public function postInsertPulsa($value='')
    // {

    // }

    // public function getHome($value='')
    // {
    //     return
    // }

   
    
}
