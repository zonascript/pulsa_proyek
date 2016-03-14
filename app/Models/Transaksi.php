<?php

namespace Pulsa\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi_pulsa';

    protected $fillable = ['pemakaian', 'pemakaian_bulan', 'tanggal_bayar', 'no_hp', 'id_personil', 'created_by'];

    public function scopeListBulan($query, $bulan, $tahun)
    {
    	# code...
    	$pulsa = \DB::table("transaksi_pulsa")
            ->select('*')
            ->where('pemakaian_bulan', '=', $bulan.'/'.$tahun)
            ->join('personil', "personil.id", '=', 'transaksi_pulsa.id_personil')
            ->join('jabatan', "personil.jabatan_id", '=', 'jabatan.id');
            // ->paginate(2);
        return $pulsa;
    }

    public function personil()
    {
    	# code...
    	return $this->hasOne('Pulsa\Models\Personil', 'id_personil');
    }
}
