<?php

namespace Pulsa\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKartu extends Model
{
    //
    protected $table = 'jenis_kartu';

    public function Personil($value='')
    {
    	return $this->hasMany('App/Models/Personil');
    }
}
