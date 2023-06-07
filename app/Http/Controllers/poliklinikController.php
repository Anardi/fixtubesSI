<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\poliklinikModel;

class poliklinikController extends Controller
{
    public function index(){
        $data = array(
            "poliklinik" => poliklinikModel::all(),
        );
        return view('pages.#poliklinik.poliklinik', $data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#poliklinik.tambahPoliklinik');
    }

    public function store(Request $request)
    {
        poliklinikModel::create($request->all());
        return redirect('/poliklinik')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    //Edit Data
    public function edit($kode_poliklinik)
    {
        $data = [
            "poliklinik" => poliklinikModel::find($kode_poliklinik),
        ];
        return view('pages.#poliklinik.tampilPoliklinik',$data);
    }

    public function update(Request $request, string $kode_poliklinik)
    {
        $data = [
            'kode_poliklinik'=>$request->kode_poliklinik,
            'nama_poli'=>$request->nama_poli,
        ];
        poliklinikModel::find($kode_poliklinik)->update($data);

        return redirect('/poliklinik')->with('success', 'Data Berhasil Di Edit!');
    }

    //Delete Data

    public function delete($kode_poliklinik){
        $poliklinik = poliklinikModel::where('kode_poliklinik', $kode_poliklinik);
        $poliklinik->delete();

        return redirect('/poliklinik')->with('success', 'Data Berhasil Di Hapus!');
    }

}
