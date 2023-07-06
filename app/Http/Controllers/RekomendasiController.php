<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use App\Http\Requests\StoreRekomendasiRequest;
use App\Http\Requests\UpdateRekomendasiRequest;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function hasilRekomendasi(Request $request)
    {
        // Mengambil nilai input dari form
        $rasa = $request->input('rasa_sambal');
        $warnaSambal = $request->input('warna_sambal');
        $harga = $request->input('harga');
        $porsi = $request->input('porsi_makan');
        $parkir = $request->input('parkir');
        $tempatMakan = $request->input('tempat_makan');

        // Menjalankan query untuk mencocokan parameter di database
        $rekomendasi = Rekomendasi::where('rasa_sambal', $rasa)
            ->where('warna_sambal', $warnaSambal)
            ->where('harga', $harga)
            ->where('porsi_makan', $porsi)
            ->where('parkir', $parkir)
            ->where('tempat_makan', $tempatMakan)
            ->get();

        // Mengeluarkan 'penjual' dari hasil query
        $penjual = $rekomendasi->pluck('penjual');
        $alamat = $rekomendasi->pluck('alamat');
        $jamBuka = $rekomendasi->pluck('jam_buka');
        $jamTutup = $rekomendasi->pluck('jam_tutup');

        // Render halaman form dengan menyertakan data penjual
        return view('/rekomendasi', compact('penjual', 'alamat','jamBuka','jamTutup'));
    }
}
