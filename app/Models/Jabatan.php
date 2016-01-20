<?php

namespace Pulsa\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table = 'jabatan';

    public function Personil($value='')
    {
    	# code...
    	return $this->hasMany('Pulsa/Models/Personil');
    }
}
