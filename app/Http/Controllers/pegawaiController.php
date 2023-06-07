<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\jadwalmodel;
use Illuminate\Http\Request;
use App\Models\pegawaiModel;

class pegawaiController extends Controller
{
    public function index(){
        $pegawai = array(
            "pegawai" => pegawaiModel::all(),
        );
        return view('pages.#pegawai.datapegawai', $pegawai);
    }   

    //Tambah Data
    public function create(){
        return view('pages.#pegawai.tambahPegawai', [
            'jadwal' => jadwalmodel::all(),
            'dokter' => dokter::all(),
        ]);
    }

    public function store(Request $request)
    {
        pegawaiModel::create($request->all());
        return redirect('/pegawai')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Delete Data
    public function delete($id_pegawai){
        $pegawai = pegawaiModel::where('id_pegawai', $id_pegawai);
        $pegawai->delete();

        return redirect('/pegawai')->with('success', 'Data Berhasil Di Hapus!');
    }
    //Edit Data
    public function edit($id_pegawai)
    {
        $data = [
            "pegawai" =>pegawaiModel::find($id_pegawai),
            'jadwal' => jadwalmodel::all(),
            'dokter' => dokter::all(),
        ];
        return view('pages.#pegawai.tampilPegawai',$data);
    }
    
    public function update(Request $request, string $id_pegawai)
    {
        $data = [
            'id_pegawai'=>$request->id_pegawai,
            'kode_jadwal'=>$request->kode_jadwal,
            'Alamat_pegawai'=>$request->Alamat_pegawai,
            'telp_pegawai'=>$request->telp_pegawai,
            'ttl_pegawai' => $request->ttl_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'id_dokter' => $request->id_dokter

        ];
        pegawaiModel::find($id_pegawai)->update($data);

        return redirect('/pegawai')->with('success', 'Data Berhasil Di Edit!');
    }

}
