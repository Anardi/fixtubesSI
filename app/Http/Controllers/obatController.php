<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ObatModel;

class obatController extends Controller
{
    // public function index(){
    //     $obat = obatModel::all();
    //     return view('pages.#obat.obat',compact('obat'));
    // }

    public function index(){
        $data = array(
            "obat" => obatModel::all(),
        );
        return view('pages.#obat.obat',$data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#obat.tambahObat');
    }

    public function store(Request $request)
    {
        obatModel::create($request->all());
        return redirect('/obat')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Data
    public function delete($kode_obat){
        $obat = obatModel::where('kode_obat', $kode_obat );
        $obat->delete();

        return redirect('/obat')->with('success', 'Data Berhasil Di Hapus!');
    }
    //Edit Data
    public function edit($kode_obat)
    {
        $data = [
            "data_obat" =>obatModel::find($kode_obat),
            "kode_obat" => $kode_obat,
            'obat' => obatModel::all()
        ];
        return view('pages.#obat.tampilObat',$data);
    }

    public function update(Request $request, string $kode_obat)
    {
        $data = [
            'kode_obat'=>$request->kode_obat,
            'Nama_Obat'=>$request->Nama_Obat,
            'harga'=>$request->harga,
            'stock'=>$request->stock,
            'Keterangan'=>$request->Keterangan,
        ];
        obatModel::find($kode_obat)->update($data);

        return redirect('/obat')->with('success', 'Data Berhasil Di Edit!');
    }
}
