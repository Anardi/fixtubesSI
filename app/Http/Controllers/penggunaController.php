<?php

namespace App\Http\Controllers;

use App\Models\pegawaiModel;
use Illuminate\Http\Request;
use App\Models\penggunaModel;

class penggunaController extends Controller
{
    public function index(){
        $data = array(
            "pengguna" => penggunaModel::all(),
        );
        return view('pages.#pengguna.pengguna', $data);
    }
    //Tambah Data
    public function create(){
        return view('pages.#pengguna.tambahPengguna', [
            'pegawai' => pegawaiModel::all(),
        ]);
    }

    public function store(Request $request)
    {
        penggunaModel::create($request->all());
        return redirect('/pengguna')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Delete Data
    public function delete($id_pengguna){
        $pengguna = penggunaModel::where('id_pengguna', $id_pengguna);
        $pengguna->delete();

        return redirect('/pengguna')->with('success', 'Data Berhasil Di Hapus!');
    }
    //Edit Data
    public function edit($id_pengguna)
    {
        $data = [
            "pegawai" => pegawaiModel::all(),
            "pengguna" => penggunaModel::find($id_pengguna),
        ];
        return view('pages.#pengguna.tampilPengguna',$data);
    }
    
    public function update(Request $request, string $id_pengguna)
    {
        $data = [
            'id_pengguna'=>$request->id_pengguna,
            'id_pegawai'=>$request->id_pegawai,
            'username' => $request->username,
            'password'=>$request->password,
        ];
        penggunaModel::find($id_pengguna)->update($data);

        return redirect('/pengguna')->with('success', 'Data Berhasil Di Edit!');
    }
}
