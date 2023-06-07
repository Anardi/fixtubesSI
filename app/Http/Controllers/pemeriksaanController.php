<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\pemeriksaanModel;

class pemeriksaanController extends Controller
{
    public function index(){
        $data = array(
            "pemeriksaan" => pemeriksaanModel::all(),
        );
        return view('pages.#pemeriksaan.pemeriksaan', $data);
    }
    //Tambah Data
    public function create(){
        return view('pages.#pemeriksaan.tambahPemeriksaan');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        pemeriksaanModel::create($request->all());
        return redirect('/pemeriksaan')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Edit Data
    public function edit($kode_pemeriksaan)
    {
        $data = [
            "data_pemeriksaaan" =>pemeriksaanModel::find($kode_pemeriksaan),
            "kode_pemeriksaan" => $kode_pemeriksaan,
            'pemeriksaan' => pemeriksaanModel::all()
        ];
        return view('pages.#pemeriksaan.tampilPemeriksaan',$data);
    }

    public function update(Request $request, string $kode_pemeriksaan)
    {
        $data = [
            'kode_pemeriksaan'=>$request->kode_pemeriksaan,
            'tgl_periksa'=>$request->tgl_periksa,
            'Keluhan'=>$request->Keluhan,
            'Keterangan'=>$request->Keterangan,
            'Biaya_pemeriksaan'=>$request->Biaya_pemeriksaan,
        ];
        pemeriksaanModel::find($kode_pemeriksaan)->update($data);

        return redirect('/pemeriksaan')->with('success', 'Data Berhasil Di Edit!');
    }

    //Delete Data
    public function delete($kode_pemeriksaan){
        $pemeriksaan = pemeriksaanModel::where('kode_pemeriksaan', $kode_pemeriksaan);
        $pemeriksaan->delete();

        return redirect('/pemeriksaan')->with('success', 'Data Berhasil Di Hapus!');
    }

}
