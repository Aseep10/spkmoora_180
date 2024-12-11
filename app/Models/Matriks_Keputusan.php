<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriks_Keputusan extends Model
{
    use HasFactory;

    protected $table = 'tb_matriks_keputusan';

    protected $primaryKey = 'id';

    protected $fillable = ['kode_alternatif', 'kode_kriteria', 'value'];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class,'kode_alternatif','kode_alternatif');
    }
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class,'kode_kriteria','kode_kriteria');
    }


    
}
