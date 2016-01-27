<?php

namespace Pulsa\Http\Controllers;

use Illuminate\Http\Request;

use Pulsa\Http\Requests;
use Pulsa\Http\Controllers\Controller;

use Pulsa\Models\Personil;
// use Pulsa\Models\JenisKartu;
use Pulsa\Models\Jabatan;

use Validator;
use Redirect;
use Datatables;

class personilController extends Controller
{
   
   public function getTambahPersonil()
   {
        // $jenisKartu = JenisKartu::all();
        $jabatan = Jabatan::all();
        return view('personil.insert', compact('jabatan'));
   }

   public function postTambahPersonil(Request $request)
   {
      $validator = Validator::make($request->all(), [
            'nama_personil' => 'required',
            'jabatan_id' => 'required',
        ]);

        if ($validator->fails()) {
          return Redirect::back()
                      ->withErrors($validator)
                      ->withInput();
        }
        $input = $request->only(['nama_personil', 'jabatan_id', 'no_hp_telkomsel', 'no_hp_indosat']);
        Personil::create($input);
        return redirect('personil/personil');
   }

   public function getPersonil($value='')
   {
      
      return view('personil.tampil');
   }

   public function getAnyData()
   {
      $personil = Personil::all();
      return Datatables::of($personil)
        ->add_column('jabatan', function($personil){
          return $personil->jabatan->nama_jabatan;
        })
        ->make(true);
   }
}
