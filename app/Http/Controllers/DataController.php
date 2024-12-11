<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function normalisasi()
    {
        $normalisasi = DB::table('matriks_normalisasi')->get();
        return view('matriks_normalisasi', ['normalisasi'=>$normalisasi]);
    }

    public function nilai_optimasi()
    {
        $optimasi = DB::table('nilai_optimasi')->get();
        return view('nilai_optimasi ',['optimasi'=>$optimasi]);
    }

    public function perankingan()
    {
        $ranking = DB::table('perankingan')->get();
        return view('perankingan',['ranking'=>$ranking]);
    }


}
