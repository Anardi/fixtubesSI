<?php

namespace App\Http\Controllers;

use App\Models\kamarModel;
use App\Models\obatModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tenagamedisModel;

class tenagamedisController extends Controller
{
    public function index(){
        $data = array(
            "tenagamedis" => tenagamedisModel::all(),
        );
        return view('pages.#tenagamedis.tenagamedis', $data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#tenagamedis.tambahTenagaMedis', [
            'kamar' => kamarModel::all(),
            'obat' => obatModel::all(),
        ]);
    }

    public function store(Request $request)
    {
        tenagamedisModel::create($request->all());
        return redirect('/tenagamedis')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Delete Data
    public function delete($id_tenagamedis){
        $id_tenagamedis = tenagamedisModel::where('id_tenagamedis', $id_tenagamedis);
        $id_tenagamedis->delete();

        return redirect('/tenagamedis')->with('success', 'Data Berhasil Di Hapus!');
    }
    //Edit Data
    public function edit($id_tenagamedis)
    {
        $data = [
            'tenagamedis' => tenagamedisModel::find($id_tenagamedis),
            'obat' => obatModel::all(),
            'kamar' => kamarModel::all(),
        ];
        return view('pages.#tenagamedis.tampilTenagaMedis',$data);
    }
    
    public function update(Request $request, string $id_tenagamedis)
    {
        $data = [
            'id_tenagamedis'=>$request->id_tenagamedis,
            'kode_kamar'=>$request->kode_kamar,
            'kode_obat' => $request->kode_obat,
            'Nama_Tenagamedis'=>$request->Nama_Tenagamedis,
        ];
        tenagamedisModel::find($id_tenagamedis)->update($data);

        return redirect('/tenagamedis')->with('success', 'Data Berhasil Di Edit!');
    }
}
