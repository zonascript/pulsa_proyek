<?php

namespace Pulsa\Models;

use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    //
    protected $table = "personil";
    protected $fillable = ['nama_personil', 'jabatan_id', 'no_hp', 'jenis_kartu_id', 'jatuh_tempo'];

    public function jabatan()
    {
        return $this->belongsTo('Pulsa\Models\Jabatan');
    }

    public function jenis_kartu()
    {
        return $this->belongsTo('Pulsa\Models\JenisKartu');
    }

	// public function user()
 //    {
 //        return $this->('App\User');
 //    }

}
