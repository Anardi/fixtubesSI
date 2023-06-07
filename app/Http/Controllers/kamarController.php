<?php

namespace App\Http\Controllers;

use App\Models\jeniskamarModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\kamarModel;

class kamarController extends Controller
{
    public function index(){
        $data = array(
            "kamar" => kamarModel::all(),
        );
        return view('pages.#kamar.kamar',$data);
    }

    //Tambah Data
    public function create(){

        return view('pages.#kamar.tambahKamar', [
            'jenis_kamar' => jeniskamarModel::all(),
        ]);
    }

    public function store(Request $request)
    {
        kamarModel::create($request->all());
        return redirect('/kamar')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Edit Data
    public function edit($kode_kamar)
    {
        $data = [
            "kamar" =>kamarModel::find($kode_kamar),
            "kode_kamar" => $kode_kamar,
            'jenis_kamar' => jeniskamarModel::all()
        ];
        return view('pages.#kamar.tampilKamar',$data);
    }
    
    public function update(Request $request, string $kode_kamar)
    {
        $data = [
            'kode_kamar'=>$request->kode_kamar,
            'jenis_kamar'=>$request->jenis_kamar,
            'Tarif_layanan'=>$request->Tarif_layanan,
            'Fasilitas'=>$request->Fasilitas,
        ];
        kamarModel::find($kode_kamar)->update($data);

        return redirect('/kamar')->with('success', 'Data Berhasil Di Edit!');
    }

    //Delete Data
    public function delete($kode_kamar){
        $kamar = kamarModel::where('kode_kamar', $kode_kamar);
        $kamar->delete();

        return redirect('/kamar')->with('success', 'Data Berhasil Di Hapus!');
    }
}