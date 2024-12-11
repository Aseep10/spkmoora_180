<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'tb_kriteria';

    protected $primaryKey = 'kode_kriteria';

    public $incrementing = false;

    protected $fillable = ['kode_kriteria','nama_kriteria','bobot','atribut'];

    public function matrik_keputusan()
    {
        return $this->hasMany(Matriks_Keputusan::class, 'kode_kriteria','kode_kriteria');
    }
}
