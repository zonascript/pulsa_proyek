<?php

namespace Pulsa\Http\Controllers;

use Illuminate\Http\Request;

use Pulsa\Http\Requests;
use Pulsa\Http\Controllers\Controller;

use Pulsa\Models\Personil;
use Pulsa\Models\JenisKartu;
use Pulsa\Models\Jabatan;

use Validator;
use Redirect;

class personilController extends Controller
{
   
   public function getTambahPersonil()
   {
        $jenisKartu = JenisKartu::all();
        $jabatan = Jabatan::all();
        return view('personil.insert', compact('jenisKartu', 'jabatan'));
   }

   public function postTambahPersonil(Request $request)
   {
      $validator = Validator::make($request->all(), [
            'nama_personil' => 'required',
            'jabatan_id' => 'required',
            'no_hp' => 'required',
            'jenis_kartu_id' => 'required',
        ]);

        if ($validator->fails()) {
          return Redirect::back()
                      ->withErrors($validator)
                      ->withInput();
        }
        $input = $request->only(['nama_personil', 'jabatan_id', 'no_hp', 'jenis_kartu_id', 'jatuh_tempo']);
        Personil::create($input);
        return redirect()->route('home');
   }

   public function getPersonil($value='')
   {
      $personil = Personil::all();
      // dd($personil);
      return view('personil.tampil', compact('personil'));
   }
}
