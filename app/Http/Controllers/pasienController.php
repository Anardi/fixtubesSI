<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasienModel;

class pasienController extends Controller
{
    //Tampil
    public function index(){
        $data = array(
            "pasien" => pasienModel::all(),
        );
        return view('pages.#pasien.pasien', $data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#pasien.tambahPasien');
    }

    public function store(Request $request)
    {
        PasienModel::create($request->all());
        return redirect('/pasien')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //delete
    public function delete($kode_pasien){
        $pasien = pasienModel::where('kode_pasien', $kode_pasien);
        $pasien->delete();

        return redirect('/pasien')->with('success', 'Data Berhasil Di Hapus!');
    }
    //Edit Data
    public function edit($kode_pasien)
    {
        $data = [
            "data_pasien" =>pasienModel::find($kode_pasien),
            "kode_pasien" => $kode_pasien,
        ];
        return view('pages.#pasien.tampilPasien',$data);
    }
    
    public function update(Request $request, string $kode_pasien)
    {
        $data = [
            'kode_pasien'=>$request->kode_pasien,
            'Nama_pasien'=>$request->Nama_pasien,
            'Alamat_Pasien'=>$request->Alamat_Pasien,
            'Umur_pasien'=>$request->Umur_pasien,
            'Jenis_kelamin'=>$request->Jenis_kelamin,
            'gol_darah'=>$request->gol_darah,
  
        ];
        pasienModel::find($kode_pasien)->update($data);

        return redirect('/pasien')->with('success', 'Data Berhasil Di Edit!');
    }
}
