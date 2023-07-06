<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{
    // public function submitForm(Request $request)
    // {
    //     $rasa = $request->input('rasa');
    //     $warnaSambal = $request->input('warna_sambal');
    //     $harga = $request->input('harga');
    //     $porsi = $request->input('porsi');
    //     $parkir = $request->input('parkir');
    //     $lokasiMakan = $request->input('lokasi_makan');

    //     $results = DB::table('data_latih')
    //         ->where('rasa', $rasa)
    //         ->where('warna_sambal', $warnaSambal)
    //         ->where('harga', $harga)
    //         ->where('porsi', $porsi)
    //         ->where('parkir', $parkir)
    //         ->where('lokasi_makan', $lokasiMakan)
    //         ->get();

    //     // Lakukan sesuatu dengan $results

    //     return view('hasil', ['results' => $results]);
    // }
}
